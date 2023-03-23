@extends('frontend.goldevine.layouts.app')
@section('title')
    <title>{{ $project->title }} </title>
@endsection
@section('content')
    <div class="inner-content">
        <div class="project-details-pagesmain mt-5 mb-4 pt-md-4">
            <div class="container">
                <h2>{{ $project->title }}</h2>
                <div class="project-user-info mb-1 d-flex align-items-baseline">
                    <div class="project-user-logo me-2">
                        <img src="{{ isset($project->user->userDetails->user_profile_image) ? $project->user->userDetails->user_profile_image : '' }}"
                            onerror="this.src=' {{ asset('images/users.jfif') }}'" class="img-fluid h-100">
                    </div>
                    <div class="by-user me-3">
                        <p class="mb-0">
                            {{ isset($project->user->userDetails->name) ? $project->user->userDetails->name : '' }}</p>
                    </div>
                    <div class="by-project me-3">
                        <p class="mb-0">{{ totalproject($project->user_id) }} Projects</p>
                    </div>
                    <div class="by-fav-projects">
                        <p class="mb-0">{{ totalproject($project->user_id) - 1 }} favorite Project</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-slider-gv ">
                            @foreach (json_decode($project->gallery_image) as $image)
                                <div style="cursor: pointer;">
                                    <img src="{{ $image }}" class="img-fluid"
                                        onerror="this.src='{{ asset('images/default.png') }}'">
                                </div>
                            @endforeach
                        </div>
                        <div class="detail-nav-slider-gv mb-3">
                            @foreach (json_decode($project->gallery_image) as $image)
                                <div style="cursor: pointer;">
                                    <img src="{{ $image }}" class="img-fluid"
                                        onerror="this.src='{{ asset('images/default.png') }}'">
                                </div>
                            @endforeach
                        </div>
                        <p class="mb-1"><strong>{{ $project->short_description }}</strong>
                        </p>
                        <div class="project-social-media">
                            <span>Share:</span>
                            <span><a href="javascript:void"><i class="fa fa-facebook-official rounded-0"
                                        aria-hidden="true"></i></a></span>
                            <span><a href="javascript:void"><i class="fa fa-twitter-square rounded-0"
                                        aria-hidden="true"></i></a></span>
                            <span><a href="javascript:void"><i class="fa fa-pinterest-square rounded-0"
                                        aria-hidden="true"></i></a></span>
                            <span><a href="javascript:void"><i class="fa fa-linkedin-square rounded-0"
                                        aria-hidden="true"></i></a></span>
                            <span><a href="javascript:void"><i class="fa fa-share-alt" aria-hidden="true"></i></a></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="tree-image mb-3">
                            <img src="{{ asset('goldevine/images/tree.png') }}" class="img-fluid">
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Raised:</span>
                            <span>{{ persentage($project->id) }}%</span>
                        </div>
                        <div class="progress rounded-0 mb-2">
                            <div class="progress-bar rounded-0" role="progressbar"
                                style="width:{{ persentage($project->id) }}%" aria-valuenow="75" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <span><strong>Goal: ${{ number_format($project->project_funding_goal) }}</strong></span>
                        </div>
                        <div class="backers d-flex">
                            <div class="backers-number me-5 mx-2">
                                <span><strong>${{ number_format(totalamout($project->id)) }}</strong></span>
                                <span>Pledged</span>
                            </div>
                            <div class="backers-number me-5">
                                <span><strong>{{ number_format(donation($project->id)) }}</strong></span>
                                <span>Backers</span>
                            </div>
                            <div class="backers-number">
                                <span><strong>{{ leftdays($project->id) }}</strong></span>
                                <span>Days Left</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="goldevine-project-details-page product-section mb-4">
            <div class="container">
                <h2 class="mb-2">Benefits</h2>
                <div class="project-page-slider mb-5 pb-lg-3">
                    {{-- <div>
                        <div class="product-item">
                            <div class="diamond-img-holder mb-3">
                                <span>Diamond Donor</span>
                            </div>
                            <div class="img-holder">
                                <img src="images/product-img.png" class="img-fluid">
                            </div>
                            <div class="txt-holder">
                                <p>[Benefit Short Discription] Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="d-flex flex-column mb-2">
                                    <span><strong>August, 23</strong></span>
                                    <span>Estimated Delivery</span>
                                </div>
                                <p class="mb-2 color-saceem"><span class="fa_user"><i class="fa fa-user-circle-o me-2"
                                            aria-hidden="true"></i></span># Backers</p>
                                <p class="m-0 color-saceem"><Span class=""><i class="fa fa-shield me-2"
                                            aria-hidden="true"></i></Span>10, 000 benefits left</p>
                            </div>
                            <button class="btn btn-primary text-uppercase select-benefits">Select Benefit</button>
                        </div>
                    </div> --}}

                    @foreach ($project->projectBenefits as $benefit)
                        <div>
                            <div class="product-item">
                                <div class="gold-img-holder mb-3">
                                    <span>{{ $benefit->benefit_name }}</span>
                                    <span>${{ number_format($benefit->price) }}</span>
                                </div>
                                <div class="img-holder">
                                    <img src="{{ $benefit->feature_image }}"
                                        onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <p>{{ Str::words($benefit->short_description, 20, '...') }}</p>
                                    <div class="d-flex flex-column mb-2">
                                        <span><strong>{{ isset($benefit->estimated_delivery_date) ? $benefit->estimated_delivery_date->format('F d') : '' }}</strong></span>
                                        <span>Estimated Delivery</span>
                                    </div>
                                    <p class="mb-2 color-saceem"><span class="fa_user"><i class="fa fa-user-circle-o me-2"
                                                aria-hidden="true"></i></span>{{ backer($benefit->id) }} Backers</p>
                                    <p class="m-0 color-saceem"><Span class=""><i class="fa fa-shield me-2"
                                                aria-hidden="true"></i></Span>10, 000 benefits left</p>
                                </div>
                                <a href="{{ route('projectcheckout', $benefit->id) }}"
                                    class="btn btn-primary text-uppercase select-benefits">Select Benefit</a>
                            </div>
                        </div>
                    @endforeach



                </div>
                <div class="details-page-section-2 mb-5 pb-lg-3">
                    <div class="btn-groups mb-2">
                        <button class="btn btn-primary mb-1 select-benefits">Backgrounds</button>
                        <button class="btn btn-primary mb-1 select-benefits">FAQs</button>
                        <button class="btn btn-primary mb-1 select-benefits">Updates</button>
                        <button class="btn btn-primary mb-1 select-benefits">Comments</button>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h2>A Closer Look</h2>
                            <p>
                                {!! $project->description !!}
                            </p>
                        </div>
                    </div>
                    <h2 class="text-center mb-3">More Gold Vine Projects</h2>
                    <div class="project-page-slider mb-5 pb-lg-3">
                        @foreach ($randdomprojects as $randdomproject)
                            <div>
                                <div class="product-item border rounded">
                                    <div class="img-holder mb-3">
                                        <img src="{{ $randdomproject->feature_image }}"
                                            onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                    </div>
                                    <div class="txt-holder p-3">
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <span class="me-2"><a
                                                    class="btn btn-primary btn-sm rounded-0 py-1 px-2" href="{{ route('projectDetail', ['id' => $randdomproject->id, 'slug' => $randdomproject->slug]) }}">HOSPITALITY</a></span>
                                            <span class="me-2"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                            <span>{{ leftdays($randdomproject->id) }} Days Left</span>
                                        </div>
                                        <div class="d-flex flex-column mb-4">
                                            <span><strong>Cheap Test Project {{ totalproject($randdomproject->user_id) }}</strong></span>
                                        </div>
                                        <p class="present-project mb-2">Present Project: {{ isset($randdomproject->user->userDetails->name ) ? $randdomproject->user->userDetails->name :''  }} </p>
                                        <div class="d-flex justify-content-between">
                                            <span>Raised:${{ number_format(totalamout($randdomproject->id)) }}</span>
                                            <span>{{ persentage($randdomproject->id) }}%</span>
                                        </div>
                                        <div class="progress rounded-0 mb-2">
                                            <div class="progress-bar rounded-0" role="progressbar" style="width: {{  persentage($randdomproject->id) }}%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex flex-column mb-2">
                                            <span><strong>Goal: ${{ $randdomproject->project_funding_goal  }}</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <div class="street-img">
                <img src="{{ asset('images/img1.png') }}" class="img-fluid">
            </div>
        </div>
    @endsection
