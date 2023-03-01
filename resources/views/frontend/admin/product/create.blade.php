@extends('frontend.admin.layouts.app')
@section('title')
    <title>Create Product</title>
@endsection
@section('content')
    <div class="row">
        <!-- Form controls -->
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create Product</h5>
                <div class="card-body">
                    <form action="{{ route('product.create') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="hidden" value="Pending" name="status">
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Product Name </label>
                                    <input type="text" class="form-control" name="product_name"
                                        placeholder="Product Name" title="Product Name" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Product Price </label>
                                    <input type="text" class="form-control" name="product_price"
                                        placeholder="Product Price" title="Product Price" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
                                    <textarea class="form-control" name="product_description" rows="3" placeholder="Product Description"
                                        title="Product Description"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Tags</label>
                                    <input type="text" name="tags" class="form-control" placeholder="Tags"
                                        title="Tags">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Product Image </label>
                                        <input type="file" class="form-control" name="product_image"
                                            placeholder="Product Image" title="Product Image" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Product Type </label>
                                        <select class="form-control" name="product_type_id">
                                            <option value="">Select Product Type</option>
                                            {{-- @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Product Category </label>
                                        <select class="form-control" name="product_category_id">
                                            <option value="">Select Product Category</option>
                                            {{-- @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Delivory Option
                                        </label>
                                        <select class="form-control" name="delivory_option_id">
                                            <option value="">Select Delivory Option</option>
                                            {{-- @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Shipping Type </label>
                                        <select class="form-control" name="shipping_type_id">
                                            <option value="">Select Shipping Type</option>
                                            {{-- @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Shipping Charge
                                        </label>
                                        <input type="text" class="form-control" name="shipping_charge"
                                            placeholder="Shipping Charge" title="Shipping Charge" />
                                    </div>

                                <div class="row py-3">
                                    <div class="col-sm-12 text-end">
                                        <a href="{{ route('product.index') }}"
                                            class="btn btn-outline-danger mx-2">Closed</a>
                                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
