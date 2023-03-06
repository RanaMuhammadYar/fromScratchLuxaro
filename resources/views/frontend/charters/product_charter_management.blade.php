@extends('frontend.layouts.app')
@section('content')
    <div class="section-product-charter">
        <div class="container">
            <div class="row col-lg-9 mx-auto gx-5">
                <div class="col-12 col-md-4 gx-0 gx-md-5">
                    @include('frontend.include.sidebar')
                </div>
                <div class="col-12 col-md-8 gx-0 gx-md-5">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Upload Product</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link mx-2 mx-md-3" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Charter Management</button>
                            <span class="mx-2 mx-md-3 mb-0 text-secondary text-font">You are offering something for
                                rent</span>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data"
                                id="choice_form">
                                @csrf
                                <div class="row gx-2">
                                    <div class="col-12 col-md-6">
                                        <label for="exampleInputEmail1">Charter Name</label>
                                        <input type="text" name="name" class="form-control mb-3 p-2"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="exampleInputPassword1">Charter Price</label>
                                        <input type="price" name="price" class="form-control mb-3 p-2"
                                            id="exampleInputPassword1">
                                    </div>
                                </div>
                                <div class="text-area">
                                    <label for="exampleInputPassword1">Product Description</label>
                                    <textarea class="form-control mb-4" name="description" placeholder="Message..." id="exampleFormControlTextarea1"
                                        rows="3"></textarea>
                                </div>
                                <input type="hidden" name="from_charter_side" value="from_charter_side">
                                <div class="mb-3">
                                    <label class="uploadFile border rounded">
                                        <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                        <span class="filename">Upload Product image</span>
                                        <input type="file" class="inputfile form-control" name="thumbnail_img">
                                    </label>
                                </div>

                                <label for="select-products">charter Type</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="type"
                                    id="select-products">
                                    <option selected></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="col-md-3 col-from-label">Tags</label>
                                        <input type="text" class="inputfile form-control" data-role="tagsinput"
                                            name="tags[]" placeholder="Type and hit enter to add a tag">
                                    </div>
                                </div>
                                <div class="input-groups mb-3">
                                    <label>Charter Category</label>
                                    <div class="input-type-check d-flex flex-wrap">
                                        @foreach ($charter_categories as $charter_category)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="charter_category_id[]" value="{{ $charter_category->id }}"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{ $charter_category->name }}
                                                </label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="input-groups mb-3">
                                    <label>Delivory Option</label>
                                    <div class="input-type-check d-flex flex-wrap">
                                        @foreach ($delivery_options as $delivery_option)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="delivery_option_id[]"
                                                    value="{{ $delivery_option->id }}" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {{ $delivery_option->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6">
                                        <label>Shipping Type</label>
                                        <div class="input-type-check d-flex flex-wrap pt-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="shipping_type[]"
                                                    value="1" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Within USA
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="shipping_type[]"
                                                    value="2" id="flexCheckChecked">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Out side USA
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label>Shipping Charge</label>
                                        <div class="input-group flex-nowrap w-50">
                                            <span class="input-group-text" id="addon-wrapping">$</span>
                                            <input type="text" class="form-control custom-input"
                                                name="shipping_charge" aria-label="Username"
                                                aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid d-lg-block">
                                    <button class="btn btn-primary my-2" type="button"><span><i class="fa fa-plus me-2"
                                                aria-hidden="true"></i></span>Add
                                        More</button>
                                    <button class="btn btn-primary mx-1 my-2" type="submit">Submit
                                        Product</button>
                                </div>
                            </form>
                        </div>


                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <form action="{{ route('charter_manage') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row gx-2">
                                    <div class="col-12 col-md-6">
                                        <label for="exampleInputEmail1">Charter Name</label>
                                        <input type="text" class="form-control mb-3 p-2" id="exampleInputEmail1"
                                            name="charter_name" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="row gx-2">
                                    <div class="col-12 col-md-6">
                                        <label for="exampleInputEmail1">Charter Type</label>
                                        <select class="form-select mb-3 py-2" aria-label="Default select example"
                                            name="charter_type" id="select-products">
                                            <option selected></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="exampleInputPassword1">Rate</label>
                                        <div class="row gx-2">
                                            <div class="col-12 col-md-6">
                                                <div class="input-group flex-nowrap mb-3">
                                                    <span class="input-group-text" id="addon-wrapping">$</span>
                                                    <input type="text" class="form-control custom-input py-2"
                                                        name="rate" aria-label="Username"
                                                        aria-describedby="addon-wrapping">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <select class="form-select mb-3 py-2" aria-label="Default select example"
                                                    id="select-products">
                                                    <option selected>HR</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-area">
                                        <label for="exampleInputPassword1">Charter Description</label>
                                        <textarea class="form-control mb-4" name="description" placeholder="Message..." id="exampleFormControlTextarea1"
                                            rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="uploadFile border rounded">
                                            <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                            <span class="filename">Upload charter Image</span>
                                            <input type="file" class="inputfile form-control" name="thumbnail_img">
                                        </label>
                                    </div>

                                    <div class="row gx-2">
                                        <div class="col-12 col-lg-6">
                                            <label>Date Of Avaliabilty</label>
                                            <div class="input-group mb-3">
                                                <input type="date" class="form-control" name="date_of_avalability"
                                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="button-addon2"><i class="fa fa-calendar"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="row gx-2">
                                                <label>Time Of Avaliabilty</label>
                                                <div class="col-12 col-md-6">
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-outline-secondary dropdown-toggle btn-font"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">AM</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">AM</a></li>
                                                            <li><a class="dropdown-item" href="#">PM</a></li>
                                                        </ul>
                                                        <input type="time" class="form-control" name="start_time"
                                                            aria-label="Text input with dropdown button">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-outline-secondary dropdown-toggle btn-font"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">PM</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">AM</a></li>
                                                            <li><a class="dropdown-item" href="#">PM</a></li>
                                                        </ul>
                                                        <input type="time" class="form-control" name="end_time"
                                                            aria-label="Text input with dropdown button">
                                                    </div>
                                                </div>
                                                <!-- <div class="d-grid d-md-flex justify-content-md-end mb-2">
                                                    <button class="btn btn-primary" type="button"><span><i
                                                                class="fa fa-plus me-2" aria-hidden="true"></i></span>Add
                                                        More</button>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-from-label">Tags</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="inputfile form-control"
                                                        data-role="tagsinput" name="tags[]"
                                                        placeholder="Type and hit enter to add a tag">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gx-3 mb-3">
                                            <div class="col-12 col-md-4">
                                                <label for="exampleInputEmail1">Max Guests/Travels</label>
                                                <select class="form-select py-2" name="max_guests"
                                                    aria-label="Default select example" id="select-products">
                                                    <option selected></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-8 align-self-end">
                                                <label>Delivory Option</label>
                                                <div class="input-type-check d-flex flex-wrap">
                                                    @foreach ($delivery_options as $delivery_option)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="delivery_id[]" value="{{ $delivery_option->id }}"
                                                                id="flexCheckDefault">
                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                {{ $delivery_option->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gx-2 align-items-baseline">
                                            <div class="col-12 col-md-4">
                                                <div class="input-type-check d-flex flex-wrap">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="terms_condition" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Term & Condition
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 mb-3">
                                                <label class="uploadFile border rounded">
                                                    <i class="fa fa-cloud-upload upload-icon-account-1"
                                                        aria-hidden="true"></i>
                                                    <span class="filename">Upload charter agreement</span>
                                                    <input type="file" class="inputfile form-control"
                                                        name="charter_agreement">
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid d-lg-block">
                                    <button class="btn btn-primary my-2" type="button"><span><i class="fa fa-plus me-2"
                                                aria-hidden="true"></i></span>Add
                                        More</button>
                                    <button class="btn btn-primary mx-1 my-2" type="submit">Submit
                                        Product</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
