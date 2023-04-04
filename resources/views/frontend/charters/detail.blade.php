@extends('frontend.layouts.app')

@section('title')
    <title>Charter Details</title>
@endsection
@section('content')
    <div class="inner-content">
        <div class="charter-detail-page mt-4 pt-md-5 mt-md-5 mb-3 mb-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-slider">
                            @foreach (json_decode($charter_detail->charter_agreement) as $image)
                                <div>
                                    <img src="{{ $image }}" onerror="this.src='{{ asset('images/default.png') }}'"
                                        class="img-fluid" style="width: 590px;height: 420px;">
                                </div>
                            @endforeach
                        </div>
                        <div class="detail-nav-slider">
                            @foreach (json_decode($charter_detail->charter_agreement) as $image)
                                <div>
                                    <img src="{{ $image }}" onerror="this.src='{{ asset('images/default.png') }}'"
                                        class="img-fluid" style="height: 22px;cursor: pointer;">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="charter-detail-desc">
                            <h2>{{ $charter_detail->name }}</h2>
                            <div class="details-review d-flex align-items-center">
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="small">4.2 (Based on 16 Reviews)</span>
                            </div>
                            <p class="price my-2">{{ $charter_detail->rate }}/Hours</p>
                            <p>{!! $charter_detail->description !!}</p>
                            <form class="charter-desc-form" action="{{ route('charter_book') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label for="book_from">Book From</label>
                                        <div class="input-icon"><input type="date" name="book_from" placeholder=""
                                                class="form-control" required></div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="book_to">Book To</label>
                                        <div class="input-icon"><input type="date" name="book_to" placeholder=""
                                                class="form-control" required></div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="time_from">Time From</label>
                                        <div class="input-icon"><input type="time" name="time_from" placeholder=""
                                                class="form-control" required></div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for="time_to">Time To</label>
                                        <div class="input-icon"><input type="time" name="time_to" placeholder=""
                                                class="form-control" required></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-5">
                                        <label for="">Number of Guests/Travelers</label>
                                        <select class="form-select" name="number_of_guest">
                                            <option value="">-Select-</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-7">
                                        <label for="" style="opacity: 0;">Number of Guests/Travelers</label>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Book Now</button>
                                        </div>
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
                    <h2 class="m-0">Other charters in the area</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <!-- <form class="page-form flex-fill" action="#"> -->
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
                        <!-- </form> -->
                    </div>
                </div>
                <div class="slider Charters-slider">
                    @foreach ($charters as $charter)
                        <div>
                            <a href="{{ route('charter_detail', ['id' => $charter->id]) }}" class="text-dark">
                                <div class="product-item">
                                    <div class="img-holder">
                                        <img src="{{ $charter->thumbnail_img }}" class="img-fluid">
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
                                            <a class="btn bg-dark text-white py-1 px-2" href="javascript:void"><i
                                                    class="fa fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- <div class="charter-specs-section mb-3 mb-md-5">
                        <div class="container">
                            <div class="col-md-10 mx-auto">
                                <div class="row gx-5">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-7 mb-3 mb-md-4">
                                                <img src="{{ static_asset('frontend/images/charter-img.png') }}" class="img-fluid w-100">
                                            </div>
                                            <div class="col-md-5 mb-3 mb-md-4">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                            </div>
                                            <div class="col-md-5 mb-3 mb-md-4">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                            </div>
                                            <div class="col-md-7 mb-3 mb-md-4">
                                                <img src="{{ static_asset('frontend/images/charter-img.png') }}" class="img-fluid w-100">
                                            </div>
                                            <div class="col-md-7 mb-3 mb-md-4">
                                                <img src="{{ static_asset('frontend/images/charter-img.png') }}" class="img-fluid w-100">
                                            </div>
                                            <div class="col-md-5 mb-3 mb-md-4">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <h3 class="mb-4">Specifications</h3>
                                        <h4 class="mb-3">General</h4>
                                        <table class="w-100 mb-5">
                                            <tr>
                                                <td>Model Series Name</td>
                                                <td>My Buddy D</td>
                                            </tr>
                                            <tr>
                                                <td>Model Number</td>
                                                <td>POR 1376</td>
                                            </tr>
                                            <tr>
                                                <td>Primary Meterial</td>
                                                <td>Wood</td>
                                            </tr>
                                            <tr>
                                                <td>Primary Meterial SubType</td>
                                                <td>Partical Board</td>
                                            </tr>
                                            <tr>
                                                <td>Delivery Condition</td>
                                                <td>DIY(Do-it-Yourself)</td>
                                            </tr>
                                            <tr>
                                                <td>Suitable For</td>
                                                <td>Study & Home Office</td>
                                            </tr>
                                            <tr>
                                                <td>Compatible Laptop Size</td>
                                                <td>17 cm</td>
                                            </tr>
                                            <tr>
                                                <td>Foldable</td>
                                                <td>Yes</td>
                                            </tr>
                                            <tr>
                                                <td>Adjustable Height</td>
                                                <td>Yes</td>
                                            </tr>
                                        </table>
                                        <h4 class="mb-3">Demensions</h4>
                                        <table class="w-100">
                                            <tr>
                                                <td>Width</td>
                                                <td>60 cm</td>
                                            </tr>
                                            <tr>
                                                <td>Height</td>
                                                <td>80 cm</td>
                                            </tr>
                                            <tr>
                                                <td>Depth</td>
                                                <td>40 cm</td>
                                            </tr>
                                            <tr>
                                                <td>Weight</td>
                                                <td>4.98 kg</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

        <div class="reviews-ratings mb-3 mb-md-5">
            <div class="container">
                <h2 class="mb-4">Reviews & Ratings</h2>
                <img src="{{ asset('images/review-img.png') }}" class="img-fluid">
            </div>
        </div>
        <div class="street-img">
            <img src="{{ asset('images/img1.png') }}" class="img-fluid">
        </div>

    </div>
@endsection
