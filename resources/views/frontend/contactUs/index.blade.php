@extends('frontend.layouts.app')
@section('content')
    <div class="inner-content">
        <div class="about-banner py-5">
            <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb"
                class="d-flex justify-content-center align-items-center pb-1">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
            <div class="title text-black-50 text-center">
                <h2 class="text-black-50 bg-white d-inline-block">Contact Goldevine</h2>
            </div>
        </div>
        <div class="contact-us-section mb-4">
            <div class="container">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <h2 class="pb-2">Lorem ipsum is simply dummy text</h2>
                    <form>
                        <div class="row gx-2">
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="First Name" class="form-control mb-3 p-2"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="Last Name" class="form-control mb-3 p-2"
                                    id="exampleInputPassword1">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" placeholder="Email Address" class="form-control mb-3 p-2"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="number" placeholder="Phone Number" class="form-control mb-3 p-2"
                                    id="exampleInputPassword1">
                            </div>
                        </div>
                        <textarea class="form-control mb-4" placeholder="Message..." id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div class="d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-submit py-2 px-4">SUBMIT</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="street-img">
            <img src="{{ asset('images/img1.png') }}" class="img-fluid">
        </div>
    </div>
@endsection
