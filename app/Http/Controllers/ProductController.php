<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\ProductType;
use App\Models\DeliveryOption;

class ProductController extends Controller
{

    public function productManagement()
    {
         $categories = Category::all();
         $delivery_options = DeliveryOption::all();
         $product_types = ProductType::all();
         $products = Product::with('categories','deliveryOption','shippingType')->get();


         return view('frontend.charters.product_management',compact('products','product_types','categories','delivery_options'));
    }

    public function productUpload(Request $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->sku = $request->sku;
        $product->productId = $request->productId;
        $product->modal_number = $request->modal_number;
        $product->upc = $request->upc;
        $product->is_auction = $request->is_auction;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        $product->product_type = $request->product_type_id;
        $product->msrf = $request->msrf;
        $product->quantity = $request->quantity;
        $product->serial_number = $request->serial_number;
        $product->shipping_charge = $request->shipping_charge;
        $product->status = "Active";
        $product->user_id = $request->user_id;
        if ($request->hasFile('image')) {
            $path = asset('storage/'.$request->product_image->store('product'));
            $product->image = $path;
        }
        $product->save();
        $tags = explode(",", $request->tags);
        $product->tag($tags);
        $product->categories()->sync($request->category_id);
        $product->deliveryOption()->sync($request->delivery_option_id);
        $product->shippingType()->sync($request->shipping_type_id);
        return redirect()->route('product.index')->with('success', 'Product Added Successfully');
    }

    public function productsearch(Request $request)
    {
        $search = $request->search;
        $products = Product::where('status', 'Active')->where('product_name', 'like', '%' . $search . '%')->paginate(20);
        return view('frontend.all-page.search.index', compact('products'));
    }
}
