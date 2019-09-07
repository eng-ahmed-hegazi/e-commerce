<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
class ShoppingController extends Controller
{
    public function add(){

        $product = Product::find(request('product_id'));
        $qty = request('qty');
        $cartItem = Cart::add([
            'id'        => $product->id,
            'name'      => $product->name,
            'price'     => $product->price,
            'qty'       => $qty
        ]);

        # associate the cart to a particular model Product
        # the you can get the image,description using $cart->model->image in blade file

        Cart::associate($cartItem->rowId,'App\Product');
        return redirect()->route('cart.index');
    }

    public function show(){
        return view('cart');
    }

    public function rapid($id){
        $product = Product::find($id);

        $cartItem = Cart::add([
            'id'        => $product->id,
            'name'      => $product->name,
            'price'     => $product->price,
            'qty'       => 1
        ]);

        # associate the cart to a particular model Product
        # the you can get the image,description using $cart->model->image in blade file

        Cart::associate($cartItem->rowId,'App\Product');
        return redirect()->route('cart.index');
    }

    public function delete($id){
        Cart::remove($id);
        return redirect()->back();
    }

    public function minus($id,$qty){
        Cart::update($id,$qty - 1);
        return redirect()->back();
    }

    public function plus($id,$qty){
        Cart::update($id,$qty + 1);
        return redirect()->back();
    }



}
