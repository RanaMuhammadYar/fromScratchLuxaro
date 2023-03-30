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
        //  ,'deliveryOption','shippingType'
         $products = Product::with('categories','deliveryOption','shippingType')->get();
        //  foreach ($products as $key => $value) {
        //     dd($value->shippingType);
        //  }
       
         return view('frontend.charters.product_management',compact('products','product_types','categories','delivery_options'));
    }
   
    public function productUpload(Request $request)
    {
        // dd($request->all());
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->sku = $request->sku;
        $product->productId = $request->productId;
        $product->modal_number = $request->modal_number;
        $product->upc = $request->upc;
        $product->is_auction = $request->is_auction;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        // $product->category_id = $request->category_id;
        $product->product_type = $request->product_type_id;
        // $product->delivery_option_id = $request->delivery_option_id;
        // $product->shipping_type_id = $request->shipping_type_id;
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
        // $product->productType()->sync($request->product_type_id);

        $product->shippingType()->sync($request->shipping_type_id);
        return redirect()->route('product.index')->with('success', 'Product Added Successfully');

        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        //     'from_charter_side' => 'required',
        //     'type' => 'required',
        //     'thumbnail_img' => 'required',
        //     'tags' => 'required',
        //     'charter_category_id' => 'required',
        //     'delivery_option_id' => 'required',
        //     'shipping_type' => 'required',
        //     'shipping_charge' => 'required',

        // ]);

        // $product = new Product;
        // if ($request->hasFile('thumbnail_img')) {
        //     $path = asset('storage/' . $request->thumbnail_img->store('productImage'));
        //     $product->product_image = $path;
        // }
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->description = $request->description;
        // $product->from_charter_side = $request->from_charter_side;
        // $product->type = $request->type;
        // $product->tags = json_encode($request->tags);
        // $product->charter_category_id = json_encode($request->charter_category_id);
        // $product->delivery_option_id = json_encode($request->delivery_option_id);
        // $product->shipping_type = json_encode($request->shipping_type);
        // $product->shipping_charge = $request->shipping_charge;
        // $product->save();
        // return redirect()->back()->with('success', 'Product created successfully.');
    }

    public function productsearch(Request $request)
    {
        $search = $request->search;
        $products = Product::where('status', 'Active')->where('product_name', 'like', '%' . $search . '%')->paginate(20);
        return view('frontend.all-page.search.index', compact('products'));
    }
}
