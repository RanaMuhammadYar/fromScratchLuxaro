<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function vendorDashboard()
    {
        return view('frontend.vendor.dashboard.index');
    }
}
