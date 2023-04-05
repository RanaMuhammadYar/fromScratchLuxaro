@extends('frontend.layouts.app')
@section('title')
    <title>Home</title>
@endsection
@section('content')
    @if (get_setting('home_banner1_images') != null)
        <div class="banner mb-4">
            <div class="banner-slider">
                @php $banner_1_imags = json_decode(get_setting('home_banner1_images')); @endphp
                @foreach ($banner_1_imags as $key => $value)
                    <div>
                        <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="d-block text-reset">
                            <img src="{{ static_asset('assets/images/banner.png') }}"
                                data-src="{{ uploaded_asset($banner_1_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo"
                                class="img-fluid lazyload w-100">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
    <div class="product-section mb-4 mt-5 pt-2">
        <div class="container">
            <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                <h2 class="m-0">Luxauro Global + National</h2>
                <div class="d-flex form-holder">
                    <!-- <a class="btn btn-view rounded-0" href="javascript:void">View All</a> -->
                    <form class="page-form flex-fill" action="#">
                        <div class="page-form-holder d-flex">
                            <label class="form-control rounded-0">Search Filter</label>
                            <div class="form-field d-flex flex-fill">
                                <select class="flex-fill border-0 bg-transparent" onchange="appendCategories(this)">
                                    <option>OrderBy</option>
                                    <option value="desc">(Z-A)</option>
                                    <option value="asc">(A-Z)</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row text-center" id="category-append">
                @foreach ($categories as $category)
                    <div class="col-6 col-md-4 col-lg-2 mb-4">
                        <div class="product-item">
                            <a href="{{ route('productcategory', ['id' => $category->id, 'slug' => Str::slug($category->title)]) }}"
                                style="color: #2e2c2c; text-decoration: none;">
                                <div class="img-holder">
                                    <img src="{{ isset($category->image) ? $category->image : asset('images/product-img.png') }}"
                                        onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid"
                                        alt="">
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
                {{-- <div class="d-flex form-holder">
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
                </div> --}}
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
                                <select class="flex-fill border-0 bg-transparent" onchange="appendLocalLuxauro(this)">
                                    <option>OrderBy</option>
                                    <option value="desc{{ @$category->id }}">price(max)</option>
                                    <option value="asc{{ @$category->id }}">price(min)</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="slider my-local-slider" id="local-luxaro-append">
                @foreach ($locallaxaro as $locallaxar)
                    <div>
                        <div class="product-item">
                            <a
                                href="{{ route('productDetails', ['id' => $locallaxar->id, 'slug' => Str::slug($locallaxar->product_name)]) }}">
                                <div class="img-holder">
                                    <img src="{{ $locallaxar->image }}"
                                        onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                </div>
                            </a>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <a href="{{ route('productDetails', ['id' => $locallaxar->id, 'slug' => Str::slug($locallaxar->product_name)]) }}"
                                            style="color:black">
                                            <strong class="title">{{ $locallaxar->product_name }}</strong>
                                        </a>
                                        <ul class="list-unstyled m-0 p-0 d-flex stars">
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                            <li class="me-1"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    {{-- <i class="fa fa-globe fa-1x mt-2"></i> --}}
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <strong class="title">${{ $locallaxar->product_price }}</strong>
                                    <button class="btn bg-dark text-white py-1 px-2" href=""
                                        onclick="addToCart('{{ $locallaxar->id }}', '{{ $locallaxar->product_name }}', '{{ $locallaxar->product_price }}')"><i
                                            class="fa fa-shopping-basket"></i>
                                    </button>
                                    <input type="hidden" name="" value="1" class="addOrRemove">
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="product-section mb-5 pb-lg-3">
        <div class="container">
            <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                <h2 class="m-0">Luxauro Charters</h2>
                <div class="d-flex form-holder">
                    <a class="btn btn-view rounded-0" href="{{ route('charters') }}">View All</a>
                    <form class="page-form flex-fill" action="#">
                        <div class="page-form-holder d-flex">
                            <label class="form-control rounded-0">Search Filter</label>
                            <div class="form-field d-flex flex-fill">
                                <select class="flex-fill border-0 bg-transparent" onchange="appendCharters(this)">
                                    <option>OrderBy</option>
                                    <option value="asc">price(max)</option>
                                    <option value="desc">price(min)</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="slider Charters-slider" id="charter-append">
                @foreach ($luxauro_charters as $charter)
                    <div>
                        <a href="{{ route('charter_detail', ['id' => $charter->id]) }}" class="text-dark">
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="{{ $charter->thumbnail_img }}"
                                        onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div>
                                            <strong class="title">{{ $charter->name }}</strong>
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
                                        <strong class="title">${{ $charter->rate }}</strong>
                                        <a class="btn bg-dark text-white py-1 px-2"
                                            href="{{ route('charter_detail', ['id' => $charter->id]) }}"><i
                                                class="fa fa-shopping-basket"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container product-section mb-5 pb-lg-3">
        <div class="container">
            <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                <h2 class="m-0">Gold Evine</h2>
                {{-- <div class="d-flex form-holder">
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
                </div> --}}
            </div>
            <div class="slider gold-evine-slider">
                @forelse ($goldevines as $goldevine)
                    @php
                        $total_amount = App\Models\Admin\Goldevine\GoldevineOrder::where('project_id', $goldevine->id)->sum('total_price');
                        $donations = App\Models\Admin\Goldevine\GoldevineOrder::where('project_id', $goldevine->id)->count();

                    @endphp
                    <div>
                        <a href="{{ route('projectDetail', ['id' => $goldevine->id, 'slug' => $goldevine->slug]) }}">
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="{{ $goldevine->feature_image }}"
                                        onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                </div>

                                <div class="txt-holder">
                                    <strong
                                        class="title text-center d-block mb-2">{{ Str::words($goldevine->title, 2, '...') }}</strong>
                                    <div class="progress rounded-0 mb-1">
                                        <div class="progress-bar rounded-0" role="progressbar"
                                            style="width:{{ persentage($goldevine->id) }}%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>${{ number_format($total_amount) }} Raised</span>
                                        <span>{{ persentage($goldevine->id) }}%</span>
                                    </div>
                                    <p class="mb-2">{{ donation($goldevine->id) }} Donations</p>
                                    <p class="m-0">{{ Str::words($goldevine->short_description, 10, '...') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="container">
                        No GoldEvine Project
                    </div>
                @endforelse
            </div>
        </div>
        @foreach ($categories as $category)
            <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                <h2 class="m-0">{{ $category->title }}</h2>
                <div class="d-flex form-holder">
                    <a class="btn btn-view rounded-0"
                        href="{{ route('productcategory', ['id' => $category->id, 'slug' => Str::slug($category->title)]) }}">View
                        All</a>
                    <form class="page-form flex-fill" action="#">
                        <div class="page-form-holder d-flex">
                            <label class="form-control rounded-0">Search Filter</label>
                            <div class="form-field d-flex flex-fill">
                                <select class="flex-fill border-0 bg-transparent" onchange="appendProducts(this)">
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
                @php
                    $categores = $category->products->where('status', 'Active');
                @endphp
                @foreach ($categores as $product)
                    <div>
                        <div class="product-item" style="margin: 0 12px;">
                            <a
                                href="{{ route('productDetails', ['id' => $product->id, 'slug' => Str::slug($product->product_name)]) }}">
                                <div class="img-holder">
                                    <img src="{{ $product->image }}"
                                        onerror="this.src'{{ asset('images/default.png') }}'" class="img-fluid">
                                </div>
                            </a>
                            <div class="txt-holder">
                                <div class="d-flex justify-content-between mb-3">
                                    <div>
                                        <a
                                            href="{{ route('productDetails', ['id' => $product->id, 'slug' => Str::slug($product->product_name)]) }}">
                                            <strong class="title"
                                                style="color:black">{{ $product->product_name }}</strong>
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
                                    <button class="btn bg-dark text-white py-1 px-2" href=""
                                        onclick="addToCart('{{ $product->id }}', '{{ $product->product_name }}', '{{ $product->product_price }}')"><i
                                            class="fa fa-shopping-basket"></i>
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


