<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Catalog;
use Auth;
use Hash;

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

    public function profile(){
        $seller = User::find(Auth::id());
        return view('seller.profile',compact('seller'));
    }

    public function insertProfile(Request $req){
      
        $seller = User::find(Auth::id());
        $password = $req->password;
        $cpassword = $req->cpassword;
        if($password != null){
            if($password == $cpassword){
                $seller->password = Hash::make($password);
            } else {
                return redirect()->back()->with('msg',"Password doesn't matched");
            }
        }
        $seller->name = $req->name;
        $seller->email = $req->email;
        $seller->phonenumber = $req->phonenumber;
        $seller->gender = $req->gender;
        $seller->save();
        return redirect()->back()->with('msg','Successfully Updated');
    }
}
