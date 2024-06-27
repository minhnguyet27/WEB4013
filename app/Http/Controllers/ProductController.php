<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showProduct(){
        return view('list-product');
        // $product= [
        //     'name' => 'Iphone 12',
        //     'price' => 1000,
        //     'description' => 'Iphone 12 is the best phone in the world'
        // ];
        // return view('list-product')->with([
        //     'product' => $product
        // ]);
    }
    public function getProduct($id){
      echo $id;  
    }
    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;

        
    }
}