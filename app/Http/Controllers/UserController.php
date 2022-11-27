<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        return view('admin.home');
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
            return route('homepage');
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
        /* $request->validate([
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

        return Redirect::route('login')->with('status', 'Sukses'); */
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
    
    public function catalogshow(){
        return view('catalog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
