@extends('frontend.goldevine.layouts.app')
@section('title')
    <title>GoldEvine Project</title>
@endsection
@section('content')
    <div class="inner-content mt-5 pt-5">
        <div class="wrap-parent-slider  mb-5 ">
            <div class="wrap">
                <div class="container">
                    <div class="slider-wrap ">
                        @foreach ($allprojects as $allproject)
                            <div class="item">
                                <img src="{{ $allproject->image }}" onerror="this.src='{{ asset('images/default.png') }}'"
                                    class="img-fluid" alt="">
                                <div class="card-item-text">
                                    <div class="txt-holder">
                                        <strong class="title text-center d-block mb-2">Project Title</strong>
                                        <div class="progress rounded-0 mb-1">
                                            <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>sX.XXX raised</span>
                                            <span>XX%</span>
                                        </div>
                                        <p class="mb-2"># donations</p>
                                        <p class="m-0">{!! Str::limit($allproject->description, 20, ' ...') !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="product-section project-page-mockup mb-4 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Newest [Catogery] Projects</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option></option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider gold-evine-slider">
                    @foreach ($newprojects as $newproject)
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="{{ $newproject->image }}"
                                        onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <strong class="title text-center d-block mb-2">{!! Str::limit($allproject->title, 20, ' ...') !!}</strong>
                                    <div class="progress rounded-0 mb-1">
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>sX.XXX raised</span>
                                        <span>XX%</span>
                                    </div>
                                    <p class="mb-2"># donations</p>
                                    <p class="m-0">{!! Str::limit($allproject->description, 20, ' ...') !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="product-section project-page-mockup mb-4 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">Trending [Catogery] Projects</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option></option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider gold-evine-slider">
                    @foreach ($trandingProjects as $trendingproject)
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="{{ $trendingproject->image }}" onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <strong class="title text-center d-block mb-2">{!! Str::limit($allproject->title, 20, ' ...') !!}</strong>
                                    <div class="progress rounded-0 mb-1">
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>sX.XXX raised</span>
                                        <span>XX%</span>
                                    </div>
                                    <p class="mb-2"># donations</p>
                                    <p class="m-0">{!! Str::limit($allproject->description, 20, ' ...') !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="product-section gv-featured-projects project-page-mockup mb-5 pb-lg-2">
                <div class="container">
                    <div class="product-header d-flex flex-column flex-lg-row justify-content-center mb-4">
                        <h2 class="m-1 text-white pt-4">Featured Projects</h2>
                    </div>
                    <div class="gv-featured-project-slider ">
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="images/product-img.png" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <p class="mb-2"><strong>[Project Title]</strong></p>
                                    <p class="m-0">[Project tagline] lorem ipsum is simplsy elit</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="images/product-img.png" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <p class="mb-2"><strong>[Project Title]</strong></p>
                                    <p class="m-0">[Project tagline] lorem ipsum is simplsy elit</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="images/product-img.png" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <p class="mb-2"><strong>[Project Title]</strong></p>
                                    <p class="m-0">[Project tagline] lorem ipsum is simplsy elit</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="images/product-img.png" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <p class="mb-2"><strong>[Project Title]</strong></p>
                                    <p class="m-0">[Project tagline] lorem ipsum is simplsy elit</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="images/product-img.png" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <p class="mb-2"><strong>[Project Title]</strong></p>
                                    <p class="m-0">[Project tagline] lorem ipsum is simplsy elit</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="images/product-img.png" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <p class="mb-2"><strong>[Project Title]</strong></p>
                                    <p class="m-0">[Project tagline] lorem ipsum is simplsy elit</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="images/product-img.png" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <p class="mb-2"><strong>[Project Title]</strong></p>
                                    <p class="m-0">[Project tagline] lorem ipsum is simplsy elit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-section project-page-mockup mb-4 pb-lg-3">
                <div class="container">
                    <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                        <h2 class="m-0">Most Backed [Catogery] Projects</h2>
                        <div class="d-flex form-holder">
                            <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                            <form class="page-form flex-fill" action="#">
                                <div class="page-form-holder d-flex">
                                    <label class="form-control rounded-0">Search Filter</label>
                                    <div class="form-field d-flex flex-fill">
                                        <select class="flex-fill border-0 bg-transparent">
                                            <option></option>
                                            <option>All</option>
                                            <option>All</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="slider gold-evine-slider">
                        @foreach ($trandingProjects as $trendingproject)
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="{{ $trendingproject->image }}" onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <strong class="title text-center d-block mb-2">{!! Str::limit($allproject->title, 10, ' ...') !!}</strong>
                                    <div class="progress rounded-0 mb-1">
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>sX.XXX raised</span>
                                        <span>XX%</span>
                                    </div>
                                    <p class="mb-2"># donations</p>
                                    <p class="m-0">{!! Str::limit($allproject->description, 20, ' ...') !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                </div>
            </div>
            <div class="product-section project-page-mockup mb-4 pb-lg-3">
                <div class="container">
                    <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                        <h2 class="m-0">Nearly There! [Catogery] Projects</h2>
                        <div class="d-flex form-holder">
                            <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                            <form class="page-form flex-fill" action="#">
                                <div class="page-form-holder d-flex">
                                    <label class="form-control rounded-0">Search Filter</label>
                                    <div class="form-field d-flex flex-fill">
                                        <select class="flex-fill border-0 bg-transparent">
                                            <option></option>
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
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="progress-bar rounded-0" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
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
            <div class="merchant-banners mb-5">
                <div class="container-fluid p-md-5">
                    <div class="col-md-10 mx-auto">
                        <div class="merchant-banner-text">
                            <h3>(Banner ad for Luxauro, Goledvine, or BMG; easily changeable by admin)</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="street-img">
                <img src="{{ asset('images/img1.png') }}" class="img-fluid">
            </div>
        </div>
    @endsection
