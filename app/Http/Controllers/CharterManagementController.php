<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\Charter;
use Illuminate\Http\Request;
use App\Models\CharterBooking;
use App\Models\Admin\DeliveryOption;
use Illuminate\Support\Facades\Validator;

class CharterManagementController extends Controller
{
    public function charters()
    {
        return view('frontend.charters');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $charters = Charter::query()
            ->when($search, function ($query, $search) {
                return $query->where('charter_name', 'like', '%' . $search . '%');
            })
            ->paginate(5);
        return view('frontend.charters.all', compact('charters'));
    }
    public function charter_detail(Request $request)
    {
        $charter_detail = Charter::where('id', $request->id)->first();
        $charters = Charter::where('id', '!=', $request->id)->get();
        return view('frontend.charters.detail', compact('charter_detail', 'charters'));
    }
    public function charter_management(Request $request)
    {
        $charters = Charter::all();
        $delivery_options = DeliveryOption::all();
        return view('frontend.charters.charter_management', compact('charters', 'delivery_options'));
    }
    public function appendCharters(Request $request)
    {
        $charters = Charter::orderBy('rate', $request->charter)->get();
        $html = view('frontend.all-page.append_charters', ['charters' => $charters])->render();
        return $html;
    }


    public function charter_book(Request $request)
    {
        CharterBooking::create([
            "book_from" => $request->book_from,
            "book_to" => $request->book_to,
            "time_from" => $request->time_from,
            "time_to" => $request->time_to,
            "number_of_guest" => $request->number_of_guest,
            "created_at" =>  \Carbon\Carbon::now()->timestamp,
            "created_at" =>  \Carbon\Carbon::now()->timestamp,
        ]);
        return back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'charter_name' => 'required',
            'charter_type' => 'required',
            'rate' => 'required|numeric',
            'hr_select' => 'required',
            'description' => 'required',
            'date_of_avalability' => 'required',
            'start_time' => 'required',
            'tags' => 'required',
            'max_guests' => 'required',
            'delivery_id' => 'required',
            'thumbnail_img' => 'required',
            'charter_agreement' => 'required',
            'thumbnail_img' => 'required',
            'terms_condition' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput()->with('error', 'Charter Added Failed');
        } else {
            $charter = new Charter;
            $charter->charter_name = $request->charter_name;
            $charter->charter_type = $request->charter_type;
            $charter->rate = $request->rate;
            $charter->hr_select = $request->hr_select;
            $charter->description = $request->description;
            $charter->date_of_avalability = json_encode($request->date_of_avalability);
            $charter->start_time = json_encode($request->start_time);
            $charter->max_guests = $request->max_guests;
            $charter->delivery_id = $request->delivery_id;
            $charter->terms_condition = $request->terms_condition;

            if ($request->hasFile('thumbnail_img')) {
                $path = asset('storage/' . $request->file('thumbnail_img')->store('public/charter'));
                $charter->thumbnail_img = $path;
            }
            if ($request->hasFile('charter_agreement')) {
                $path = asset('storage/' . $request->file('charter_agreement')->store('public/charter'));
                $charter->charter_agreement = $path;
            }
            $charter->save();
            $charter->tags()->attach($request->tags);
            return redirect()->back()->with('success', 'Charter Added Successfully');
        }
    }
}
