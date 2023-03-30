@extends('frontend.layouts.app')
@section('content')
<div class="section-product-charter merchant-account-1">
    <div class="container">
        <div class="row col-lg-10 mx-auto gx-5">
            <div class="col-12 col-md-5 gx-0 gx-md-5 px-md-5">
                @include('frontend.include.sidebar')
            </div>
            <div class="col-12 col-md-7 gx-0 gx-md-1 gx-lg-5 px-lg-5 py-3">
                <div class="my-account-section">
                     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                         <h2 class="mb-2 setup-merchant-heading">Luxauro Merchant Application Account <span class="pagecheck">(1/2)</span></h2>
                       <li class="nav-item" role="presentation">
                         <button class="nav-link active me-3" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" onclick="checkpage1()">Business Information</button>
                       </li>
                       <li class="nav-item" role="presentation">
                         <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="checkpage2()">Business Details</button>
                       </li>
                     </ul>
                     <div class="tab-content" id="pills-tabContent">
                       <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          <div class="my-account-section business-information">
                             <form>
                                 <div class="mb-3">
                                     <label for="" class="form-label mb-0">Business Name</label>
                                     <input type="text" class="form-control">
                                     <div class="pincel"></div>
                                   </div>
                                   <div class="mb-3">
                                     <label class="uploadFile border rounded">
                                         <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                         <span class="filename">Upload Business Logo</span>
                                         <input type="file" class="inputfile form-control" name="file" >
                                     </label>
                                   </div>
                                   <div class="mb-3">
                                     <label class="uploadFile border rounded">
                                         <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                         <span class="filename">Upload Your Store Header</span>
                                         <input type="file" class="inputfile form-control" name="file" >
                                       </label>
                                   </div>
                                   <div class="mb-3">
                                         <label for="" class="form-label mb-0">Business Adress</label>
                                         <input type="text" class="form-control">
                                         <div class="pincel"></div>
                                   </div>
                                   <div class="row gx-2 mb-0 mb-md-3">
                                     <div class="col-12 col-md-6 mb-3 mb-md-0">
                                         <label for="" class="form-label mb-0">City</label>
                                         <input type="text" class="form-control">
                                         <div class="pincel"></div>
                                     </div>
                                     <div class="col-12 col-md-3 mb-3 mb-md-0">
                                         <label for="">State</label>
                                         <select class="form-select">
                                             <option></option>
                                             <option>1</option>
                                             <option>2</option>
                                         </select>
                                     </div>
                                     <div class="col-12 col-md-3 mb-3 mb-md-0">
                                         <label for="" class="form-label mb-0">Zip Code</label>
                                         <input type="text" class="form-control">
                                         <div class="pincel"></div>
                                     </div>
                                   </div>
                                   <div class="mb-3">
                                         <label for="">Country</label>
                                         <select class="form-select">
                                             <option></option>
                                             <option>Country 1</option>
                                             <option>Country 2</option>
                                         </select>
                                     </div>
                                     <div class="mb-3">
                                         <label for="" class="form-label mb-0">Business Email</label>
                                         <input type="email" class="form-control">
                                         <div class="pincel"></div>
                                     </div>
                                     <div class="mb-3">
                                         <label for="" class="form-label mb-0">Business Website</label>
                                         <input type="text" class="form-control">
                                         <div class="pincel"></div>
                                     </div>
                                     <div class="mb-3">
                                         <label for="" class="form-label mb-0">Business Phone</label>
                                         <input type="text" class="form-control" placeholder="xxx-xxx-xxxx">
                                         <div class="pincel"></div>
                                     </div>
                                     <div class="row gx-3 mb-0 mb-md-3">
                                         <div class="col-12 col-md-6 mb-3 mb-md-0">
                                             <label for="" class="form-label mb-0">EIN / TIN</label>
                                             <input type="text" class="form-control" placeholder="xx-xxxxxxx">
                                             <div class="pincel"></div>
                                         </div>
                                         <div class="col-12 col-md-6 mb-3 mb-md-0">
                                             <label for="" class="form-label mb-0">Bank Account Number</label>
                                             <input type="text" class="form-control">
                                             <div class="pincel"></div>
                                         </div>
                                     </div>
                                     <div class="mb-3">
                                         <label for="" class="form-label mb-0">Credit Card Number</label>
                                         <input type="text" class="form-control" >
                                         <div class="pincel"></div>
                                     </div>
                                     <button class="btn btn-primary text-uppercase">Cancel</button>
                                     <button class="btn btn-primary text-uppercase">Next</button>
                             </form>
                         </div>
                       </div>
                       <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                             <form>
                                   <div class="form-outline mb-3">
                                     <label for="" class="form-label mb-0">Description / About Us</label>
                                     <textarea class="form-control" id="textAreaExample6" rows="2"></textarea>
                                   </div>
                                   <div class="mb-3">
                                     <label for="">What kind of business do you run?</label>
                                     <select class="form-select">
                                         <option></option>
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
                                   <div class="row gx-4 mb-0 mb-md-3 align-items-end">
                                     <div class="col-12 col-md-8 mb-3 mb-md-0">
                                         <label for="" class="form-label mb-0">Social Media Link <span class="optional">Optional</span></label>
                                         <input type="text" class="form-control">
                                         <div class="pincel"></div>
                                     </div>
                                     <div class="col-12 col-md-4 mb-3 mb-md-0">
                                         <button class="btn btn-primary add-more-width" type="button"><span><i
                                             class="fa fa-plus me-2"
                                             aria-hidden="true"></i></span>Add More</button>
                                     </div>
                                   </div>
                                   <div class="mb-3"><h3>Meet the team: <span class="optional">Optional</span></h3>
                                     <div class="row gx-4 mb-0 mb-md-3 align-items-end">
                                         <div class="col-12 col-md-8 mb-3 mb-md-0">
                                             <label for="" class="form-label mb-0">Owner Name-1</label>
                                             <input type="text" class="form-control">
                                         </div>
                                         <div class="col-12 col-md-4 mb-3 mb-md-0">
                                             <label class="uploadFile">
                                                 <i class="fa fa-cloud-upload upload-icon" aria-hidden="true"></i>
                                                 <span class="filename">Upload Image</span>
                                                 <input type="file" class="inputfile form-control" name="file" >
                                               </label>
                                         </div>
                                       </div>

                                     <div class="mb-3">
                                         <button class="btn btn-primary" type="button"><span><i
                                         class="fa fa-plus me-2"
                                         aria-hidden="true"></i></span>Add More</button>
                                     </div>
                                     <div class="mb-3">
                                         <div class="form-outline mb-3">
                                             <label for="" class="form-label mb-0">Introduce The Owners <span class="optional">Optional</span></label>
                                             <textarea class="form-control" id="textAreaExample6" rows="2"></textarea>
                                         </div>
                                     </div>
                                     <div class="row gx-4 mb-0 mb-md-3 align-items-end">
                                         <div class="col-12 col-md-8 mb-3 mb-md-0">
                                             <label for="" class="form-label mb-0">Team Memeber Name-1</label>
                                             <input type="text" class="form-control">
                                         </div>
                                         <div class="col-12 col-md-4 mb-3 mb-md-0">
                                             <label class="uploadFile">
                                                 <i class="fa fa-cloud-upload upload-icon" aria-hidden="true"></i>
                                                 <span class="filename">Upload Image</span>
                                                 <input type="file" class="inputfile form-control" name="file" >
                                               </label>
                                         </div>
                                       </div>

                                       <div class="mb-3">
                                         <button class="btn btn-primary" type="button"><span><i
                                         class="fa fa-plus me-2"
                                         aria-hidden="true"></i></span>Add More</button>
                                     </div>

                                     <div class="mb-3">
                                         <div class="form-outline mb-3">
                                             <label for="" class="form-label mb-0">History <span class="optional">Optional</span></label>
                                             <textarea class="form-control" id="textAreaExample6" rows="2"></textarea>
                                         </div>
                                     </div>
                                     <div class="mb-3">
                                         <div class="form-outline mb-3">
                                             <label for="" class="form-label mb-0">Ethic <span class="optional">Optional</span></label>
                                             <textarea class="form-control" id="textAreaExample6" rows="2"></textarea>
                                         </div>
                                     </div>
                                     <div class="mb-3">
                                         <div class="form-outline mb-3">
                                             <label for="" class="form-label mb-0">Philosophy <span class="optional">Optional</span></label>
                                             <textarea class="form-control" id="textAreaExample6" rows="2"></textarea>
                                         </div>
                                     </div>
                                     <button class="btn btn-primary text-uppercase">Cancel</button>
                                     <button class="btn btn-primary text-uppercase">submit for review</button>
                             </form>
                         </div>
                     </div>
                </div>
             </div>





            {{-- <div class="col-12 col-md-7 gx-0 gx-md-1 gx-lg-5 px-lg-5">
                <div class="my-account-section">
                    <h2>Setup Your Merchant Account (1/2)</h2>
                    <div class="mb-2"><strong>Business Information</strong></div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Name</label>
                            <input type="text" required name="business_name" class="form-control">
                            <div class="pincel"></div>
                        </div>
                        <div class="mb-3">
                            <label class="uploadFile border rounded">
                                <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                <span class="filename">Upload Business Logo</span>
                                <input type="file" name="business_logo" class="inputfile form-control" required>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label class="uploadFile border rounded">
                                <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                <span class="filename">Upload Your Store Header</span>
                                <input type="file" class="inputfile form-control" name="store_header" required>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Adress</label>
                            <input type="text" required name="business_address" class="form-control">
                            <div class="pincel"></div>
                        </div>
                        <div class="mb-3">
                            <label for="">Country</label>
                            <select class="form-select" name="country" id="country_id">
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                             @endforeach
                            </select>
                        </div>
                        <div class="row gx-2 mb-0 mb-md-3">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="" class="form-label mb-0">City</label>
                                <select id="city-id" class="form-control" name="city">
                                </select>
                                <div class="pincel"></div>
                            </div>
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <label for="">State</label>
                                <select class="form-select" name="state" id="state-id">
                                </select>
                            </div>
                            <div class="col-12 col-md-3 mb-3 mb-md-0">
                                <label for="" class="form-label mb-0">Zip Code</label>
                                <input type="text" required name="zip_code" class="form-control">
                                <div class="pincel"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Email</label>
                            <input type="email" name="business_email" class="form-control">
                            <div class="pincel"></div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Website</label>
                            <input type="text" required name="business_website" class="form-control">
                            <div class="pincel"></div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Business Phone</label>
                            <input type="text" required name="business_phone" class="form-control" placeholder="xxx-xxx-xxxx">
                            <div class="pincel"></div>
                        </div>
                        <div class="row gx-3 mb-0 mb-md-3">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="" class="form-label mb-0">EIN</label>
                                <input type="text" required class="form-control" name="ein" placeholder="xx-xxxxxxx">
                                <div class="pincel"></div>
                            </div>
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <label for="" class="form-label mb-0">Bank Account Number</label>
                                <input type="text" required name="bank_account_number" class="form-control">
                                <div class="pincel"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label mb-0">Credit Card Number</label>
                            <input type="text" required name="credit_card_number" class="form-control">
                            <div class="pincel"></div>
                        </div>
                        <button class="btn btn-primary text-uppercase">Cancel</button>
                        <button class="btn btn-primary text-uppercase" type="submit">Next</button>
                    </form>
                </div>
            </div> --}}



        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var country_id = `{{ @$user->country }}`;
        var state_id = `{{ @$user->state }}`;
        var city_id = `{{ @$user->city }}`;
        if (country_id) {
            var idCountry = country_id;
            $("#state-id").html('');
            $.ajax({
                url: "{{url('api/fetch-states')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#state-id').html('<option value="">Select State</option>');
                    $.each(result.states, function(key, value) {
                        if (value.id == state_id) {
                            $("#state-id").append('<option value="' + value
                                .id + '" selected>' + value.name + '</option>');
                        } else {
                            $("#state-id").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        }

                    });
                    $('#city-id').html('<option value="">Select City</option>');
                }
            });
        }
        if (state_id) {
            var idState = state_id;
            $("#city-id").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#city-id').html('<option value="">Select City</option>');
                    $.each(res.cities, function(key, value) {
                        if (value.id == city_id) {
                            $("#city-id").append('<option value="' + value
                                .id + '" selected>' + value.name + '</option>');
                        } else {
                            $("#city-id").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        }

                    });
                }
            });
        }
        $('#country_id').on('change', function() {
            var idCountry = this.value;
            $("#state-id").html('');
            $.ajax({
                url: "{{url('api/fetch-states')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#state-id').html('<option value="">Select State</option>');
                    $.each(result.states, function(key, value) {
                        $("#state-id").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#city-id').html('<option value="">Select City</option>');
                }
            });
        });
        $('#state-id').on('change', function() {
            var idState = this.value;
            $("#city-id").html('');
            $.ajax({
                url: "{{url('api/fetch-cities')}}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#city-id').html('<option value="">Select City</option>');
                    $.each(res.cities, function(key, value) {
                        $("#city-id").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });


    function checkpage2()
    {
        alert();
    }
</script>
@endsection
