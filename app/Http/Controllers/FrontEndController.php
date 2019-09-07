<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view('index',[
            'products'  => $products
        ]);
    }

    public function singleproduct($id){
        $product = Product::find($id);
        return view('single',[
            'product'  => $product
        ]);
    }
}
