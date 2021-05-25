<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Catalog;
use Auth;

class SellerController extends Controller
{
    public function index() {
        $products = Product::where('user_id',Auth::id())->orderBy('id','DESC')->limit('8')->get();
        $catalogs = Catalog::where('user_id',Auth::id())->orderBy('id','DESC')->limit('8')->get();
        return view('seller.index', compact('products','catalogs'));
    }

    public function buyerRequests(){
        return view('seller.buyer-requests');
    }

    public function pendingOrders(){
        return view('seller.orders.pending');
    }

    public function history(){
        return view('seller.history');
    }
}
