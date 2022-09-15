<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class BasicController extends Controller
{
    public function save(Request $request)
    {
         
        $validatedData = $request->validate([
            'name' =>'required',
            'price'=>'required',
            'quantity'=>'required',
            'category'=>'required',
            'sku'=>'required',
            // 'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        // $imgname = $request->file('image')->getClientOriginalName();
 
        // $path = $request->file('image')->store('public/images');

 
 
        $product = new Product;
 
        // $product->imgname = $imgname;
        // $product->path = $path;
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->category = $request['category'];
        $product->sku= $request['sku'];
 
        $product->save();
 
        return redirect('/add')->with('status', 'Product Has been uploaded');
 
    }

    // function delete($id){

    //     return view('addproduct');
    // }
    function delete($id){
        $product=Product::find($id);
        if(is_null($product)){
                 return view('home');
        }
        else{
                $product->delete();
                return view('home');
        }
    }


    public function edit($id){
        $product=Product::find($id);
        $data=compact('product','id');
        if(is_null($product)){
            return redirect('home');
        }
        else{
            return view('update')->with($data);
        }
    }

    public function update($id, request $request){
        $product=Product::find($id);

        if(is_null($product)){
            return redirect('home');
        }
        else{
            $product->name = $request['name'];
            $product->price = $request['price'];
            $product->quantity = $request['quantity'];
            $product->category = $request['category'];
            $product->sku= $request['sku'];
            $product->save();

            return redirect('home');
        }
        
    }


}
