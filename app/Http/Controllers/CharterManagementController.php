<?php

namespace App\Http\Controllers;

use App\Models\Admin\DeliveryOption;
use App\Models\Charter;
use App\Models\CharterBooking;
use App\Models\Upload;
use Illuminate\Http\Request;

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
            return view('frontend.charters.all',compact('charters'));
        }
        public function charter_detail(Request $request)
        {
            $charter_detail = Charter::where('id',$request->id)->first();
            $charters = Charter::where('id','!=',$request->id)->get();
            return view('frontend.charters.detail',compact('charter_detail','charters'));
        }
        public function charter_management(Request $request)
        {
            $charters = Charter::all();
            $charter_categories = CharterCategory::all();
            $delivery_options = DeliveryOption::all();
            return view('frontend.charters.charter_management',compact('charters','delivery_options'));
        }
        public function appendCharters(Request $request)
        {
            // $cat_id = substr($request->price_filter, -1);
            // $orderby = substr($request->price_filter, 0, -1);
            $charters = Charter::orderBy('rate',$request->charter)->get();
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
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $charter                       = new Charter;
            $charter->charter_name                 = $request->charter_name;
            $charter->description          = $request->description;
            $charter->charter_type                 = $request->charter_type;
            $charter->max_guests           = $request->max_guests;
            $charter->start_time           = $request->start_time;
            $charter->end_time             = $request->end_time;
            $charter->rate                 = $request->rate;
            $charter->tags = isset($request->delivery_id) ? implode(',', $request->tags) : '';
            $charter->delivery_id = isset($request->delivery_id) ?  implode(',', $request->delivery_id) : '';
            $type = array(
                "jpg"=>"image",
                "jpeg"=>"image",
                "png"=>"image",
                "svg"=>"image",
                "webp"=>"image",
                "gif"=>"image",
                "mp4"=>"video",
                "mpg"=>"video",
                "mpeg"=>"video",
                "webm"=>"video",
                "ogg"=>"video",
                "avi"=>"video",
                "mov"=>"video",
                "flv"=>"video",
                "swf"=>"video",
                "mkv"=>"video",
                "wmv"=>"video",
                "wma"=>"audio",
                "aac"=>"audio",
                "wav"=>"audio",
                "mp3"=>"audio",
                "zip"=>"archive",
                "rar"=>"archive",
                "7z"=>"archive",
                "doc"=>"document",
                "txt"=>"document",
                "docx"=>"document",
                "pdf"=>"document",
                "csv"=>"document",
                "xml"=>"document",
                "ods"=>"document",
                "xlr"=>"document",
                "xls"=>"document",
                "xlsx"=>"document"
            );
            
            if($request->hasFile('charter_agreement')){
                $upload = new Upload;
                $extension = strtolower($request->file('charter_agreement')->getClientOriginalExtension());
    
                if(isset($type[$extension])){
                    $upload->file_original_name = null;
                    $arr = explode('.', $request->file('charter_agreement')->getClientOriginalName());
                    for($i=0; $i < count($arr)-1; $i++){
                        if($i == 0){
                            $upload->file_original_name .= $arr[$i];
                        }
                        else
                        {
                            $upload->file_original_name .= ".".$arr[$i];
                        }
                    }
                    $myimage = $request->charter_agreement->getClientOriginalName();
                    $request->charter_agreement->move(public_path('charters/'), $myimage);
                    $path = 'charters/'.$myimage;
                    $upload->extension = $extension;
                    $upload->file_name = $path;
                    $upload->user_id = 12;
                    $upload->type = $type[$upload->extension];
                    $upload->file_size = 3;
                    $upload->save();
                    $charter->charter_agreement = $upload->id;
                    $charter->save();
                }
                // return '{}';
            }
            if($request->hasFile('thumbnail_img')){
                $upload = new Upload;
                $extension = strtolower($request->file('thumbnail_img')->getClientOriginalExtension());
    
                if(isset($type[$extension])){
                    $upload->file_original_name = null;
                    $arr = explode('.', $request->file('thumbnail_img')->getClientOriginalName());
                    for($i=0; $i < count($arr)-1; $i++){
                        if($i == 0){
                            $upload->file_original_name .= $arr[$i];
                        }
                        else{
                            $upload->file_original_name .= ".".$arr[$i];
                        }
                    }

                    // $path = $request->file('thumbnail_img')->store('charters/', 'local');
                    $myimage = $request->thumbnail_img->getClientOriginalName();
                    $request->thumbnail_img->move(public_path('charters/'), $myimage);
                    $path = 'charters/'.$myimage;
                    $upload->extension = $extension;
                    $upload->file_name = $path;
                    $upload->user_id = 12;
                    $upload->type = $type[$upload->extension];
                    $upload->file_size = 3;
                    $upload->save();
                    $charter->thumbnail_img = $upload->id;
                    $charter->save();
                }
            }
         
            $charter->save();
         return redirect('/all_charters');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
}
