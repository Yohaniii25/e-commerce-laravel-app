<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use App\Models\Cart;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();

        return view('product', ['products' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $request){
        $data = Product::
        where('name','like', '%'.$request->input('query').'%')
        ->get();
        return view('search', ['products' => $data]);
    }
    function addToCart(Request $request){

        if($request->session()->has('user')){
            //when click add to cart button it redirects to cart page
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
        }
        else{
            return redirect('/login');
        }      
    }
}
