<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
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

        if (Cache::has('related_products_'.$id)) {
            $relatedProducts = Cache::get('related_products_'.$id);
        } else {
            $product = Category::find($id);
            $relatedProducts = $product->relatedProducts()->get();
            Cache::put('related_products_'.$id, $relatedProducts, 1440);
        }
        return view('frontend.all-page.product_detail', compact('products', 'id', 'slug' ,'relatedProducts'));
    }
}