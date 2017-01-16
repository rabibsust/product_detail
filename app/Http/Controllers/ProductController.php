<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('products.user')->with('products',$products);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Products::find($id);
        return view('products.show')->with('product',$product);
    }
    /**
     * Create page of product
     *
     * @return products form
     * */
    public function create()
    {

    }
    /**
     * Store the product in database
     *
     * @return products list
     * */
    public function store(Request $request)
    {
        $product = new Products();
        $destinationPath = public_path('images');
        if ($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $ext = $request->image->getClientOriginalExtension();
                $image = $request->name.'.'.$ext;
                $request->file('image')->move($destinationPath,$image);
                $product->image = $image;
            }
            else{
                $product->image = "";
            }
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect('home');
    }
    /**
     * Edit page of product
     *
     * @return products form
     * */
    public function edit($id)
    {
        $product=Products::find($id);
        return view('products.edit',compact('product'));
    }
    /**
     * Update the product in database
     *
     * @return products list
     * */
    public function update(Request $request)
    {
        $product=Products::find($request->id);
        $destinationPath = public_path('images');
        if ($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $ext = $request->image->getClientOriginalExtension();
                $image = $request->name.'.'.$ext;
                $request->file('image')->move($destinationPath,$image);
                $product->image = $image;
            }
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect('home');
    }
    /**
     * Delete the product in database
     *
     * @return products list
     * */
    public function destroy($id)
    {
        Products::find($id)->delete();
        return redirect('home');
    }
}
