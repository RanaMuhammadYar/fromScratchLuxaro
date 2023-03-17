@extends('frontend.layouts.app')
@section('title')
<title>Home</title>
@endsection
@section('content')
<style>

</style>
@if (get_setting('home_banner1_images') != null)
<div class="banner mb-4">
    <div class="banner-slider">
        @php $banner_1_imags = json_decode(get_setting('home_banner1_images')); @endphp
        @foreach ($banner_1_imags as $key => $value)
        <div>
            <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="d-block text-reset">
                <img src="{{ static_asset('assets/images/banner.png') }}" data-src="{{ uploaded_asset($banner_1_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100">
            </a>
        </div>
    @endforeach
</div>
</div>
@endif
<form class="page-form mx-auto mb-5 mt-5 pt-5" action="#">
    <div class="page-form-holder d-flex">
        <!-- <select class="form-control border-0 rounded-0 flex-fill"> -->
            <!-- <option>All</option>
                <option>All</option>
                <option>All</option> -->
        <!-- </select> -->
        <!-- <div class="form-field d-flex flex-fill">
                <input type="search" placeholder="Search..." class="border-0 bg-transparent flex-fill">
                <button type="submit" class="bg-transparent border-0 flex-fill"><i class="fa fa-search"></i></button>
            </div> -->

        <!-- <div class="form-field d-flex flex-fill">
            <form action="{{ route('home') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="border-0 bg-transparent flex-fill" name="search" placeholder="Search products...">
                    <span class="input-group-btn">
                        <button type="submit" class="bg-transparent border-0 flex-fill"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div> -->
    </div>
</form>


<div class="product-section mb-4">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Luxauro Global + National</h2>
            <div class="d-flex form-holder">
                <!-- <a class="btn btn-view rounded-0" href="javascript:void">View All</a> -->
                <form class="page-form flex-fill" action="#">
                    <div class="page-form-holder d-flex">
                        <label class="form-control rounded-0">Search Filter</label>
                        <div class="form-field d-flex flex-fill">
                            <select class="flex-fill border-0 bg-transparent" id="category-filter">
                                <option>OrderBy</option>
                                <option value="desc">(Z-A)</option>
                                <option value="asc">(A-Z)</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row text-center" id="append-category">

            @foreach ($categories as $category)
            <div class="col-6 col-md-4 col-lg-2 mb-4">
                <div class="product-item">
                    <a href="{{ route('productcategory', ['id' => $category->id, 'slug' => Str::slug($category->title)]) }}" style="color: #2e2c2c; text-decoration: none;">
                        <div class="img-holder">
                            <img src="{{ isset($category->image) ? $category->image : asset('images/product-img.png') }}" onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid" alt="">
                        </div>
                        <div class="txt-holder">
                            <strong class="title">{{ $category->title }}</strong>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Luxauro Street, Vintage & Antique Market </h2>
            <div class="d-flex form-holder">
                <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                <form class="page-form flex-fill" action="#">
                    <div class="page-form-holder d-flex">
                        <label class="form-control rounded-0">Search Filter</label>
                        <div class="form-field d-flex flex-fill">
                            <select class="flex-fill border-0 bg-transparent">
                                <option>All</option>
                                <option>All</option>
                                <option>All</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">My Local Luxauro</h2>
            <div class="d-flex form-holder">
                <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                <form class="page-form flex-fill" action="#">
                    <div class="page-form-holder d-flex">
                        <label class="form-control rounded-0">Search Filter</label>
                        <div class="form-field d-flex flex-fill">
                            <select class="flex-fill border-0 bg-transparent">
                                <option>All</option>
                                <option>All</option>
                                <option>All</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="slider my-local-slider">
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                        <i class="fa fa-globe fa-1x mt-2"></i>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong class="title">$24.23</strong>
                        <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Luxauro Charters</h2>
            <div class="d-flex form-holder">
                <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                <form class="page-form flex-fill" action="#">
                    <div class="page-form-holder d-flex">
                        <label class="form-control rounded-0">Search Filter</label>
                        <div class="form-field d-flex flex-fill">
                            <select class="flex-fill border-0 bg-transparent">
                                <option>All</option>
                                <option>All</option>
                                <option>All</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="slider Charters-slider">
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <strong class="title">Lorem Ipsum</strong>
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <i class="fa fa-globe fa-1x mt-2"></i>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <strong class="title">$24.23</strong>
                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i class="fa fa-shopping-basket"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($categories as $category)
<div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
    <h2 class="m-0">{{ $category->title }}</h2>
    <div class="d-flex form-holder">
        <a class="btn btn-view rounded-0" href="{{ route('productcategory', ['id' => $category->id, 'slug' => Str::slug($category->title)]) }}">View
            All</a>
        <form class="page-form flex-fill" action="#">
            <div class="page-form-holder d-flex">
                <label class="form-control rounded-0">Search Filter</label>
                <div class="form-field d-flex flex-fill">
                    <select class="flex-fill border-0 bg-transparent" id="price-filter{{ $category->id }}">
                        <option>OrderBy</option>
                        <option value="desc{{ $category->id }}">price(max)</option>
                        <option value="asc{{ $category->id }}">price(min)</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="slider Luxauro-library-slider" id="product-append{{ $category->id }}">
    @foreach ($category->relatedProducts as $product)
    <div>
        <div class="product-item" style="margin: 0 12px;">
            <a href="{{ route('productDetails', ['id' => $product->id, 'slug' => Str::slug($product->product_name)]) }}">
                <div class="img-holder">
                    <img src="{{ $product->image }}" onerror="this.src'{{ asset('images/default.png') }}'" class="img-fluid">
                </div>
            </a>
            <div class="txt-holder">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <a href="{{ route('productDetails', ['id' => $product->id, 'slug' => Str::slug($product->product_name)]) }}">
                            <strong class="title" style="color:black">{{ $product->product_name }}</strong>
                        </a>
                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                            <li class="me-1"><i class="fa fa-star"></i></li>
                            <li class="me-1"><i class="fa fa-star"></i></li>
                            <li class="me-1"><i class="fa fa-star"></i></li>
                            <li class="me-1"><i class="fa fa-star"></i></li>
                            <li class="me-1"><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <strong class="title">${{ $product->product_price }}</strong>
                    <button class="btn bg-dark text-white py-1 px-2" href="" onclick="addToCart('{{ $product->id }}', '{{ $product->product_name }}', '{{ $product->product_price }}')"><i class="fa fa-shopping-basket"></i>
                    </button>
                    <input type="hidden" name="" value="1" class="addOrRemove">
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach
@endsection
