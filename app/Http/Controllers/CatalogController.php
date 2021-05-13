<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalogs() {
        return view('seller.catalogs.index');
    }

    public function add() {
        return view('seller.catalogs.add');
    }
}
