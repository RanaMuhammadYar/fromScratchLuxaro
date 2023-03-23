<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\Goldevine\Project;
use App\Models\Admin\Product as AdminProduct;
use App\Models\Charter;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $categories = Category::where('title', 'LIKE', '%'.$search.'%')->get();
        if(count($categories) <= 0)
        {
            $categories = Category::
            when($search, function ($query, $search) {
              $query->whereHas('relatedProducts',function ($query) use ($search){
                  $query->where('product_name', 'LIKE', '%'.$search.'%');
              });
          })
          ->with(['relatedProducts' => function($query) use ($search){
              $query->where('product_name', 'like', '%'.$search.'%');
          }])
          ->get();
        }
        $locallaxaro = AdminProduct::with('category', 'productType', 'delivoryOption', 'shippingType', 'user')->where('status','Active')->orderby('id','desc')->limit(15)->get();
        $goldevines = Project::with('projectBenefits')->where('status','Active')->orderBy('id','desc')->limit(15)->get();
        $luxauro_charters = Charter::orderBy('id','desc')->limit(15)->get();
        return view('frontend.all-page.products', compact('categories','goldevines','locallaxaro','luxauro_charters'));
    }
    public function appendProducts(Request $request)
    {
        $cat_id = substr($request->price_filter, -1);
        $orderby = substr($request->price_filter, 0, -1);
        $products = AdminProduct::where('category_id',$cat_id)
                                  ->orderBy('product_price',$orderby)
                                  ->limit(6)
                                  ->get();
        $html = view('frontend.all-page.append_products', ['products' => $products])->render();
        return $html;
    }
    public function appendLocalLuxauro(Request $request)
    {
        $orderby = substr($request->products, 0, -1);
        $products = AdminProduct::orderBy('product_price',$orderby)->limit(6)->get();
        $html = view('frontend.all-page.append_products', ['products' => $products])->render();
        return $html;
    }
    public function appendCategories(Request $request)
    {
            $categories = Category::orderBy('title',$request->category_filter)->get();
            $html = view('frontend.all-page.append_category', ['categories' => $categories])->render();
            return $html;
    }
    public function productDetail(Request $request)
    {
        $product_detail  = AdminProduct::where('id', $request->id)->first();
        return view('frontend.product_detail', compact('product_detail'));
    }
    public function save_profile_detail(Request $request)
    {
        $userId = isset($request->user_id) ? $request->user_id : auth()->user()->id;
        $user = User::where('id', auth()->user()->id)->first();
         User::where('id',$userId)->update([
            "email" => $request->email,
            "zip_code" => $request->zip_code,
          ]);
        if(isset($request->user_profile_image))
        {
           $user_profile_image =  asset('storage/'.$request->user_profile_image->store('public/user_profile_image'));
        }
        else
        {
            $user_profile_image =  $user->userDetails()->first()->user_profile_image;
        }
        if(isset($request->course_certification_document))
        {
           $course_certification_document =  asset('storage/'.$request->course_certification_document->store('public/course_certification_document'));
        }
        else
        {
            $course_certification_document =  $user->userDetails()->first()->course_certification_document;
        }
        $user->userDetails()->updateOrCreate([
            "name" => $request->name,
            "about_me" => $request->about_me,
            "phone" => $request->phone,
            "address" => $request->address,
            "city_id" => $request->city_id,
            "date_of_birth" => $request->date_of_birth,
            "state_id" => $request->state_id,
            "country_id" => $request->country_id,
            "language" => $request->language,
            "description" => $request->description,
            "portfolio_name" => $request->portfolio_name,
            "portfolio_link" => $request->portfolio_link,
            "user_profile_image" => $user_profile_image,
        ]);
        $user->userEducations()->updateOrCreate([
            "college_name" => $request->college_name,
            "degree" => $request->degree,
        ]);
        $user->userProfessions()->updateOrCreate([
            "business_name" => $request->business_name,
            "business_from" => $request->business_from,
            "business_to" => $request->business_to,
            "business_description" => $request->business_description,
        ]);
        $user->userCertificates()->updateOrCreate([
            "course_name" => $request->course_name,
            "course_certification_document" => $course_certification_document,
        ]);

        $user =   User::with(['userDetails' => function($query){
                 return  $query->first();
        }, 'userEducations', 'userCertificates', 'userProfessions'])
            ->where('id', $userId)->first();
        Session::flash('message', 'Profile  Updated Successfully!'); 

        return back()->with(['user' =>  $user]);
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

        $allprojects = Project::where('status', 'Active')->get();
        $newprojects = Project::where('status', 'Active')->orderBy('id', 'desc')->limit(15)->get();
        $trandingProjects = Project::where('status', 'Active')->orderBy('id', 'asc')->get();
        $nearlythereProjects = Project::where('status', 'Active')->inRandomOrder()->limit(15)->get();
        $featuredProjects = Project::where('status', 'Active')->where('project_category','Featured')->limit(15)->get();
        // return dd($trandingProjects);
        return view('frontend.goldevine.index',compact('allprojects','newprojects','trandingProjects','nearlythereProjects','featuredProjects'));
    }
    public function myProfile()
    {
        $user =   User::with('userDetails','userEducations', 'userCertificates', 'userProfessions')
       ->where('id', auth()->user()->id)->first();
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $userDetail = $user->userDetails()->latest()->first();
        $userEducations = $user->userEducations()->latest()->first();
        $userCertificates = $user->userCertificates()->latest()->first();
        $userProfessions = $user->userProfessions()->latest()->first();
        return view('frontend.all-page.my_profile',compact('user','states','cities','countries',
         'userDetail','userEducations','userCertificates','userProfessions'));
    }


    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)->get(["name", "id"]);
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
