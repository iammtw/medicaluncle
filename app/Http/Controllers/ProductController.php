<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function products() {
        return view('seller.products.index');
    }

    public function add() {
        return view('seller.products.add');
    }
}
