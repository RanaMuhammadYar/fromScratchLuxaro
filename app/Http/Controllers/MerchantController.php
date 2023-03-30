<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\DeliveryOption;
use App\Models\MerchantDetail;
use App\Models\State;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class MerchantController extends Controller
{
    public function merchantAccountFirstStep()
    {
        $countries = Country::all();
        $states = State::all();
        $cities = City::all();
        $merchant_detail = MerchantDetail::where('user_id', auth()->user()->id)->first();
        return view('frontend.all-page.merchant_account_first_step', compact('merchant_detail', 'states', 'cities', 'countries'));
    }
    public function merchantAccountSecondStep(Request $request)
    {
        //    dd($request->all());
        // dd($request->except('_token','store_header', 'business_logo'));
        if (MerchantDetail::where('user_id', auth()->user()->id)->exists()) {
             MerchantDetail::where('user_id', auth()->user()->id)->update($request->except('_token'));
            $merchant = MerchantDetail::where('user_id', auth()->user()->id)->first();
            if ($request->store_header != null) {
                $arr = explode('.', $request->store_header);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $request->store_header, 'user_id' => $merchant->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);
                $merchant->store_header_logo = $upload->id;
                $merchant->save();
            }
            if ($request->business_logo != null) {
                $arr = explode('.', $request->business_logo);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $request->business_logo, 'user_id' => $merchant->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);
                $merchant->upload_business_logo = $upload->id;
                $merchant->save();
            }
        } else {
            $merchant = MerchantDetail::create($request->all());
            if ($request->store_header != null) {
                $arr = explode('.', $request->store_header);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $request->store_header, 'user_id' => $merchant->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);
                $merchant->store_header_logo = $upload->id;
                $merchant->save();
            }
            if ($request->business_logo != null) {
                $arr = explode('.', $request->business_logo);
                $upload = Upload::create([
                    'file_original_name' => null, 'file_name' => $request->business_logo, 'user_id' => $merchant->id, 'extension' => $arr[1],
                    'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
                ]);
                $merchant->upload_business_logo = $upload->id;
                $merchant->save();
            }
        }
        $request->session()->put('merchant', $merchant);
        $delivery_options = DeliveryOption::all();
        $merchant_detail = MerchantDetail::where('user_id', auth()->user()->id)->first();
        return view('frontend.all-page.merchant_account_second_step', compact('merchant_detail', 'delivery_options'));
    }
    public function saveMerchantAccount(Request $request)
    {
        $merchant = $request->session()->get('merchant');
        if ($request->owner_upload_image != null) {
            $arr = explode('.', $request->owner_upload_image);
            $upload = Upload::create([
                'file_original_name' => null, 'file_name' => $request->owner_upload_image, 'user_id' => $merchant->id, 'extension' => $arr[1],
                'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
            ]);
            $merchant->owner_upload_image = $upload->id;
            $merchant->save();
        }
        if ($request->team_upload_image != null) {
            $arr = explode('.', $request->team_upload_image);
            $upload = Upload::create([
                'file_original_name' => null, 'file_name' => $request->team_upload_image, 'user_id' => $merchant->id, 'extension' => $arr[1],
                'type' => isset($type[$arr[1]]) ?  $type[$arr[1]] : "others", 'file_size' => 0
            ]);
            $merchant->update(['team_upload_image' => $upload->id]);
        }

        $merchant->update([
            "business_detail" => $request->business_detail,
            "business_type_id" => "2",
            "delivery_id" => implode(',', $request->delivery_id),
            "social_media_link" => $request->social_media_link,
            "owner_name" => $request->owner_name,
            "introduce_owner" => $request->introduce_owner,
            "team_owner_name" => $request->team_owner_name,
            "history" => $request->history,
            "ethic" => $request->ethic,
            "philosophy" => $request->philosophy,
        ]);
        Session::flash('message', 'Record Added Successfully!');
        return redirect()->route('merchant_account_first_step');
    }
}
