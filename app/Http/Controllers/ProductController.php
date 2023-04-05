<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\DeliveryOption as AdminDeliveryOption;
use App\Models\Admin\ProductType;
use App\Models\Admin\DeliveryOption;

class ProductController extends Controller
{

    public function productManagement()
    {
        $categories = Category::all();
        $delivery_options = AdminDeliveryOption::all();
        $product_types = ProductType::all();
        $products = Product::with('categories', 'deliveryOption', 'shippingType')->where('user_id', auth()->user()->id)->get();
        return view('frontend.charters.product_management', compact('products', 'product_types', 'categories', 'delivery_options'));
    }


    public function productsearch(Request $request)
    {
        $search = $request->search;
        $products = Product::where('status', 'Active')->where('product_name', 'like', '%' . $search . '%')->paginate(20);
        return view('frontend.all-page.search.index', compact('products'));
    }

    public function allProducts()
    {
        $products = Product::where('status', 'Active')->paginate(20);
        $productsassending = Product::where('status', 'Active')->orderBy('id', 'asc')->paginate(20);
        $productsdesending = Product::where('status', 'Active')->orderBy('id', 'desc')->paginate(20);
        return view('frontend.all-page.product.allProduct', compact('products','productsassending', 'productsdesending'));
    }
}
