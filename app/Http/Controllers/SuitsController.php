<?php

namespace App\Http\Controllers;

use App\Models\MerchantApplication;
use Illuminate\Http\Request;

class SuitsController extends Controller
{
    public function index()
    {
        $suits = MerchantApplication::all();
        return view('frontend.all-page.suits.index',compact('suits'));
    }
}
