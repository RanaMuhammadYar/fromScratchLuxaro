@extends('frontend.layouts.app')
@section('content')
    <div class="inner-content">
        <div class="about-banner py-5">
            <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb"
                class="d-flex justify-content-center align-items-center pb-1">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
            <div class="title text-black-50 text-center">
                <h2 class="text-black-50 bg-white d-inline-block">About Luxauro</h2>
            </div>
        </div>
        <div class="about-sections mb-4">
            <div class="container">
                <div class="col-md-11 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="about-img-holder mb-3 mb-md-0">
                                <img src="images/about01.png" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="mb-0 pb-1">Lorem ipsum dolor sit amet.</h2>
                            <p><strong>Lorem ipsum dolor sit amet consectetur elit</strong></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Non dolor totam deserunt! Aspernatur temporibus fugit at explicabo enim fugiat facilis
                                laborum dignissimos corrupti eaque repellendus soluta delectus deserunt,
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Non dolor totam deserunt! Aspernatur temporibus fugit at explicabo enim fugiat facilis
                                laborum dignissimos corrupti eaque repellendus soluta delectus deserunt,
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Non dolor totam deserunt! Aspernatur temporibus fugit at explicabo enim fugiat facilis
                                laborum dignissimos corrupti eaque repellendus soluta delectus deserunt,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-section-last mb-4 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 pb-4">
                        <h2 class="mb-0 pb-1">Lorem ipsum dolor sit amet.</h2>
                        <p><strong> ipsum dolor sit amet consectetur adipisicing elit</strong></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Non dolor totam deserunt! Aspernatur temporibus fugit at explicabo enim fugiat facilis
                            laborum dignissimos corrupti eaque repellendus soluta delectus deserunt,
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Non dolor totam deserunt! Aspernatur temporibus fugit at explicabo enim fugiat facilis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="street-img">
            <img src="images/img1.png" class="img-fluid">
        </div>

    </div>
@endsection
