<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\orders;
use App\Models\ProductDetail;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function MyCart($product_id){
        $order=orders::where('product_id',$product_id)->get();
        $product=ProductDetail::where('product_id',$product_id)->get();
        $color=Color::where('product_id',$product_id)->get();
        $size=Size::where('product_id',$product_id)->get();
        return view('users.cart.order',compact('order','product','color','size'));
    }
}
