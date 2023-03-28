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
<<<<<<< Updated upstream
                        @foreach ($allprojects as $allproject)
                            <div class="item" style="cursor:pointer">
                                <img src="{{ $allproject->feature_image }}"
                                    onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid" alt="">
                                <div class="card-item-text">
                                    <div class="txt-holder">
                                        <strong
                                            class="title text-center d-block mb-2">{{ Str::words($allproject->title, 7, '...') }}</strong>
                                        <div class="progress rounded-0 mb-1">
                                            <div class="progress-bar rounded-0" role="progressbar"
                                                style="width: {{ persentage($allproject->id) }}%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>$ {{ number_format(totalamout($allproject->id)) }} raised</span>
                                            <span>{{ persentage($allproject->id) }}%</span>
                                        </div>
                                        <p class="mb-2">{{ number_format(donation($allproject->id)) }} donations</p>
                                        <p class="m-0">{!! Str::limit($allproject->short_description, 70, ' ...') !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
=======
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1425342605259-25d80e320565?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="">
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
                                    <p class="m-0">Brief project description will go here... (10 words)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1489440543286-a69330151c0b?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="">
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
                                    <p class="m-0">Brief project description will go here... (10 words)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1490718687940-0ecadf414600?dpr=1&auto=format&fit=crop&w=568&h=378&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="">
                            <div class="overlay-icon">
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
                                        <p class="m-0">Brief project description will go here... (10 words)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1507032336878-13f159192baa?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="">
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
                                    <p class="m-0">Brief project description will go here... (10 words)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1506268919522-a927511962a9?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="">
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
                                    <p class="m-0">Brief project description will go here... (10 words)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1501879779179-4576bae71d8d?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="">
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
                                    <p class="m-0">Brief project description will go here... (10 words)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1494253188410-ff0cdea5499e?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="">
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
                                    <p class="m-0">Brief project description will go here... (10 words)</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="https://images.unsplash.com/photo-1511965682784-5ec68f744ea1?dpr=1&auto=format&fit=crop&w=568&h=319&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D"
                                alt="">
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
                                    <p class="m-0">Brief project description will go here... (10 words)</p>
                                </div>
                            </div>
                        </div>
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
>>>>>>> Stashed changes
                    </div>
                </div>
            </div>
        </div>
<<<<<<< Updated upstream

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
                            <a href="{{ route('projectDetail', ['id' => $newproject->id, 'slug' => $newproject->slug]) }}">

                                <div class="product-item">
                                    <div class="img-holder">
                                        <img src="{{ $newproject->feature_image }}"
                                            onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                    </div>
                                    <div class="txt-holder">
                                        <strong class="title text-center d-block mb-2">{!! Str::limit($newproject->title, 20, ' ...') !!}</strong>
                                        <div class="progress rounded-0 mb-1">
                                            <div class="progress-bar rounded-0" role="progressbar"
                                                style="width: {{ persentage($newproject->id) }}%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>${{ number_format(totalamout($newproject->id)) }} raised</span>
                                            <span>{{ persentage($newproject->id) }} %</span>
                                        </div>
                                        <p class="mb-2">{{ number_format(donation($newproject->id)) }} donations</p>
                                        <p class="m-0">{!! Str::limit($newproject->short_description, 25, ' ...') !!}</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    @endforeach

                </div>
            </div>
=======
        <div class="street-img">
            <img src="{{ asset('images/img1.png') }}" class="img-fluid">
>>>>>>> Stashed changes
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
                            <a href="{{ route('projectDetail', ['id' => $trendingproject->id, 'slug' => $trendingproject->slug]) }}">

                                <div class="product-item">
                                    <div class="img-holder">
                                        <img src="{{ $trendingproject->feature_image }}"
                                            onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                    </div>
                                    <div class="txt-holder">
                                        <strong class="title text-center d-block mb-2">{!! Str::limit($trendingproject->title, 20, ' ...') !!}</strong>
                                        <div class="progress rounded-0 mb-1">
                                            <div class="progress-bar rounded-0" role="progressbar"
                                                style="width: {{ persentage($trendingproject->id) }}%" aria-valuenow="75"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span> ${{ number_format(totalamout($trendingproject->id)) }} raised</span>
                                            <span>{{ persentage($trendingproject->id) }}%</span>
                                        </div>
                                        <p class="mb-2">{{ number_format(donation($trendingproject->id)) }} donations</p>
                                        <p class="m-0">{!! Str::limit($trendingproject->short_description, 20, ' ...') !!}</p>
                                    </div>
                                </div>
                            </a>

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
                        @foreach ($featuredProjects as $featuredProject)
                            <div>
                                <a href="{{ route('projectDetail', ['id' => $featuredProject->id, 'slug' => $featuredProject->slug]) }}">

                                    <div class="product-item">
                                        <div class="img-holder">
                                            <img src="{{ $featuredProject->feature_image }}"
                                                onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                        </div>
                                        <div class="txt-holder">
                                            <p class="mb-2">
                                                <strong>{{ Str::words($featuredProject->title, 5, '...') }}</strong>
                                            </p>
                                            <p class="m-0">
                                                {{ Str::words($featuredProject->short_description, 18, '...') }}
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endforeach
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
                                <a href="{{ route('projectDetail', ['id' => $trendingproject->id, 'slug' => $trendingproject->slug]) }}">

                                    <div class="product-item">
                                        <div class="img-holder">
                                            <img src="{{ $trendingproject->feature_image }}"
                                                onerror="this.src='{{ asset('images/default.png') }}'" class="img-fluid">
                                        </div>
                                        <div class="txt-holder">
                                            <strong class="title text-center d-block mb-2">{!! Str::limit($trendingproject->title, 10, ' ...') !!}</strong>
                                            <div class="progress rounded-0 mb-1">
                                                <div class="progress-bar rounded-0" role="progressbar"
                                                    style="width:{{ persentage($trendingproject->id) }}%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <span>${{ number_format(totalamout($trendingproject->id)) }} raised</span>
                                                <span>{{ persentage($trendingproject->id) }}%</span>
                                            </div>
                                            <p class="mb-2">{{ number_format(donation($trendingproject->id)) }}
                                                donations
                                            </p>
                                            <p class="m-0">{!! Str::limit($trendingproject->short_description, 25, ' ...') !!}</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="product-section project-page-mockup mb-4 pb-lg-3">
                    <div class="container">
                        <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                            <h2 class="m-0">Nearly There Projects</h2>
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
                            @foreach ($nearlythereProjects as $nearlythereproject)
                                <div>
                                    <a href="{{ route('projectDetail', ['id' => $nearlythereproject->id, 'slug' => $nearlythereproject->slug]) }}">

                                        <div class="product-item">
                                            <div class="img-holder">
                                                <img src="{{ $nearlythereproject->feature_image }}"
                                                    onerror="this.src='{{ asset('images/default.png') }}'"
                                                    class="img-fluid">
                                            </div>
                                            <div class="txt-holder">
                                                <strong
                                                    class="title text-center d-block mb-2">{{ Str::words($nearlythereproject->title, 2, '...') }}</strong>
                                                <div class="progress rounded-0 mb-1">
                                                    <div class="progress-bar rounded-0" role="progressbar"
                                                        style="width:{{ persentage($nearlythereproject->id) }}%"
                                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span>${{ number_format(totalamout($nearlythereproject->id)) }}
                                                        raised</span>
                                                    <span>{{ persentage($nearlythereproject->id) }}%</span>
                                                </div>
                                                <p class="mb-2">{{ number_format(donation($nearlythereproject->id)) }}
                                                    donations</p>
                                                <p class="m-0">
                                                    {{ Str::words($nearlythereproject->short_description, 4, '...') }}</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class=" mb-5">
                    <div class="container-fluid p-md-5">
                        <div class="col-md-10 mx-auto">
                            <div class="merchant-banner-text">
                                {{-- <h3>(Banner ad for Luxauro, Goledvine, or BMG; easily changeable by admin)</h3>
                                     --}}
                                     <img src="{{ banner()->image }}" onerror="this.src='{{ asset('images/default.png') }}'" alt="" width="100%">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="street-img">
                    <img src="{{ asset('images/img1.png') }}" class="img-fluid">
                </div>
            </div>
        @endsection
