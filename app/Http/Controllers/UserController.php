<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function loginRoute(){
        return view('admin.login');
    }

    public function registerRoute(){
        return view('admin.register');
    }

    public function adminHome(){
        if (Auth::guard('web')->user()->is_admin) {
            return view('admin.home');
        }else{
            return Redirect::route('homepage');
        }
        
    }

    public function loginProcess(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $check = $request->only('email', 'password');
        if(Auth::guard('web')->attempt($check)){
            if(Auth::guard('web')->user()->is_admin){
                return redirect()->route('admin_home')->with('status', 'admin');
            }else{
                return redirect()->route('homepage')->with('status', 'user');
            }
        }else{
            return redirect()->back()->with('fail', "Your password doesn't match!");
        }
    }

    public function homepageRedirect(){
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'pass' => 'required|min:6|max:15',
            'cpass' => 'required|same:pass'
        ],[
            'pass.required' => 'The password field is required.',
            'cpass.required' => 'The confirm password field is required.',
            'cpass.same' => 'The confirm password and password must match.',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->pass);
        
        $user->save();

        return Redirect::route('login')->with('status', 'Sukses');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
    
    public function catalogshow(){
        return view('catalog');
    }

    public function changePass(){
        return view('admin.change_pass');
    }

    public function changePassProc(Request $request){
        $request->validate([
            'old_pass' => 'required',
            'new_pass' => 'required|min:6|max:15',
            'c_pass' => 'required|same:new_pass'
        ],[
            'old_pass.required' => 'The old password is required.',
            'new_pass.required' => 'The new password is required.',
            'c_pass.required' => 'The confirm password is required',
            'c_pass.same' => 'The confirm password and new password must match.',
        ]);

        if(Hash::check($request->old_pass, Auth::guard('web')->user()->password)){
            $id = Auth::guard('web')->user()->id;
            $user = User::find($id);

            $user->update([
                'password' => Hash::make($request->new_pass)
            ]);
            
            return back()->with('success','Your password has been updated!');
        }else{
            return back()->with('fail', "The old password doesn't match");
        }
    }

    public function adminCatalog(){
        return view('admin.catalog');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'productimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'productName' => 'required'
        ],[
            'productimg.required' => 'The product image is required'
        ]);

        $imgDir = $request->file('productimg')->getClientOriginalName();
        $request->productimg->move(public_path('images/products'), $imgDir);
        $product = new Product();
        $product->img = $imgDir;
        $product->name = $request->productName;
        $product->save();

        return redirect()->back()->with('status', 'The product has been added!');
    }

    public function show($id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if (Auth::guard('web')->user()->is_admin) {
            return view('admin.profile');
        }else{
            return Redirect::route('homepage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email'
        ]);

        $id = Auth::guard('web')->user()->id;
        $user = User::find($id);

        $user->update([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email
        ]);
         
        return back()->with('success','Your profile has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
