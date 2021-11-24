<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use App\Models\User;

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
           // create product
        function create()
        {
            return view('create');
        }
        function store(Request $request)
        {
            $imageName="";
            $validator= Validator::make($request->all(), [
                'name' => 'required|max:100|min:5',
                'desc' => 'required',
                'img' => "image|mimes:png,jpg,gif,svg"
            ]);
            if ($validator ->fails())
            {
                return redirect('/productt/create')->withErrors($validator)->withInput();
            }
            if($request->hasFile("img"))
            {
              $image = $request->file("img");
              $name = time().'.'.$image->getClientOriginalExtension();
              $destination = public_path('/images');
              $image->move($destination , $name);

              $imageName= 'images/'.$name;

            }
            $products = new product();
            $products->name= $request->name;
            $products->desc= $request->desc;
            $products->img = $imageName;
            $products->save();
            return redirect('/products');
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
            $products =new product();
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

        public function autocompleteSearch(Request $request)
        {
              $query = $request->get('query');
              $filterResult = User::where('name', 'LIKE', '%'. $query. '%')->get();
              return response()->json($filterResult);
        }



}
