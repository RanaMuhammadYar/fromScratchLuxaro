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

    public function product(Request $request, $slug)
    {
        $detailedProduct  = Product::with('reviews', 'brand', 'stocks', 'user', 'user.shop')->where('auction_product', 0)->where('slug', $slug)->where('approved', 1)->first();

        $product_queries = ProductQuery::where('product_id', $detailedProduct->id)->where('customer_id', '!=', Auth::id())->latest('id')->paginate(10);
        $total_query = ProductQuery::where('product_id', $detailedProduct->id)->count();
        // Pagination using Ajax
        if (request()->ajax()) {
            return Response::json(View::make('frontend.partials.product_query_pagination', array('product_queries' => $product_queries))->render());
        }
        // End of Pagination using Ajax

        if ($detailedProduct != null && $detailedProduct->published) {
            if ($request->has('product_referral_code') && addon_is_activated('affiliate_system')) {
                $affiliate_validation_time = AffiliateConfig::where('type', 'validation_time')->first();
                $cookie_minute = 30 * 24;
                if ($affiliate_validation_time) {
                    $cookie_minute = $affiliate_validation_time->value * 60;
                }
                Cookie::queue('product_referral_code', $request->product_referral_code, $cookie_minute);
                Cookie::queue('referred_product_id', $detailedProduct->id, $cookie_minute);

                $referred_by_user = User::where('referral_code', $request->product_referral_code)->first();

                $affiliateController = new AffiliateController;
                $affiliateController->processAffiliateStats($referred_by_user->id, 1, 0, 0, 0);
            }
            if ($detailedProduct->digital == 1) {
                return view('frontend.digital_product_details', compact('detailedProduct', 'product_queries', 'total_query'));
            } else {
                return view('frontend.product_details', compact('detailedProduct', 'product_queries', 'total_query'));
            }
        }
        abort(404);
    }


}
