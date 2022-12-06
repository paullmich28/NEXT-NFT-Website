<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function adminCatalog(){
        return view('admin.catalog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'productimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'productName' => 'required',
            'link' => 'required'
        ],[
            'productimg.required' => 'The product image is required'
        ]);

        $imgDir = $request->file('productimg')->getClientOriginalName();
        $request->productimg->move(public_path('images/products'), $imgDir);
        $product = new Product();
        $product->img = $imgDir;
        $product->name = $request->productName;
        $product->link = $request->link;
        $product->save();

        return redirect()->back()->with('status', 'The product has been added!');
    }

    public function deleteProduct($id){
        $product = Product::findOrFail($id);

        if(File::exists(public_path('/images/products/'.$product->img))){
            File::delete(public_path('/images/products/'.$product->img));
        }

        $productDel = Product::where('id', $product->id)->delete();

        return redirect('/admin/catalog')->with('status', 'Product berhasil di-delete!');
    }

    public function collab(){
        return view('admin.collab');
    }

    public function faq(){
        return view('admin.faq');
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
        $product = Product::findOrFail($id);

        return view('admin.edit', ['product' => $product]);
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
        $request->validate([
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required',
            'link' => 'required'
        ]);

        $product = Product::findOrFail($id);

        if($request->hasFile('img')){
            File::delete(public_path('/images/products/'.$product->img));
            $imgDir = $request->file('img')->getClientOriginalName();
            $request->img->move(public_path('images/products'), $imgDir);
            $product->name = $request->name;
            $product->img = $imgDir;
            $product->link = $request->link;
            $product->save();
            return redirect()->back()->with('status', 'The product has been updated!');
        }else{
            $product->name = $request->name;
            $product->link = $request->link;
            $product->save();
            return redirect()->back()->with('status', 'The product has been updated!');
        }
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
