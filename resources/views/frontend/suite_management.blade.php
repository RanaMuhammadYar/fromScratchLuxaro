@extends('frontend.layouts.app')
@section('content')
<div class="inner-content">
    <div class="section-product-charter">
        <div class="container">
            <div class="row col-lg-9 mx-auto gx-5">
                <div class="col-12 col-md-4 gx-0 gx-md-5">
                    @include('frontend.include.sidebar')
                </div>
                <div class="col-12 col-md-8 gx-0 gx-md-5 px-md-5">
                    <h2 class="mb-2" style="font-size: 22px; font-weight: 600;">Suite Management </h2>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Businss Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link mx-2 mx-md-3" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Businss Details</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="section-business-information">
                                <div class="business-name business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Business Name <div class="pincel "></div></div>
                                    <p class="ms-2">My New Business</p>
                                </div>
                                <div class="business-logo mb-3">
                                    <div class="d-block mb-3" style="color: #6a6969;">Business Logo </div>
                                        <div class="my-business-logo-image ms-2">  
                                            <div class="business-logo-image">
                                                <img src="images/about01.png" class="img-fluid w-100">
                                            </div>
                                            <div class="upload-logo"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                                        </div>
                                </div>
                                <div class="business-header mb-3">
                                    <div class="d-block mb-3" style="color: #6a6969;">Store Header </div>
                                    <div class="border d-inline-block rounded">
                                        <div class="my-business-banner d-flex p-1">  
                                            <div class="business-banner">
                                                <img src="images/banner.png" class="img-fluid w-100">
                                            </div>
                                            <div class="upload-logos "><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Business Address <div class="pincel "></div></div>
                                    <h5 class="ms-2">123 Business Avenue <br>
                                        Fake Town, FT 99999 <br>
                                        United State of America
                                    </h5>
                                </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Business Email <div class="pincel "></div></div>
                                    <h5 class="ms-2">info@mynewbusiness.com</h5>
                                </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Business Website <div class="pincel "></div></div>
                                    <h5 class="ms-2">mynewbusiness.com</h5>
                                </div>
                                 <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Business Phone <div class="pincel "></div></div>
                                    <h5 class="ms-2">123-456-7890</h5>
                                </div>
                                 <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">EIN / TIN<div class="pincel "></div></div>
                                    <h5 class="ms-2">12-3456789</h5>
                                </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Deposit Bank Account <div class="pincel "></div></div>
                                    <h5 class="ms-2">123456789</h5>
                                </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Credit Card Number <div class="pincel "></div></div>
                                    <h5 class="ms-2">1234 5678 9876 5432</h5>
                                </div>
                                <button class="btn btn-primary text-uppercase">Cancel</button>
                                <button class="btn btn-primary text-uppercase">Save</button>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                             <div class="business-address business-section mb-3">
                                <div class="d-inline-block mb-2" style="color: #6a6969;">Description / About Us<div class="pincel "></div></div>
                                <h5 class="ms-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</h5>
                            </div>
                            <div class="mb-3">
                                <label for="">What kind of business do you run?</label>
                                <select class="form-select">
                                    <option>Electronics</option>
                                    <option>business 1</option>
                                    <option>business 2</option>
                                </select>
                            </div>
                             <div class="input-groups mb-3">
                                <label>Where do you offer to deliver your product?</label>
                             <div class="input-type-check d-flex flex-wrap">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Global
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                   Limited International
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    National
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Limited Domestic
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Local Area
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Pickup
                                </label>
                              </div>
                            </div>
                            </div>
                            <div class="business-address business-section mb-3">
                                <div class="d-inline-block mb-2" style="color: #6a6969;">Social Media Link <div class="pincel "></div></div>
                                <h5 class="ms-2 mb-3">socialmedia.com/username123/profile</h5>
                                 <div class="mb-3">
                                    <button class="btn btn-primary" type="button"><span><i
                                    class="fa fa-plus me-2"
                                    aria-hidden="true"></i></span>Add More</button>
                                </div>
                            </div>
                             <div class="mb-3"><h3>Meet the team:</h3></div>
                             <div class="owner-flex d-flex">
                             <div class="owner-name">
                             <div class="my-account-image">
                                <div class="account-image">
                                    <img src="images/user.png" class="img-fluid w-100">
                                </div>
                                <div class="upload-logo"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                             </div>
                              <div class="business-address business-section mb-3">
                                <div class="d-inline-block mb-0" style="color: #6a6969;">Owner Name-1 <div class="pincel "></div></div>
                                <h5 class="ms-2">John Smith</h5>
                             </div>
                            </div>
                            <div class="owner-name ms-md-5 ms-4">
                             <div class="my-account-image">
                                <div class="account-image">
                                    <img src="images/user.png" class="img-fluid w-100">
                                </div>
                                <div class="upload-logo"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                            </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-0" style="color: #6a6969;">Owner Name-1 <div class="pincel "></div></div>
                                    <h5 class="ms-2">John Q.Public</h5>
                                </div>
                             </div>
                         </div>
                          <div class="mb-3">
                            <button class="btn btn-primary" type="button"><span><i
                            class="fa fa-plus me-2"
                            aria-hidden="true"></i></span>Add More</button>
                        </div>
                        <div class="business-address business-section mb-3">
                            <div class="d-inline-block mb-2" style="color: #6a6969;">Introduce the Owner<div class="pincel "></div></div>
                            <h5 class="ms-2">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</h5>
                        </div>
                         <div class="owner-name">
                             <div class="my-account-image">
                                <div class="account-image">
                                    <img src="images/user.png" class="img-fluid w-100">
                                </div>
                                <div class="upload-logo"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                             </div>
                              <div class="business-address business-section mb-3">
                                <div class="d-inline-block mb-0" style="color: #6a6969;">Owner Name-1 <div class="pincel "></div></div>
                                <h5 class="ms-2">John Smith</h5>
                             </div>
                             <div class="mb-3">
                            <button class="btn btn-primary" type="button"><span><i
                            class="fa fa-plus me-2"
                            aria-hidden="true"></i></span>Add More</button>
                            </div>
                            </div>
                            <div class="business-address business-section mb-3">
                                <div class="d-inline-block mb-2" style="color: #6a6969;">History <div class="pincel "></div></div>
                                <h5 class="ms-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</h5>
                            </div>
                            <div class="business-address business-section mb-3">
                                <div class="d-inline-block mb-2" style="color: #6a6969;">Ethics <div class="pincel "></div></div>
                                <h5 class="ms-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</h5>
                            </div>
                            <div class="business-address business-section mb-3">
                                <div class="d-inline-block mb-2" style="color: #6a6969;">Philosophy <div class="pincel "></div></div>
                                <h5 class="ms-2">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</h5>
                            </div>
                            <button class="btn btn-primary text-uppercase">Cancel</button>
                            <button class="btn btn-primary text-uppercase">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="street-img">
        <img src="images/img1.png" class="img-fluid">
    </div>
</div>
@endsection