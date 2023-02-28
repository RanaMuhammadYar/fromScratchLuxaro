<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CharterCategory as ControllersCharterCategory;
use App\Models\Charter;
use App\Models\CharterBooking;
use App\Models\CharterCategory;
use App\Models\DeliveryOption;
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
        public function index()
        {
            $charters = Charter::paginate(2);
            return view('frontend.charters.all',compact('charters'));
        }
        public function charter_detail(Request $request)
        {
            $charter_detail = Charter::where('id',$request->id)->first();
            $charters = Charter::where('id','!=',$request->id)->get();
            return view('frontend.charters.detail',compact('charter_detail','charters'));
        }
    
        public function productCharterManagement()
        {
             $charter_categories = CharterCategory::all();
             $delivery_options = DeliveryOption::all();
             return view('frontend.charters.product_charter_management',compact('charter_categories','delivery_options'));
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
            // dd($request->all());
            $charter                       = new Charter;
            $charter->name                 = $request->charter_name;
            $charter->description          = $request->description;
            $charter->type                 = $request->charter_type;
            $charter->max_guests           = $request->max_guests;
            $charter->start_time           = $request->start_time;
            $charter->end_time             = $request->end_time;
            $charter->rate                 = $request->rate;
            $charter->tags = implode(',', $request->tags);
            $charter->delivery_id = implode(',', $request->delivery_id);
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
          
                    // $path = $request->file('charter_agreement')->store('charters', 'local');
                    // $size = $request->file('charter_agreement')->getSize();
    
                    // // Return MIME type ala mimetype extension
                    // $finfo = finfo_open(FILEINFO_MIME_TYPE); 
    
                    // // Get the MIME type of the file
                    // $file_mime = finfo_file($finfo, base_path('public/').$path);
    
                    // if($type[$extension] == 'image' && get_setting('disable_image_optimization') != 1){
                    //     try {
                    //         $img = Image::make($request->file('charter_agreement')->getRealPath())->encode();
                    //         $height = $img->height();
                    //         $width = $img->width();
                    //         if($width > $height && $width > 1500){
                    //             $img->resize(1500, null, function ($constraint) {
                    //                 $constraint->aspectRatio();
                    //             });
                    //         }elseif ($height > 1500) {
                    //             $img->resize(null, 800, function ($constraint) {
                    //                 $constraint->aspectRatio();
                    //             });
                    //         }
                    //         $img->save(base_path('public/').$path);
                    //         clearstatcache();
                    //         $size = $img->filesize();
    
                    //     } catch (\Exception $e) {
                    //         //dd($e);
                    //     }
                    // }
                    
                    if (env('FILESYSTEM_DRIVER') == 's3') {
                        Storage::disk('s3')->put(
                            $path,
                            file_get_contents(base_path('public/').$path),
                            [
                                'visibility' => 'public',
                                'ContentType' =>  $extension == 'svg' ? 'image/svg+xml' : $file_mime
                            ]
                        );
                        if($arr[0] != 'updates') {
                            unlink(base_path('public/').$path);
                        }
                    }
    
                    $upload->extension = $extension;
                    $upload->file_name = $path;
                    $upload->user_id = 12;
                    $upload->type = $type[$upload->extension];
                    $upload->file_size = '4';
                    $upload->save();
                    $charter->charter_agreement_img = $upload->id;
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
                    // $size = $request->file('thumbnail_img')->getSize();
    
                    // // Return MIME type ala mimetype extension
                    // $finfo = finfo_open(FILEINFO_MIME_TYPE); 
    
                    // // Get the MIME type of the file
                    // $file_mime = finfo_file($finfo, base_path('public/').$path);
    
                    // if($type[$extension] == 'image' && get_setting('disable_image_optimization') != 1){
                    //     try {
                    //         $img = Image::make($request->file('thumbnail_img')->getRealPath())->encode();
                    //         $height = $img->height();
                    //         $width = $img->width();
                    //         if($width > $height && $width > 1500){
                    //             $img->resize(1500, null, function ($constraint) {
                    //                 $constraint->aspectRatio();
                    //             });
                    //         }elseif ($height > 1500) {
                    //             $img->resize(null, 800, function ($constraint) {
                    //                 $constraint->aspectRatio();
                    //             });
                    //         }
                    //         $img->save(base_path('public/').$path);
                    //         clearstatcache();
                    //         $size = $img->filesize();
    
                    //     } catch (\Exception $e) {
                    //         //dd($e);
                    //     }
                    // }
                    
                    if (env('FILESYSTEM_DRIVER') == 's3') {
                        Storage::disk('s3')->put(
                            $path,
                            file_get_contents(base_path('public/').$path),
                            [
                                'visibility' => 'public',
                                'ContentType' =>  $extension == 'svg' ? 'image/svg+xml' : $file_mime
                            ]
                        );
                        if($arr[0] != 'updates') {
                            unlink(base_path('public/').$path);
                        }
                    }
    
                    $upload->extension = $extension;
                    $upload->file_name = $path;
                    $upload->user_id = 12;
                    $upload->type = $type[$upload->extension];
                    $upload->file_size = "3MB";
                    $upload->save();
                    $charter->thumbnail_img = $upload->id;
                    $charter->save();
                }
                // return '{}';
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
