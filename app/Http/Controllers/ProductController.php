<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;

class ProductController extends Controller
{
    public function addCategory() {
        $categories = Category::where('user_id',Auth::id())->get();
        return view('seller.products.category.add', compact('categories'));
    }

    public function insertCategory(Request $req) {
        $category = new Category;
        $category->name = $req->name;
        $category->user_id = Auth::id();
        $category->save();
        return redirect()->back()->with('msg','Successfully Added!');
    }

    public function deleteCategory($id){
        Category::find($id)->delete();
        return redirect()->back()->with('msg','Successfully Deleted!');
    }

    public function products() {
        return view('seller.products.index');
    }

    public function add() {
        return view('seller.products.add');
    }
}
