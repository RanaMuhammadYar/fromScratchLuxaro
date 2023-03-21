@extends('frontend.admin.layouts.app')
@section('title')
    <title>Create Project</title>
@endsection
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
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
    <div class="row">
        <!-- Form controls -->
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Project</h5>
                <div class="card-body">
                    <form action="{{ route('admin-goudevine-product.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                                    <input type="title" class="form-control @error('title') is-invalid @enderror"
                                        name="title" placeholder="Title" title="Title" value="{{ old('title') }}" />
                                    @error('title')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                                    <input type="text"
                                        class="form-control @error('short_description') is-invalid @enderror"
                                        name="short_description" placeholder="Short Description" title="short_description"
                                        value="{{ old('short_description') }}" />
                                    @error('short_description')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Project Category</label>
                                    <select name="project_category" id=""
                                        class="form-control @error('project_category') is-invalid @enderror">
                                        <option value="">-Select-</option>
                                        <option value="Target Goal">Target Goal</option>
                                        <option value="Target Date">Target Date</option>
                                        <option value="Target Goal & Date">Target Goal & Date</option>
                                        <option value="Campaign Never Ends">Campaign Never Ends</option>
                                    </select>
                                    @error('project_category')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Tags</label>
                                    <input class="form-control @error('tags') is-invalid @enderror" type="text"
                                        data-role="tagsinput" name="tags" value="{{ old('tags') }}" placeholder="Tags">
                                    @if ($errors->has('tags'))
                                        <span class="text-danger">{{ $errors->first('tags') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Feature Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" placeholder="description" title="description"
                                        value="{{ old('image') }}" />
                                    @error('image')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Gallery Image</label>
                                    <input type="file" class="form-control @error('gallery_image') is-invalid @enderror"
                                        name="gallery_image" placeholder="Gallery Image" title="Gallery Image"
                                        value="{{ old('gallery_image') }}" multiple />
                                    @error('gallery_image')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Project Promo Video
                                        Link</label>
                                    <input type="link" class="form-control @error('video_link') is-invalid @enderror"
                                        name="video_link" placeholder="https://" title="https://"
                                        value="{{ old('video_link') }}" />
                                    @error('video_link')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Project Start Date</label>
                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                        name="title" placeholder="start_date" title="Start Date"
                                        value="{{ old('start_date') }}" />
                                    @error('start_date')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Project End Date</label>
                                    <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                        name="title" placeholder="end_date" title="End Date"
                                        value="{{ old('end_date') }}" />
                                    @error('end_date')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Minimum Pledge Amount</label>
                                    <input type="text"
                                        class="form-control @error('minimum_pledge_amount') is-invalid @enderror"
                                        name="minimum_pledge_amount" placeholder="Minimum Pledge Amount"
                                        title="Minimum Pledge Amount" value="{{ old('minimum_pledge_amount') }}" />
                                    @error('minimum_pledge_amount')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Maximum Pledge Amount</label>
                                    <input type="text"
                                        class="form-control @error('maximum_pledge_amount') is-invalid @enderror"
                                        name="maximum_pledge_amount" placeholder="Maximum Pledge Amount"
                                        title="Maximum Pledge Amount" value="{{ old('maximum_pledge_amount') }}" />
                                    @error('maximum_pledge_amount')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Project Funding Goal</label>
                                    <input type="text"
                                        class="form-control @error('project_funding_goal') is-invalid @enderror"
                                        name="project_funding_goal" placeholder="Project Funding Goal"
                                        title="Project Funding Goal" value="{{ old('project_funding_goal') }}" />
                                    @error('project_funding_goal')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Recommended Pledge
                                        Amount</label>
                                    <input type="text"
                                        class="form-control @error('recommended_pledge_amount') is-invalid @enderror"
                                        name="recommended_pledge_amount" placeholder="Recommended Pledge Amount"
                                        title="Recommended Pledge Amount"
                                        value="{{ old('recommended_pledge_amount') }}" />
                                    @error('recommended_pledge_amount')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Location</label>
                                    <input type="text" class="form-control @error('location') is-invalid @enderror"
                                        name="location" placeholder="Location" title="Location"
                                        value="{{ old('Location') }}" />
                                    @error('Location')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                                    <textarea name="description" id=""class="form-control @error('description') is-invalid @enderror"
                                        name="description" placeholder="description" id="description" title="description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>




                            <hr>
                            <label for="" class="form-lable"> <strong>Benefits</strong></label>
                            <div class="row mt-4">

                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Benefit Name</label>
                                        <input type="text"
                                            class="form-control @error('benefit_name') is-invalid @enderror"
                                            name="benefit_name" placeholder="Benefit Name" title="benefit_name"
                                            value="{{ old('benefit_name') }}" />
                                        @error('benefit_name')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                                            name="price" placeholder="Price" title="Price"
                                            value="{{ old('price') }}" />
                                        @error('price')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Benefit MSRP </label>
                                        <input type="text"
                                            class="form-control @error('benefit_msrp') is-invalid @enderror"
                                            name="benefit_msrp" placeholder="Benefit MSRP" title="benefit_msrp"
                                            value="{{ old('benefit_msrp') }}" />
                                        @error('benefit_msrp')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-1 col-sm-12">
                                    <div class="mb-3 mt-5 pt-2">
                                        <button class="btn btn-outline-primary" type="submit"> + </button>
                                    </div>
                                </div> --}}

                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Feature Image
                                        </label>
                                        <input type="file"
                                            class="form-control @error('feature_image
                                            ') is-invalid @enderror"
                                            name="feature_image" placeholder="Feature Image" title="Feature Image"
                                            value="{{ old('feature_image') }}" />
                                        @error('feature_image')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Estimated Delivery Date
                                        </label>
                                        <input type="date"
                                            class="form-control @error('estimated_delivery_date') is-invalid @enderror"
                                            name="estimated_delivery_date" placeholder="Estimated Delivery Date"
                                            title="Estimated Delivery Date"
                                            value="{{ old('estimated_delivery_date') }}" />
                                        @error('estimated_delivery_date')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Quantity
                                        </label>
                                        <input type="numeber" min="1"
                                            class="form-control @error('quantity
                                            ') is-invalid @enderror"
                                            name="quantity" placeholder="Quantity" title="Quantity"
                                            value="{{ old('quantity') }}" />
                                        @error('quantity')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-10 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Benefit Short Description
                                        </label>
                                        <input type="test"
                                            class="form-control @error('short_description
                                            ') is-invalid @enderror"
                                            name="short_description" placeholder="Benefit Short Description"
                                            title="Benefit Short Description" value="{{ old('short_description') }}" />
                                        @error('short_description')
                                            <span class="text-danger mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="mb-3 mt-4 pt-2">
                                        <button class="btn btn-outline-primary" type="button"> + Add a Benefit </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row py-3">
                                <div class="col-sm-12 text-end">
                                    <a href="{{ route('admin-goudevine-product.index') }}"
                                        class="btn btn-outline-danger mx-2">Closed</a>
                                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            CKEDITOR.replace('description');
        });
    </script>
@endsection
