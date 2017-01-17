<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.user');
    }
    /*
     * Show the list of products
     *
     * @return products response
     * */
    public function product_list(){
        Session::put('product_search', Input::has('ok') ? Input::get('search') : (Session::has('product_search') ? Session::get('product_search') : ''));
        Session::put('product_field', Input::has('field') ? Input::get('field') : (Session::has('product_field') ? Session::get('product_field') : 'name'));
        Session::put('product_sort', Input::has('sort') ? Input::get('sort') : (Session::has('product_sort') ? Session::get('product_sort') : 'asc'));
        $products = Products::where('name', 'like', '%' . Session::get('product_search') . '%')
            ->orderBy(Session::get('product_field'), Session::get('product_sort'))->paginate(10);
        return view('products.productlist', ['products' => $products]);
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
