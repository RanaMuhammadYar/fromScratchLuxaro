@extends('frontend.admin.layouts.app')
@section('title')
    <title>Edit Project</title>
@endsection
@section('content')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />
    <div class="row">
        <!-- Form controls -->
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit Project</h5>
                <div class="card-body">
                    <form action="{{ route('admin-goudevine-project.update', $project->id) }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                                    <input type="title" class="form-control @error('title') is-invalid @enderror"
                                        name="title" placeholder="Title" title="Title" value="{{ $project->title }}" />
                                    @error('title')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                                    <input type="text"
                                        class="form-control @error('short_description_project') is-invalid @enderror"
                                        name="short_description_project" placeholder="Short Description"
                                        title="Short Description" value="{{ $project->short_description }}" />
                                    @error('short_description_project')
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
                                        <option
                                            value="Target Goal"{{ $project->project_category == 'Target Goal' ? 'selected' : '' }}>
                                            Target Goal</option>
                                        <option value="Target Date"
                                            {{ $project->project_category == 'Target Date' ? 'selected' : '' }}>Target Date
                                        </option>
                                        <option value="Target Goal & Date"
                                            {{ $project->project_category == 'Target Goal & Date' ? 'selected' : '' }}>
                                            Target
                                            Goal & Date</option>
                                        <option value="Campaign Never Ends"
                                            {{ $project->project_category == 'Campaign Never Ends' ? 'selected' : '' }}>
                                            Campaign Never Ends</option>
                                            <option value="Featured" {{ $project->project_category == 'Featured' ? 'selected' : '' }}>Featured</option>
                                    </select>
                                    @error('project_category')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Tags</label>
                                    <input class="form-control  @error('tags') is-invalid @enderror" type="text"
                                        data-role="tagsinput" name="tags"
                                        value=" @foreach ($project->tags as $alltags) {{ $alltags }} @endforeach"
                                        placeholder="Tags">
                                    @if ($errors->has('tags'))
                                        <span class="text-danger">{{ $errors->first('tags') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Feature Image</label>
                                    <input type="file" class="form-control @error('feature_image_project') is-invalid @enderror"
                                        name="feature_image_project" placeholder="description" title="description"
                                        value="{{ old('feature_image_project') }}" />
                                    @error('feature_image_project')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Gallery Image</label>
                                    <input type="file" class="form-control @error('gallery_image') is-invalid @enderror"
                                        name="gallery_image[]" placeholder="Gallery Image" title="Gallery Image"
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
                                    <input type="text" class="form-control @error('video_link') is-invalid @enderror"
                                        name="video_link" placeholder="https://" title="https://"
                                        value="{{ $project->video_link }}" />
                                    @error('video_link')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Project Start Date</label>
                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                        name="start_date" placeholder="start_date" title="Start Date"
                                        value="{{ $project->start_date }}" />
                                    @error('start_date')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Project End Date</label>
                                    <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                        name="end_date" placeholder="End Date" title="End Date"
                                        value="{{ $project->end_date }}" />
                                    @error('end_date')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Minimum Pledge Amount</label>
                                    <input type="number"
                                        class="form-control @error('minimum_pledge_amount') is-invalid @enderror"
                                        name="minimum_pledge_amount" placeholder="Minimum Pledge Amount"
                                        title="Minimum Pledge Amount" value="{{ $project->minimum_pledge_amount }}" />
                                    @error('minimum_pledge_amount')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Maximum Pledge Amount</label>
                                    <input type="number"
                                        class="form-control @error('maximum_pledge_amount') is-invalid @enderror"
                                        name="maximum_pledge_amount" placeholder="Maximum Pledge Amount"
                                        title="Maximum Pledge Amount" value="{{ $project->maximum_pledge_amount }}" />
                                    @error('maximum_pledge_amount')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Project Funding Goal</label>
                                    <input type="number"
                                        class="form-control @error('project_funding_goal') is-invalid @enderror"
                                        name="project_funding_goal" placeholder="Project Funding Goal"
                                        title="Project Funding Goal" value="{{ $project->project_funding_goal }}" />
                                    @error('project_funding_goal')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Recommended Pledge
                                        Amount</label>
                                    <input type="number"
                                        class="form-control @error('recommended_pledge_amount') is-invalid @enderror"
                                        name="recommended_pledge_amount" placeholder="Recommended Pledge Amount"
                                        title="Recommended Pledge Amount"
                                        value="{{ $project->recommended_pledge_amount }}" />
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
                                        value="{{ $project->location }}" />
                                    @error('location')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                                    <textarea name="description" id=""class="form-control  @error('description') is-invalid @enderror"
                                        name="description" placeholder="description" id="description" title="description">{{ $project->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger mt-2">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <hr>
                            <label for="" class="form-lable"> <strong>Benefits</strong></label>

                            @foreach ($project->projectBenefits as $key => $projectBenefit)
                                @if ($key == 0)
                                    <div class="row mt-4">
                                        <input type="hidden" name="benefit_id[]" value="{{ $projectBenefit->id }}">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Benefit
                                                    Name</label>
                                                <input type="text" class="form-control" name="benefit_name[]"
                                                    placeholder="Benefit Name" title="benefit_name"
                                                    value="{{ $projectBenefit->benefit_name }}"  />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                                <input type="number" class="form-control" name="price[]"
                                                    placeholder="Price" title="Price"
                                                    value="{{ $projectBenefit->price }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Benefit MSRP
                                                </label>
                                                <input type="number" class="form-control" name="benefit_msrp[]"
                                                    placeholder="Benefit MSRP" title="benefit_msrp"
                                                    value="{{ $projectBenefit->benefit_msrp }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Feature Image
                                                </label>
                                                <input type="file" class="form-control" name="feature_image[]"
                                                    placeholder="Feature Image" title="Feature Image" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Estimated
                                                    Delivery Date
                                                </label>
                                                <input type="date" class="form-control"
                                                    name="estimated_delivery_date[]" placeholder="Estimated Delivery Date"
                                                    title="Estimated Delivery Date"
                                                    value="{{ $projectBenefit->estimated_delivery_date }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Quantity
                                                </label>
                                                <input type="numeber" min="1" class="form-control"
                                                    name="quantity[]" placeholder="Quantity" title="Quantity"
                                                    value="{{ $projectBenefit->quantity }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Benefit Short
                                                    Description
                                                </label>
                                                <input type="test" class="form-control" name="short_description[]"
                                                    placeholder="Benefit Short Description"
                                                    title="Benefit Short Description"
                                                    value="{{ $projectBenefit->short_description }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="mb-3 mt-4 pt-2">
                                                <button class="btn btn-outline-primary addbenefit" type="button"> + Add a
                                                    Benefit
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                @else
                                    <div class="row mt-4" id="addnewbenefits{{ $key }}">
                                        <input type="hidden" name="benefit_id[]" value="{{ $projectBenefit->id }}">
                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Benefit
                                                    Name</label>
                                                <input type="text" class="form-control" name="benefit_name[]"
                                                    placeholder="Benefit Name" title="benefit_name"
                                                    value="{{ $projectBenefit->benefit_name }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                                <input type="number" class="form-control" name="price[]"
                                                    placeholder="Price" title="Price"
                                                    value="{{ $projectBenefit->price }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Benefit MSRP
                                                </label>
                                                <input type="number" class="form-control" name="benefit_msrp[]"
                                                    placeholder="Benefit MSRP" title="benefit_msrp"
                                                    value="{{ $projectBenefit->benefit_msrp }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Feature Image
                                                </label>
                                                <input type="file" class="form-control" name="feature_image[]"
                                                    placeholder="Feature Image" title="Feature Image" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Estimated
                                                    Delivery Date
                                                </label>
                                                <input type="date" class="form-control"
                                                    name="estimated_delivery_date[]" placeholder="Estimated Delivery Date"
                                                    title="Estimated Delivery Date"
                                                    value="{{ $projectBenefit->estimated_delivery_date }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Quantity
                                                </label>
                                                <input type="number" min="1" class="form-control"
                                                    name="quantity[]" placeholder="Quantity" title="Quantity"
                                                    value="{{ $projectBenefit->quantity }}" />
                                            </div>
                                        </div>

                                        <div class="col-md-10 col-sm-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Benefit Short
                                                    Description
                                                </label>
                                                <input type="test" class="form-control" name="short_description[]"
                                                    placeholder="Benefit Short Description"
                                                    title="Benefit Short Description"
                                                    value="{{ $projectBenefit->short_description }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <div class="mb-3 mt-4 pt-2">
                                                <button class="btn btn-outline-danger " type="button"
                                                    onclick="generateId({{ $key }})"> - Remove Benefit
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                @endif
                            @endforeach

                            {{-- <div class="row mt-4">
                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Benefit
                                            Name</label>
                                        <input type="text" class="form-control" name="benefit_name[]"
                                            placeholder="Benefit Name" title="benefit_name" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                                        <input type="text" class="form-control" name="price[]" placeholder="Price"
                                            title="Price" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Benefit MSRP
                                        </label>
                                        <input type="text" class="form-control" name="benefit_msrp[]"
                                            placeholder="Benefit MSRP" title="benefit_msrp" value="" />
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Feature Image
                                        </label>
                                        <input type="file" class="form-control" name="feature_image[]"
                                            placeholder="Feature Image" title="Feature Image" value="" />
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Estimated
                                            Delivery Date
                                        </label>
                                        <input type="date" class="form-control" name="estimated_delivery_date[]"
                                            placeholder="Estimated Delivery Date" title="Estimated Delivery Date"
                                            value="" />
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Quantity
                                        </label>
                                        <input type="numeber" min="1" class="form-control" name="quantity[]"
                                            placeholder="Quantity" title="Quantity" value="" />
                                    </div>
                                </div>

                                <div class="col-md-10 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Benefit Short
                                            Description
                                        </label>
                                        <input type="test" class="form-control" name="short_description[]"
                                            placeholder="Benefit Short Description" title="Benefit Short Description"
                                            value="" />
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-12">
                                    <div class="mb-3 mt-4 pt-2">
                                        <button class="btn btn-outline-primary addbenefit" type="button"> + Add a
                                            Benefit
                                        </button>
                                    </div>
                                </div>
                                <hr>
                            </div> --}}


                            <div class="addnewbenefit">

                            </div>
                            <div class="row py-3">
                                <div class="col-sm-12 text-end">
                                    <a href="{{ route('admin-goudevine-project.index') }}"
                                        class="btn btn-outline-danger mx-2">Closed</a>
                                    <button class="btn btn-outline-primary" type="submit" onclick="this.form.submit();this.disabled=true;" >Update</button>
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

    <script>
        $(document).ready(function() {
            $('.addbenefit').click(function(e) {
                e.preventDefault();
                var id = Math.floor(Math.random() * 90000) + 10000;
                var html = '';
                html = '<div class="row mt-4" id="addnewbenefits' + id +
                    '"> <input type="hidden" name="benefit_id[]" value="">  <div class="col-md-4 col-sm-12"> <div class="mb-3"> <label for="exampleFormControlInput1" class="form-label">Benefit Name</label> <input type="text" class="form-control" name="benefit_name[]" placeholder="Benefit Name" title="benefit_name" value=""/> </div></div><div class="col-md-4 col-sm-12"> <div class="mb-3"> <label for="exampleFormControlInput1" class="form-label">Price</label> <input type="number" class="form-control" name="price[]" placeholder="Price" title="Price" value=""/> </div></div><div class="col-md-4 col-sm-12"> <div class="mb-3"> <label for="exampleFormControlInput1" class="form-label">Benefit MSRP </label> <input type="number" class="form-control" name="benefit_msrp[]" placeholder="Benefit MSRP" title="benefit_msrp" value=""/> </div></div><div class="col-md-4 col-sm-12"> <div class="mb-3"> <label for="exampleFormControlInput1" class="form-label">Feature Image </label> <input type="file" class="form-control" name="feature_image[]" placeholder="Feature Image" title="Feature Image" value=""/> </div></div><div class="col-md-4 col-sm-12"> <div class="mb-3"> <label for="exampleFormControlInput1" class="form-label">Estimated Delivery Date </label> <input type="date" class="form-control" name="estimated_delivery_date[]" placeholder="Estimated Delivery Date" title="Estimated Delivery Date" value=""/> </div></div><div class="col-md-4 col-sm-12"> <div class="mb-3"> <label for="exampleFormControlInput1" class="form-label">Quantity </label> <input type="numeber" min="1" class="form-control" name="quantity[]" placeholder="Quantity" title="Quantity" value=""/> </div></div><div class="col-md-10 col-sm-12"> <div class="mb-3"> <label for="exampleFormControlInput1" class="form-label">Benefit Short Description </label> <input type="test" class="form-control" name="short_description[]" placeholder="Benefit Short Description" title="Benefit Short Description" value=""/> </div></div><div class="col-md-2 col-sm-12"> <div class="mb-3 mt-4 pt-2"> <button class="btn btn-outline-danger" type="button" onclick="generateId(' +
                    id + ')">- Remove Benefit</button> </div></div><hr></div>';
                $('.addnewbenefit').append(html);

            });
        });

        function generateId(id) {
            $('#addnewbenefits' + id).remove();
        }
    </script>
@endsection
