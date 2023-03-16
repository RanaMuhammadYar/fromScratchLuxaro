@extends('frontend.layouts.app')
@section('content')
<div class="inner-content">
            <div class="about-banner py-5">
                    <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb" class="d-flex justify-content-center align-items-center pb-1">
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
			<footer id="footer">
				<div class="container">
					<div class="footer-holder py-5">
						<div class="row">
							<div class="col-12 col-md-3 mb-3">
								<div class="footer-logo mb-3">
									<a href="javascript:void"><img src="images/logo.png" width="120" class="img-fluid"></a>
								</div>
								<p class="mb-3 w-75">Lorem Ipsum dummy text of the printing typsting industry, lorem ipsum</p>
								<a class="btn btn-sm btn-learn rounded-0 mb-3" href="javascript:void">Learn More</a>
							</div>
							<div class="col-12 col-md-3 mb-3">
								<strong class="title d-block mb-4">Footer Menulist-1</strong>
								<ul class="m-0">
									<li><a href="javascript:void">About Us</a></li>
									<li><a href="javascript:void">FAQs</a></li>
									<li><a href="javascript:void">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-12 col-md-3 mb-3">
								<strong class="title d-block mb-4">Footer Menulist-2</strong>
								<ul class="m-0">
									<li><a href="javascript:void">Login</a></li>
									<li><a href="javascript:void">Register</a></li>
								</ul>
							</div>
							<div class="col-12 col-md-3 mb-3">
								<div>
									<strong class="title d-inline-block mb-3 border-bottom">Social Icons</strong>
									<ul class="list-unstyled m-0 p-0 d-flex align-items-center social-icons">
										<li><a href="javascript:void"><i class="fa fa-facebook"></i></a></li>
										<li><a href="javascript:void"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="javascript:void"><i class="fa fa-youtube"></i></a></li>
										<li><a href="javascript:void"><i class="fa fa-instagram"></i></a></li>
										<li><a href="javascript:void"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a href="javascript:void"><i class="fa fa-google"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="footer-bottom py-4 d-flex justify-content-between">
						<span>Copyright @ 2022 <a href="javascript:void">Luxauro.</a> All rights reserved.</span>
						<ul class="list-unstyled m-0 p-0 d-flex">
							<li class="me-3"><a class="text-white" href="javascript:void">Terms & Condition</a></li>
							<li><a class="text-white" href="javascript:void">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</footer>
        </div>
@endsection