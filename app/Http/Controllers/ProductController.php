<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
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
        $products = Product::where('user_id',Auth::id())->get();
        return view('seller.products.index', compact('products'));
    }

    public function add() {
        $categories = Category::where('user_id',Auth::id())->get();
        return view('seller.products.add',compact('categories'));
    }

    public function insert(Request $req) {

        $req->validate([
            'image' => 'required|mimes:jpg,jpeg,png,pdf|max:4096',
            'image' => 'required|max:4096',
            'image.*' => 'image|mimes:png,jpeg,jpg',
            'image' => 'max:4096',
            'image.*' => 'image|mimes:png,jpeg,jpg',
        ]);

        $filename = $req->file('image')->getClientOriginalName();
        $genID = substr(sha1(time()), 0, 9);
        $finalName = $genID . "_" . $filename;

        $product = new Product;
        $product->user_id = Auth::id();
        $product->name = $req->name;
        $product->category_id = $req->category_id;
        $product->price = $req->price;
        $product->sku = $req->sku;
        $product->image = $finalName;
        $product->description = $req->description;
        $product->excerpt = $req->excerpt;
        $product->save();
        $req->file('image')->storeAs('public', $finalName);
        return redirect()->back()->with('msg','Successfully Added!');
    }
}
