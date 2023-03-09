<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Cart;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;


class ProductMangeCotroller extends Controller
{
    public function suspended(Request $request)
    {
        $suspended = Product::find($request->suspended_id);
        $suspended->status = 'Active';
        $suspended->save();
        return response()->json(['success' => 'Product Suspended Successfully.']);
    }

    public function active(Request $request)
    {
        $active = Product::find($request->active_id);
        $active->status = 'Suspended';
        $active->save();
        return response()->json(['success' => 'Product Active Successfully.']);
    }

    public function productcategory(Request $request, $id, $slug)
    {
        $products = Product::with('category', 'productType', 'delivoryOption', 'shippingType', 'user')->where('status', 'Active')->where('category_id', $id)->paginate(15);

        if (Cache::has('related_products_' . $id)) {
            $relatedProducts = Cache::get('related_products_' . $id);
        } else {
            $product = Category::find($id);
            $relatedProducts = $product->relatedProducts()->get();
            Cache::put('related_products_' . $id, $relatedProducts, 1440);
        }
        return view('frontend.all-page.category_detail', compact('products', 'id', 'slug', 'relatedProducts'));
    }

    public function productDetails(Request $request, $id, $slug)
    {
        $product = Product::with('category', 'productType', 'delivoryOption', 'shippingType', 'user')->where('id', $id)->first();
        $productsdesc = Product::with('category', 'productType', 'delivoryOption', 'shippingType', 'user')->where('status', 'Active')->orderby('id', 'desc')->paginate(15);
        $productsasc = Product::with('category', 'productType', 'delivoryOption', 'shippingType', 'user')->where('status', 'Active')->orderby('id', 'asc')->paginate(15);
        $mayyoulike = Product::with('category', 'productType', 'delivoryOption', 'shippingType', 'user')->where('status', 'Active')->inRandomOrder()->paginate(15);
        return view('frontend.all-page.product_detail', compact('product', 'id', 'slug', 'productsdesc', 'productsasc', 'mayyoulike'));
    }


    public function addtocart(Request $request)
    {

        if (Auth::check()) {
            $orderallready = Cart::where('product_id', $request->product_id)->where('status', 'Pending')->where('user_id', Auth::user()->id)->count();
        } else {
            $orderallready = Cart::where('product_id', $request->product_id)->where('status', 'Pending')->where('temp_id', session()->get('temp_id'))->count();
        }
        if ($orderallready > 0) {
            return response()->json(['success' => 'Product Already Added To Cart.']);
        } else {
            if (Auth::check()) {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $request->product_id;
                $cart->quantity = $request->quantity;
                $cart->total_price = $request->total;
                $cart->status = 'Pending';
                $cart->save();
                $total = Cart::where('user_id', Auth::user()->id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->sum('total_price');
                $count = Cart::where('user_id', Auth::user()->id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->count();
                return response()->json(['success' => 'Product Added To Cart Successfully.', 'cart' => $request->all(), 'temp_id' => Auth::user()->id, 'total' => $total, 'count' => $count, 'id' =>  $cart->id]);
            } else {
                if (session()->has('temp_id')) {
                    $temp_id = session()->get('temp_id');
                    $cart = new Cart();
                    $cart->temp_id = $temp_id;
                    $cart->product_id = $request->product_id;
                    $cart->quantity = $request->quantity;
                    $cart->total_price = $request->total;
                    $cart->status = 'Pending';
                    $cart->save();
                    $total = Cart::where('temp_id', $temp_id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->sum('total_price');
                    $count = Cart::where('temp_id', $temp_id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->count();
                    return response()->json(['success' => 'Product Added To Cart Successfully.', 'cart' => $request->all(), 'temp_id' => $temp_id, 'total' => $total, 'count' => $count, 'id' =>  $cart->id]);
                } else {
                    $temp_id = random_int(1000, 9999);
                    $cart = new Cart();
                    $cart->temp_id = $temp_id;
                    $cart->product_id = $request->product_id;
                    $cart->quantity = $request->quantity;
                    $cart->total_price = $request->total;
                    $cart->status = 'Pending';
                    $cart->save();
                    $request->session()->put('temp_id', $temp_id);
                    $total = Cart::where('temp_id', $temp_id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->sum('total_price');
                    $count = Cart::where('temp_id', $temp_id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->count();
                    return response()->json(['success' => 'Product Added To Cart Successfully.', 'cart' => $request->all(), 'temp_id' => $temp_id, 'total' => $total, 'count' => $count, 'id' =>  $cart->id]);
                }
            }
        }
    }

    public function orderdestroy(Request $request)
    {

        // return $request->all();
        $cart = Cart::find($request->destroy_id);
        $cart->delete();

        if (Auth::check()) {
            $total = Cart::where('user_id', Auth::user()->id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->sum('total_price');
            $count = Cart::where('user_id', Auth::user()->id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->count();
            return response()->json(['success' => 'Product Deleted From Cart Successfully.', 'total' => $total, 'count' => $count]);
        } else {
            $temp_id = session()->get('temp_id');
            $total = Cart::where('temp_id', $temp_id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->sum('total_price');
            $count = Cart::where('temp_id', $temp_id)->where('status', 'Pending')->orwhere('temp_id', session()->get('temp_id'))->count();
            return response()->json(['success' => 'Product Deleted From Cart Successfully.', 'total' => $total, 'count' => $count]);
        }
    }
}
