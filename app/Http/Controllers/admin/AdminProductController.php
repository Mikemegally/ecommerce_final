<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.productindex',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.productcreate',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        $path = $request->file('image')->store('products','public');
        Product::create([
            'name'=>$request['name'],
            'price'=>$request['price'],
            'count'=>$request['count'],
            'image'=> $path,
            'description'=>$request['description'],
            'category_id'=>$request['category_id']
        ]);
        return redirect()->route('adminproduct.create')->with('success','product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $product)
    {
         $products = Product::where('id',$product)->first();
         return view('admin.productshow',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product = Product::where('id',$id)->first();
        $categories = Category::all();
        return view('admin.productupdate',compact(['product','categories']));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, int $id)
    {
        $product = Product::where('id',$id)->first();
        $product->update($request->all());
        return redirect()->route('adminproduct.index')->with('success','product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Product::where('id',$id)->delete();
        return redirect()->route('adminproduct.index')->with('success','product deleted successfully');
    }
}
