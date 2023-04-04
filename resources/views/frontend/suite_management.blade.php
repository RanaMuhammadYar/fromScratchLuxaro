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
                                        <div class="d-inline-block mb-2" style="color: #6a6969;">
                                            Business Name
                                        <div class="pincel in-edit" id="edit-button"></div></div>
                                         <input class="border-0 text-edit bg-transparent d-block fw-bold" type="text" id="edit"  value="My New Business" disabled >

                                    </div>
                                    <div class="business-logo mb-3">
                                        <div class="d-block mb-3" style="color: #6a6969;">Business Logo </div>
                                            <div class="my-business-logo-image ms-2">
                                                <div class="business-logo-image">
                                                    <img src="{{ asset('images/default.png') }}" class="img-fluid" width="50px;">
                                                </div>
                                                <div class="upload-logo"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                                            </div>
                                    </div>
                                    <div class="business-header mb-3">
                                        <div class="d-block mb-3" style="color: #6a6969;">Store Header </div>
                                        <div class="border d-inline-block rounded">
                                            <div class="my-business-banner d-flex p-1">
                                                <div class="business-banner">
                                                    <img src="images/banner.png" class="img-fluid " width="50px;">
                                                </div>
                                                <div class="upload-logos "><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="business-address business-section mb-3">
                                        <div class="d-inline-block mb-2" style="color: #6a6969;">Business Address <div class="pincel e-adress"></div></div>
                                        <input type="text" class="w-100 ms-2 text-adress fw-bold d-block border-0" value="123 Business Avenue Fake Town, FT 99999 United State of America" disabled>
                                    </div>
                                    <div class="business-address business-section mb-3">
                                        <div class="d-inline-block mb-2" style="color: #6a6969;">Business Email <div class="pincel b-email "></div></div>
                                        <input type="text" class=" w-100 ms-2 text-email fw-bold d-block border-0"value="info@mynewbusiness.com" disabled>
                                    </div>
                                    <div class="business-address business-section mb-3">
                                        <div class="d-inline-block mb-2" style="color: #6a6969;">Business Website <div class="pincel b-website"></div></div>
                                        <input type="text" class="w-100 ms-2 text-website fw-bold d-block border-0"value="mynewbusiness.com" disabled>
                                    </div>
                                     <div class="business-address business-section mb-3">
                                        <div class="d-inline-block mb-2" style="color: #6a6969;">Business Phone <div class="pincel b-number"></div></div>
                                         <input type="text" class="ms-2 text-number fw-bold d-block border-0"value="123-456-7890" disabled>

                                    </div>
                                     <div class="business-address business-section mb-3">
                                        <div class="d-inline-block mb-2" style="color: #6a6969;">EIN / TIN<div class="pincel ein-tin"></div></div>
                                        <input type="text" class="ms-2 text-ein fw-bold d-block border-0"value="12-3456789" disabled>
                                    </div>
                                    <div class="business-address business-section mb-3">
                                        <div class="d-inline-block mb-2" style="color: #6a6969;">Deposit Bank Account <div class="pincel bank-account"></div></div>
                                        <input type="text" class="ms-2 text-bank-account fw-bold d-block border-0"value="123456789" disabled>
                                    </div>
                                    <div class="business-address business-section mb-3">
                                        <div class="d-inline-block mb-2" style="color: #6a6969;">Credit Card Number <div class="pincel credit-account"></div></div>
                                         <input type="text" class="ms-2 text-credit-account fw-bold d-block border-0"value="1234 5678 9876 5432" disabled>
                                    </div>
                                    <button class="btn btn-primary text-uppercase">Cancel</button>
                                    <button class="btn btn-primary text-uppercase">Save</button>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                 <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Description / About Us<div class="pincel about-us"></div></div>
                                     <input type="text" class="ms-2 text-about-us fw-bold d-block border-0 w-100"value="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod." disabled>
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
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Social Media Link <div class="pincel social-media"></div></div>
                                     <input type="text" class="ms-2 mb-2 text-social-media fw-bold d-block border-0 w-100"value="socialmedia.com/username123/profile" disabled>
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
                                    <div class="d-inline-block mb-0" style="color: #6a6969;">Owner Name-1 <div class="pincel jhon-smith-2"></div></div>
                                    <input type="text" class="ms-2 text-john-smith fw-bold d-block border-0 w-100"value="John Smith" disabled>
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
                                        <div class="d-inline-block mb-0" style="color: #6a6969;">Owner Name-1 <div class="pincel john-public"></div></div>
                                         <input type="text" class="ms-2 text-john-public fw-bold d-block border-0 w-100"value="John Q.Public" disabled>
                                    </div>
                                 </div>
                             </div>
                              <div class="mb-3">
                                <button class="btn btn-primary" type="button"><span><i
                                class="fa fa-plus me-2"
                                aria-hidden="true"></i></span>Add More</button>
                            </div>
                            <div class="business-address business-section mb-3">
                                <div class="d-inline-block mb-2" style="color: #6a6969;">Introduce the Owner<div class="pincel the-owner"></div></div>
                                <input type="text" class="ms-2 text-the-owner fw-bold d-block border-0 w-100"value="Lorem ipsum dolor sit amet, consectetur adipisicing elit," disabled>
                            </div>
                             <div class="owner-name">
                                 <div class="my-account-image">
                                    <div class="account-image">
                                        <img src="images/user.png" class="img-fluid w-100">
                                    </div>
                                    <div class="upload-logo"><i class="fa fa-cloud-upload" aria-hidden="true"></i></div>
                                 </div>
                                  <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-0" style="color: #6a6969;">Owner Name-1 <div class="pincel john-smith-1"></div></div>
                                     <input type="text" class="ms-2 text-john-smith-1 fw-bold d-block border-0 w-100"value="John Smith" disabled>
                                 </div>
                                 <div class="mb-3">
                                <button class="btn btn-primary" type="button"><span><i
                                class="fa fa-plus me-2"
                                aria-hidden="true"></i></span>Add More</button>
                                </div>
                                </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">History <div class="pincel history"></div></div>
                                    <input type="text" class="ms-2 text-history fw-bold d-block border-0 w-100"value="Lorem ipsum dolor sit amet, consectetur adipisicing elit," disabled>
                                </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Ethics <div class="pincel ethics-1"></div></div>
                                    <input type="text" class="ms-2 text-ethics fw-bold d-block border-0 w-100"value="Lorem ipsum dolor sit amet, consectetur adipisicing elit," disabled>
                                </div>
                                <div class="business-address business-section mb-3">
                                    <div class="d-inline-block mb-2" style="color: #6a6969;">Philosophy <div class="pincel philosophy"></div></div>
                                    <input type="text" class="ms-2 text-philosophy fw-bold d-block border-0 w-100"value="Lorem ipsum dolor sit amet, consectetur adipisicing elit," disabled>
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
            <img src="{{ asset('images/img1.png') }}" class="img-fluid">
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function(){


    $('.in-edit').on('click', function(){
  var $textEdit = $('.text-edit');
  if ($textEdit.prop('disabled')) {
    $textEdit.prop('disabled', false).focus();
    var val = $textEdit.val();
    $textEdit.val('').val(val);
  } else {
    $textEdit.prop('disabled', true);
  }
});

    $('.e-adress').on('click', function(){
      var $textEdit = $('.text-adress');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
        $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

$('.b-email').on('click', function(){
  var $textEdit = $('.text-email');
  if ($textEdit.prop('disabled')) {
    $textEdit.prop('disabled', false).focus();
    var val = $textEdit.val();
    $textEdit.val('').val(val);
  } else {
    $textEdit.prop('disabled', true);
  }
});

    $('.b-website').on('click', function(){
      var $textEdit = $('.text-website');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

    $('.b-number').on('click', function(){
      var $textEdit = $('.text-number');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

    $('.ein-tin').on('click', function(){
      var $textEdit = $('.text-ein');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

    $('.bank-account').on('click', function(){
      var $textEdit = $('.text-bank-account');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

     $('.credit-account').on('click', function(){
      var $textEdit = $('.text-credit-account');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

      $('.about-us').on('click', function(){
      var $textEdit = $('.text-about-us');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

       $('.social-media').on('click', function(){
      var $textEdit = $('.text-social-media');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

       $('.jhon-smith-2').on('click', function(){
      var $textEdit = $('.text-john-smith');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

    $('.john-public').on('click', function(){
      var $textEdit = $('.text-john-public');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

     $('.the-owner').on('click', function(){
      var $textEdit = $('.text-the-owner');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

     $('.john-smith-1').on('click', function(){
      var $textEdit = $('.text-john-smith-1');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

     $('.history').on('click', function(){
      var $textEdit = $('.text-history');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

     $('.ethics-1').on('click', function(){
      var $textEdit = $('.text-ethics');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

     $('.philosophy').on('click', function(){
      var $textEdit = $('.text-philosophy');
      if ($textEdit.prop('disabled')) {
        $textEdit.prop('disabled', false).focus();
        var val = $textEdit.val();
    $textEdit.val('').val(val);
      } else {
        $textEdit.prop('disabled', true);
      }
    });

  });

    </script>
@endsection
