@extends('frontend.layouts.app')
@section('title')
    <title>Project</title>
@endsection

@section('content')
    <div class="inner-content mt-5 pt-5">
        <div class="wrap-parent-slider">
            <div class="wrap">
                <div class="slider-wrap">
                    @foreach ($allprojects as $allproject)
                        <div class="item" style="cursor: pointer;">
                            <img src="{{ $allproject->image }}" onerror="this.src='{{ asset('images/default.png') }}'"
                                alt="">
                            <div class="overlay-icon">
                                <div class="overlay-1">
                                    <a href="#" class="icon-bottom goldevine-icon" title="User Profile">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-item-text">
                                <h6 class="card-text">{{ $allproject->title }}</h6>
                                <p class="card-text-2">{!! Str::limit($allproject->description, 40, ' ...') !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="goldevine-card">
            <div class="container">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                        @foreach ( $allprojects as $allproject )
                        <div class="col-12 col-md-4 col-lg-3 mb-3 d-flex align-items-stretch">
                            <div class="card mb-3">
                                <div class="goldevine-card-image">
                                    <img src="{{ $allproject->image }}" onerror="this.src='{{ asset('images/default.png') }}'" alt="...">
                                    <div class="card-body">
                                        <p class="card-text">{{ $allproject->title }}</p>
                                    </div>
                                    <div class="overlay">
                                        <a href="#" class="icon goldevine-icon" title="User Profile">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="street-img">
            <img src="images/img1.png" class="img-fluid">
        </div>
    </div>
@endsection
