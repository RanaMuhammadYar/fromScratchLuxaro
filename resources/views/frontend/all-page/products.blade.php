@extends('frontend.layouts.app')
@section('title')
    <title>Home</title>
@endsection
@section('content')


<div class="banner mb-4">
    <div class="banner-slider">
        <div>
            <img src="images/banner.png" class="img-fluid">
        </div>
        <div>
            <img src="images/banner.png" class="img-fluid">
        </div>
        <div>
            <img src="images/banner.png" class="img-fluid">
        </div>
    </div>
</div>
<form class="page-form mx-auto mb-5" action="#">
    <div class="page-form-holder d-flex">
        <select class="form-control select-control border-0 rounded-0 flex-fill">
            <option>All</option>
            <option>All</option>
            <option>All</option>
        </select>
        <div class="form-field d-flex flex-fill">
            <input type="search" placeholder="Search..." class="border-0 bg-transparent flex-fill">
            <button type="submit" class="bg-transparent border-0 flex-fill"><i class="fa fa-search"></i></button>
        </div>
    </div>
</form>
<div class="product-section mb-4">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Luxauro Global + National</h2>
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
        <div class="row text-center">
        @foreach ( $products as  $product)
        @foreach ( json_decode($product->charter_category_id) as $charter_category_id )
                @if ($charter_category_id == 1 || $charter_category_id == 2  )
                <div class="col-6 col-md-4 col-lg-2 mb-4">
                    <div class="product-item">
                        <div class="img-holder">
                            <img src="{{ isset($product->product_image) ? $product->product_image : asset('images/product-img.png')  }}" onerror="this.src='{{ asset('images/product-img.png') }}'" class="img-fluid" alt="">
                        </div>
                        <div class="txt-holder">
                            <strong class="title">{{ $product->name }}</strong>
                        </div>
                    </div>
                </div>
                @endif
        @endforeach
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
        <div class="slider national-shop-slider text-center">

            @foreach ( $products as $product )
            @foreach (json_decode($product->charter_category_id )  as $charter_category_id)
            @if ($charter_category_id == 3 || $charter_category_id == 4 || $charter_category_id == 5 )
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="{{ isset($product->product_image) ? $product->product_image : asset('images/product-img.png')  }}" onerror="this.src='{{ asset('images/product-img.png') }}'" class="img-fluid" alt="">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">{{  $product->name }}</strong>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach

            {{-- <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Shop Name</strong>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Shop Name</strong>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Shop Name</strong>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Shop Name</strong>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Shop Name</strong>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Shop Name</strong>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Gold Evine</h2>
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
        <div class="slider gold-evine-slider">
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title text-center d-block mb-2">Project Title</strong>
                        <div class="progress rounded-0 mb-1">
                          <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>sX.XXX raised</span>
                            <span>XX%</span>
                        </div>
                        <p class="mb-2"># donations</p>
                        <p class="m-0">Brief project description will go here... (10 words)</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title text-center d-block mb-2">Project Title</strong>
                        <div class="progress rounded-0 mb-1">
                          <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>sX.XXX raised</span>
                            <span>XX%</span>
                        </div>
                        <p class="mb-2"># donations</p>
                        <p class="m-0">Brief project description will go here... (10 words)</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title text-center d-block mb-2">Project Title</strong>
                        <div class="progress rounded-0 mb-1">
                          <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>sX.XXX raised</span>
                            <span>XX%</span>
                        </div>
                        <p class="mb-2"># donations</p>
                        <p class="m-0">Brief project description will go here... (10 words)</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title text-center d-block mb-2">Project Title</strong>
                        <div class="progress rounded-0 mb-1">
                          <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>sX.XXX raised</span>
                            <span>XX%</span>
                        </div>
                        <p class="mb-2"># donations</p>
                        <p class="m-0">Brief project description will go here... (10 words)</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title text-center d-block mb-2">Project Title</strong>
                        <div class="progress rounded-0 mb-1">
                          <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>sX.XXX raised</span>
                            <span>XX%</span>
                        </div>
                        <p class="mb-2"># donations</p>
                        <p class="m-0">Brief project description will go here... (10 words)</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title text-center d-block mb-2">Project Title</strong>
                        <div class="progress rounded-0 mb-1">
                          <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>sX.XXX raised</span>
                            <span>XX%</span>
                        </div>
                        <p class="mb-2"># donations</p>
                        <p class="m-0">Brief project description will go here... (10 words)</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/product-img.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title text-center d-block mb-2">Project Title</strong>
                        <div class="progress rounded-0 mb-1">
                          <div class="progress-bar rounded-0" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>sX.XXX raised</span>
                            <span>XX%</span>
                        </div>
                        <p class="mb-2"># donations</p>
                        <p class="m-0">Brief project description will go here... (10 words)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Gold Metal Guild</h2>
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
        <div class="slider gold-metal-slider text-center">
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/user.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Jake Rage</strong>
                        <span class="d-block">IT Expert</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/user.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Jake Rage</strong>
                        <span class="d-block">IT Expert</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/user.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Jake Rage</strong>
                        <span class="d-block">IT Expert</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/user.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Jake Rage</strong>
                        <span class="d-block">IT Expert</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/user.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Jake Rage</strong>
                        <span class="d-block">IT Expert</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/user.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Jake Rage</strong>
                        <span class="d-block">IT Expert</span>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-item">
                    <div class="img-holder">
                        <img src="images/user.png" class="img-fluid">
                    </div>
                    <div class="txt-holder">
                        <strong class="title">Jake Rage</strong>
                        <span class="d-block">IT Expert</span>
                    </div>
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
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Luxaurolicious</h2>
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
        <div class="slider Luxaurolicious-slider">
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
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Luxauro Fresh</h2>
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
        <div class="slider Luxauro-fresh-slider">
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
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Luxauro Library, Forum, & Publishing</h2>
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
        <div class="slider Luxauro-library-slider">
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
<div class="product-section mb-5 pb-lg-3">
    <div class="container">
        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
            <h2 class="m-0">Luxauro Street, Vintage & Antique Market</h2>
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
        <div class="slider Luxauro-street-slider">
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
<div class="street-img">
    <img src="images/img1.png" class="img-fluid">
</div>

@endsection