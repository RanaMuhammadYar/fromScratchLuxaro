<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        $orders = Order::with('cart', 'user')->get();
        return view('frontend.admin.order.index', compact('orders'));
    }

    public function invoice($id)
    {
        $order = Order::with('cart', 'user')->where('id', $id)->first();
        return view('frontend.admin.order.invoice', compact('order'));
    }

    public function myorder()
    {
        $orders = Order::with('cart','user')->get();
        return view('frontend.admin.myorder.index', compact('orders'));
    }

    public function myorderinvoice($id)
    {
        $order = Order::with('cart', 'user')->where('id', $id)->first();
        return view('frontend.admin.myorder.invoice', compact('order'));
    }

}
