<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myProfile()
    {
        $user = User::where('id',auth()->user()->id)->first();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('frontend.my_profile',compact('user','states','cities','countries'));
    }
}
