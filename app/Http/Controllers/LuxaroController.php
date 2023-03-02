<?php

namespace App\Http\Controllers;

use App\Models\DeliveryOption;
use App\Models\Merchant;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\CharterCategory;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Upload;
use App\Models\User;

class LuxaroController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('frontend.all-page.products', compact('products'));
    }
    public function productDetail(Request $request)
    {
        $product_detail  = Product::where('id', $request->id)->first();
        return view('frontend.product_detail', compact('product_detail'));
    }
    public function save_profile_detail(Request $request)
    {  
        dd($request->all());
        $userId = isset($request->user_id) ? $request->user_id : auth()->user()->id;
        $user = User::where('id',$userId)->update([
            "name" => $request->name,
            "phone" => $request->phone,
            "about_me" => $request->about_me,
            "address" => $request->address,
            "city" => $request->city_id,
            "date_of_birth" => $request->date_of_birth,
            "state" => $request->state_id,
            "country" => $request->country_id,
            "language" => $request->language,
            "book_from" => $request->book_from,
            "book_to" => $request->book_to,
            "description" => $request->description,
            "college_name" => $request->college_name,
            "degree" => $request->degree,
            "course_name" => $request->course_name,
            "portfolio_name" => $request->portfolio_name,
            "portfolio_link" => $request->portfolio_link,
            "user_profile_image" => ($request->user_profile_image) ?  asset('storage/'.$request->user_profile_image->store('public/user_profile_image')) : '',
            "course_certification_document" => ($request->course_certification_document) ?  asset('storage/'.$request->course_certification_document->store('public/course_certification_document')) : '',
         ]);
         $user =   User::where('id',$userId)->first();
   
         return back()->with(['user' =>  $user]);
    }
    public function myProfile()
    {
        $user = User::with('images')->where('id',auth()->user()->id)->first();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        return view('frontend.all-page.my_profile',compact('user','states','cities','countries'));
    }
  
    
    public function merchantSuitManagement()
    {
        return view('frontend.suite_management');
    }

    public function merchantPaymentManagement()
    {
        return view('frontend.payment_management');
    }
    public function merchantSuits()
    {
        return view('frontend.merchant_suits');
    }
    public function charterDetail()
    {
        return view('frontend.charter_detail');
    }
    public function createAccount()
    {
        return view('frontend.create_account');
    }
    public function chats()
    {
        return view('frontend.chats');
    }
    public function goldEvine()
    {
        return view('frontend.goldevine_projects');
    }
  
  

    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function faqs()
    {
        return view('frontend.faqs');
    }
    public function contactUs()
    {
        return view('frontend.contact_us');
    }
    public function aboutUs()
    {
        return view('frontend.about_us');
    }

    public function login()
    {
        return view('frontend.login');
    }
}
