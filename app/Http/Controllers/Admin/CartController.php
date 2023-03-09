<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use Illuminate\Queue\Console\RetryCommand;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {

        $temp_id = session()->get('temp_id');
        $allcartorders = Cart::with('product')
            ->where(function ($query) {
                $query->where('status', 'pending')
                    ->where('user_id', Auth::id())
                    ->orWhere(function ($query) {
                        $query->where('status', 'pending')
                            ->where('temp_id', session()->get('temp_id'));
                    });
            })
            ->get();
        return view('frontend.all-page.cart.index', compact('allcartorders'));
    }
    public function destroycheckout(Request $request)
    {

        $cart = Cart::find($request->destroy_id);
        $cart->delete();
        if (Auth::check()) {
            $total = Cart::where('user_id', Auth::user()->id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->sum('total_price');
            $count = Cart::where('user_id', Auth::user()->id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->count();
            return response()->json(['success' => 'Product Deleted From Cart Successfully.', 'total' => $total, 'count' => $count, 'status' => 'success']);
        } else {
            $temp_id = session()->get('temp_id');
            $total = Cart::where('temp_id', $temp_id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->sum('total_price');
            $count = Cart::where('temp_id', $temp_id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->count();
            return response()->json(['success' => 'Product Deleted From Cart Successfully.', 'total' => $total, 'count' => $count, 'status' => 'success']);
        }
    }

    public function paymenttype(Request $request)
    {
        $order = new Order();
        $order->cart_id = json_encode($request->cart_id);
        $order->payment_type = 'Cash On delivory';
        $order->payment_status = 'Pending';
        $order->status = 'Pending';
        $order->total_price = '0';
        $order->luxaurosub_total = $request->luxaurosubtotal;
        $order->shipping_charge = $request->shiping;
        $order->discount = $request->discount;
        $order->over_all_total = $request->overalltotal;
        $order->user_id = Auth::user()->id;
        $order->save();
        if ($order->save()) {
            foreach ($request->cart_id as $cart_id) {
                $cart = Cart::find($cart_id);
                $cart->status = 'Order Placed';
                $cart->save();
            }
            session()->forget('temp_id');
        }

        return redirect()->route('home')->with(['success' => 'Order Placed Successfully.']);
    }
}
