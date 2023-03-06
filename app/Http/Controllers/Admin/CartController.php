<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    // public function __construct()
    // {
    //      $this->middleware(['auth']);
    // }

    public function index()
    {

        $temp_id = session()->get('temp_id');
        // return dd($temp_id);
        $allcartorder = Cart::where('user_id',Auth::user()->id)->where('status','Pending')->orwhere('temp_id', $temp_id)->get();
        return view('frontend.all-page.cart.index');
    }
}
