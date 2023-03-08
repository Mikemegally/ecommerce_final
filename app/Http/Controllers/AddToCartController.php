<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\support\facades\session;

session_start();

class AddToCartController extends Controller
{


    public function addToCart(int $id)
    {
        $product = Product::find($id)->toArray();
        if (!isset($_SESSION['cart'])){
            $_SESSION['cart'] =[];
        }
        $cart = $_SESSION['cart'];
        $cart[] = $product;
        $_SESSION['cart'] = $cart;
        return redirect()->route('userproduct.index');
    }

    public function cart()
    {
        $products = $_SESSION['cart']??[];
        return view('cart',compact('products'));
    }
    public function removeFromCart(int $id)
    {
        if (!isset($_SESSION['cart'])){
            $_SESSION['cart'] =[];
        }
        $cart = $_SESSION['cart'];
        $newCart = array_filter($cart,fn($item)=>$item['id']!=$id);
        $_SESSION['cart'] = $newCart;
        return redirect()->back();
    }
}
