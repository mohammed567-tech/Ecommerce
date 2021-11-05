<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
        // show products
        function index()
        {
            $products = product::get();
            return view("index" , ['products' => $products]);
            // dd($products);
        }
        function show($id)
        {
            $products = product::findorfail($id);
            return view("show" ,['products' => $products]);
        }
    // update products
        function edit($id)
        {

            $products= product::findorfail($id) ;
            return view("edit" , ['products' => $products]);
            // dd($products);
        }
        function update( $id , Request $request )

        {
            $products = product::findorfail($id);

            request()->validate([
                'name'=> 'required',
                'desc'=> 'required',
            ]);
            $products->name =$request->name;
            $products->desc =$request->desc;
            $products->save();
            return redirect("products");
        }
    // delete product
        function delete($id)
        {

            $products = product::findorfail($id);
            $products->delete();
            return redirect("/products");
        }
        // create product
        function create()
        {
            return view('create');
        }
        function store(Request $request)
        {
            $validator= Validator::make($request->all(), [
                'name' => 'required|max:100|min:5',
                'desc' => 'required',
                // 'img' => "image|mimes:png,jpg,gif,svg|max:2024"
            ]);
            if ($validator ->fails())
            {
                return redirect('/product/create')->withErrors($validator)->withInput();
            }
            $products = new product();
            $products->name= $request->name;
            $products->desc= $request->desc;
            $products->save();
            return redirect('/products');
        }
}
