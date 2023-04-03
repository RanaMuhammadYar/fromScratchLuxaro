@extends('frontend.layouts.app')
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />

    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }

        .bootstrap-tagsinput {
            width: 100%;
        }
    </style>
    <div class="section-product-charter">
        <div>
            <div class="row col-lg-12 mx-auto gx-5">
                <div class="col-12 col-md-4 gx-0 gx-md-5">
                    @include('frontend.include.sidebar')
                </div>
                <div class="col-12 col-md-8 gx-0 gx-md-5">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active me-3" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="true">Charter Management</button>
                            <span class="mb-0 text-secondary text-font">You are offering something for rent</span>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                                type="button" role="tab" aria-controls="pills-home" aria-selected="false">Upload
                                Charter</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form action="{{route('charter_manage')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row gx-2">
                                    <div class="col-12 col-md-6">
                                        <label for="exampleInputEmail1">Charter Name</label>
                                        <input type="text" class="form-control mb-3 p-2 @error('charter_name') is-invalid @enderror" id="exampleInputEmail1" name="charter_name" aria-describedby="emailHelp">
                                        @error('charter_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row gx-2">
                                    <div class="col-12 col-md-6">
                                        <label for="exampleInputEmail1">Charter Type</label>
                                        <select class="form-select mb-3 py-2" aria-label="Default select example" name="charter_type" id="select-products">
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
                                                    <input type="text" class="form-control custom-input py-2 @error('rate') is-invalid @enderror" name="rate" aria-label="Username" aria-describedby="addon-wrapping">
                                                    @error('rate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <select class="form-select mb-3 py-2" aria-label="Default select example" id="select-products">
                                                    <option selected>HR</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-area mb-3">
                                        <label for="exampleInputPassword1">Charter Description</label>
                                        <textarea class="form-control mb-4  @error('description') is-invalid @enderror" name="description" placeholder="Message..." id="exampleFormControlTextarea1" rows="3"></textarea>
                                        @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="uploadFile border rounded">
                                            <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                            <span class="filename">Upload charter Image</span>
                                            <input type="file" class="inputfile form-control @error('thumbnail_img') is-invalid @enderror" name="thumbnail_img">
                                            @error('thumbnail_img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </label>
                                    </div>
                               
                                    <div class="row gx-2">
                                        <div class="col-12 col-lg-6">
                                            <label>Date Of Avaliabilty</label>
                                            <div class="input-group mb-3">
                                                <input type="date" class="form-control @error('date_of_avalability') is-invalid @enderror" name="date_of_avalability" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-calendar" aria-hidden="true"></i></button>
                                                @error('date_of_avalability')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="row gx-2">
                                                <label>Time Of Avaliabilty</label>
                                                <div class="col-12 col-md-6">
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-outline-secondary dropdown-toggle btn-font" type="button" data-bs-toggle="dropdown" aria-expanded="false">AM</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">AM</a></li>
                                                            <li><a class="dropdown-item" href="#">PM</a></li>
                                                        </ul>
                                                        <input type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" aria-label="Text input with dropdown button">
                                                        @error('start_time')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="input-group mb-3">
                                                        <button class="btn btn-outline-secondary dropdown-toggle btn-font" type="button" data-bs-toggle="dropdown" aria-expanded="false">PM</button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">AM</a></li>
                                                            <li><a class="dropdown-item" href="#">PM</a></li>
                                                        </ul>
                                                        <input type="time" class="form-control @error('end_time') is-invalid @enderror" name="end_time" aria-label="Text input with dropdown button">
                                                        @error('end_time')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-grid d-md-flex justify-content-md-end mb-2">
                                                    <button class="btn btn-primary" type="button"><span><i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add More</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-from-label">{{translate('Tags')}}</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="inputfile form-control" data-role="tagsinput" name="tags[]" placeholder="{{ translate('Type and hit enter to add a tag') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gx-3 mb-3">
                                            <div class="col-12 col-md-4">
                                                <label for="exampleInputEmail1">Max Guests/Travels</label>
                                                <select class="form-select py-2" name="max_guests" aria-label="Default select example" id="select-products">
                                                    <option selected></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-8 align-self-end">
                                                <label>Delivory Option</label>
                                                <div class="input-type-check d-flex flex-wrap">
                                                    @foreach ($delivery_options as $delivery_option )
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="delivery_id[]" value="{{ $delivery_option->id }}" id="flexCheckDefault">
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
                                                        <input class="form-check-input" type="checkbox" name="terms_condition"  id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Term & Condition
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-8 mb-3">
                                                <label class="uploadFile border rounded">
                                                    <i class="fa fa-cloud-upload upload-icon-account-1" aria-hidden="true"></i>
                                                    <span class="filename">Upload charter agreement</span>
                                                    <input type="file" class="inputfile form-control" name="charter_agreement">
                                                </label>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid d-lg-block">
                                    <button class="btn btn-primary my-2" type="button"><span><i class="fa fa-plus me-2" aria-hidden="true"></i></span>Add
                                        More</button>
                                    <button class="btn btn-primary mx-1 my-2" type="submit">Submit
                                        Product</button>
                                </div>
    
                            </form>
                        </div>
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="charter-management-table table-responsive">
                                <table class="table table-bordered text-center" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Deposit</th>
                                            <th scope="col">Rate</th>
                                            {{-- <th scope="col">Day/Hr</th> --}}
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Date of Availabilty</th>
                                            <th scope="col" colspan="2">Time of Availabilty</th>
                                            <th scope="col">Tags</th>
                                            <th scope="col">Max Guests/ Travelers</th>
                                            {{-- <th scope="col">Service Offered As</th> --}}
                                            <th scope="col">Upload Charter Agreement</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($charters as  $key=>$charter)
                                        <tr>
                                            <th scope="row">{{ ++$key }}</th>
                                            <td>{{ $charter->charter_name }}</td>
                                            <td>{{ $charter->charter_type }}</td>
                                            <td>$50</td>
                                            <td>{{ $charter->rate }}</td>
                                            {{-- <td>Hr.</td> --}}
                                            <td>{{ $charter->description }}</td>
                                            <td>
                                                <img src="{{ uploaded_asset($charter->thumbnail_img)}}" alt="">
                                                <label class="uploadFile-table border rounded">
                                                    </label>
                                            </td>
                                            <td><i class="fa fa-calendar" aria-hidden="true">{{ $charter->date_of_avalability }} </i></td>
                                            <td>{{ $charter->start_time }}</td>
                                            <td>{{ $charter->end_time }}</td>
                                            <td>
                                                <div class="table-tag">
                                                    <ul class="list-unstyled mb-0">
                                                        @foreach (explode(',',$charter->tags) as $item)
                                                        <li>{{ $item }}<a href="" class="close-btn-tab"><i
                                                            class="fa fa-times" aria-hidden="true"></i> </a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>{{ $charter->max_guests }}</td>
                                            {{-- <td>Local</td> --}}
                                            <td><label class="uploadFile border rounded">
                                                    <i class="fa fa-cloud-upload upload-icon-account-1"
                                                        aria-hidden="true">
                                                        {{ uploaded_asset($charter->charter_agreement)}}
                                                    </i>
                                                    <span class="filename">Upload </span>
                                                    <input type="file" class="inputfile form-control" name="file">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    @endsection
