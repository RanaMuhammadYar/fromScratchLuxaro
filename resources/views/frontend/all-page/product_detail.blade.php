@extends('frontend.layouts.app')
@section('title')
    <title>
        Product Detail</title>
@endsection
@section('content')
    <style>
        .input-number-increment {
            border-left: none;
            border-radius: 0 4px 4px 0;
        }

        .input-number-decrement,
        .input-number-increment {
            display: inline-block;
            width: 30px;
            line-height: 38px;
            background: transparent;
            color: #0009;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
        }

        .input-number,
        .input-number-decrement,
        .input-number-increment {
            border: 0px solid #ccc;
            height: 40px;
            user-select: none;
            width: 41px
        }
    </style>
    <div class="inner-content">
        <div class="charter-detail-page mt-4 pt-md-5 mt-md-5 mb-3 mb-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-slider">
                            @foreach (json_decode($product->multiple_image) as $multipleimage)
                                <div>
                                    <img src="{{ $multipleimage }}" onerror="this.src'{{ asset('images/default.png') }}'"
                                        class="img-fluid">
                                </div>
                            @endforeach
                        </div>
                        <div class="detail-nav-slider">
                            @foreach (json_decode($product->multiple_image) as $multipleimage)
                                <div>
                                    <img src="{{ $multipleimage }}" onerror="this.src'{{ asset('images/default.png') }}'"
                                        class="img-fluid">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="charter-detail-desc">
                            <h2 class="mb-1">{{ $product->product_name }}</h2>
                            <div class="details-review d-flex align-items-center mb-1">
                                <ul class="list-unstyled m-0 p-0 d-flex stars">
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                    <li class="me-1"><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="small">4.2 (Based on 16 Reviews)</span>
                            </div>
                            <p class="price my-2">${{ $product->product_price }}</p>
                            <div class="quantity-btn d-flex align-items-center mb-3">
                                <div class="product-details-quantity border rounded d-inline-block me-3">
                                    <span class="input-number-decrement" onclick="decrement()">–</span><input
                                        class="input-number addOrRemove" type="text" value="1" min="1"
                                        max="10" id=""><span class="input-number-increment"
                                        onclick="increment()">+</span>
                                </div>
                                <div class="">
                                    <button class="btn btn-primary"
                                        onclick="addToCart('{{ $product->id }}', '{{ $product->product_name }}', '{{ $product->product_price }}')"
                                        type="button">ADD TO CART</button>
                                </div>
                            </div>
                            <div class="luxauro-fresh d-flex align-items-center">
                                <div class="luxauro-catogery me-5">
                                    <p>Catogery: <strong>{{ $product->category->title }}</strong></p>
                                </div>
                                <div class="luxauro-catogery">
                                    <p>Tags: <strong>
                                            @foreach ($product->tags as $tags)
                                                {{ $tags->name . ',' }}
                                            @endforeach
                                        </strong></p>
                                </div>
                            </div>
                            <div class="merchant-name">
                                <p>Merchant: <u>{{ $product->user->userDetails->name }}</u></p>
                            </div>
                            <div class="description-detail d-flex ">
                                <div class="description-heading">
                                    <p class="price mb-2 me-3">Description</p>
                                </div>
                                <div class="description-para">
                                    <p>{{ $product->product_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">You may also like</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider Charters-slider">

                    @foreach ($productsasc as $productasc)
                        <div>
                            <div class="product-item">
                                <a href="{{ route('productDetails', ['id' => $productasc->id, 'slug' => Str::slug($productasc->product_name)]) }}">
                                    <div class="img-holder">
                                        <img src="{{ $productasc->image }}"
                                            onerror="this.src'{{ asset('images/default.png') }}'" class="img-fluid">
                                    </div>
                                </a>
                                <div class="txt-holder">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div>
                                            <a href="{{ route('productDetails', ['id' => $productasc->id, 'slug' => Str::slug($productasc->product_name)]) }}" style="color: black">
                                                <strong class="title">{{ $productasc->product_name }}</strong>
                                            </a>
                                            <ul class="list-unstyled m-0 p-0 d-flex stars">
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <i class="fa fa-globe fa-1x mt-2"></i>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong class="title">${{ $productasc->product_price }}</strong>
                                        <button class="btn bg-dark text-white py-1 px-2"
                                            onclick="addToCart('{{ $productasc->id }}', '{{ $productasc->product_name }}', '{{ $productasc->product_price }}')"><i
                                                class="fa fa-shopping-basket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3 mt-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">More from this suite</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider Charters-slider">
                    {{-- @foreach ($mayyoulike as $products) --}}
                    @for ($i = 0; $i < 10; $i++)
                        <div>
                            <div class="product-item">
                                <div class="img-holder">
                                    <img src="Test" onerror="this.src='{{ asset('images/default.png') }}'"
                                        class="img-fluid">
                                </div>
                                <div class="txt-holder">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div>
                                            <strong class="title">Test</strong>
                                            <ul class="list-unstyled m-0 p-0 d-flex stars">
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <i class="fa fa-globe fa-1x mt-2"></i>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong class="title">$100</strong>
                                        <button class="btn bg-dark text-white py-1 px-2"><i
                                                class="fa fa-shopping-basket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
        <div class="product-section mb-5 pb-lg-3">
            <div class="container">
                <div class="product-header d-flex flex-column flex-lg-row justify-content-between mb-4">
                    <h2 class="m-0">You may also like</h2>
                    <div class="d-flex form-holder">
                        <a class="btn btn-view rounded-0" href="javascript:void">View All</a>
                        <form class="page-form flex-fill" action="#">
                            <div class="page-form-holder d-flex">
                                <label class="form-control rounded-0">Search Filter</label>
                                <div class="form-field d-flex flex-fill">
                                    <select class="flex-fill border-0 bg-transparent">
                                        <option>All</option>
                                        <option>All</option>
                                        <option>All</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="slider product-slider">

                    @foreach ($productsdesc as $productsdescs)
                        <div>
                            <div class="product-item">
                                <a href="{{ route('productDetails', ['id' => $productsdescs->id, 'slug' => Str::slug($productsdescs->product_name)]) }}">
                                    <div class="img-holder">
                                        <img src="{{ $productsdescs->image }}"
                                        onerror="this.src'{{ asset('images/default.png') }}'" class="img-fluid">
                                    </div>
                                </a>
                                <div class="txt-holder">
                                    <div class="d-flex justify-content-between mb-3">
                                        <div>
                                            <a href="{{ route('productDetails', ['id' => $productsdescs->id, 'slug' => Str::slug($productsdescs->product_name)]) }}" style="color: black">
                                                <strong class="title">{{ $productsdescs->product_name }}</strong>
                                            </a>
                                            <ul class="list-unstyled m-0 p-0 d-flex stars">
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                                <li class="me-1"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <i class="fa fa-globe fa-1x mt-2"></i>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <strong class="title">${{ $productsdescs->product_price }}</strong>
                                        <button class="btn bg-dark text-white py-1 px-2"
                                            onclick="addToCart('{{ $productsdescs->id }}', '{{ $productsdescs->product_name }}', '{{ $productsdescs->product_price }}')"><i
                                                class="fa fa-shopping-basket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
        <script>
            // function increment() {
            //     var value = $('.addOrRemove').val();
            //     value = isNaN(value) ? 0 : value;
            //     value++;
            //     $('.addOrRemove').val(value);
            // }

            // function decrement() {
            //     var value = $('.addOrRemove').val();
            //     value = isNaN(value) ? 0 : value;
            //     value < 1 ? value = 1 : '';
            //     if (value > 1) {
            //         value--;
            //     }
            //     $('.addOrRemove').val(value);
            // }

            // function addToCart(product_id, name, price) {

            //     var quantity = $('.addOrRemove').val();
            //     var total = price * quantity;
            //     $.ajax({
            //         type: "POST",
            //         url: "{{ route('addtocart') }}",
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         data: {
            //             product_id: product_id,
            //             name: name,
            //             price: price,
            //             quantity: quantity,
            //             total: total
            //         },
            //         dataType: "json",
            //         success: function(response) {
            //             if (response.success == 'Product Already Added To Cart.') {
            //                 swal({
            //                     title: "Error!",
            //                     text: response.success,
            //                     icon: "error",
            //                     button: "Ok",

            //                 });
            //                 return false;
            //             } else {
            //                 swal({
            //                     title: "Success!",
            //                     text: response.success,
            //                     icon: "success",
            //                     button: "Ok",
            //                 });

            //             }

            //             $('.catdata').append(
            //                 '<div class="row destroy' + response.id +
            //                 '"><div class="col-5 px-1"><span class="mx-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span><span>' +
            //                 response.cart.name +
            //                 '</span></div><div class="col-1 px-1"><span><i class="fa fa-times" aria-hidden="true" onclick="orderdestroy(' +
            //                 response.id + ')" ></i></span></div><div class="col-3 px-1"><span>' +
            //                 response.cart.quantity +
            //                 '</span></div><div class="col-3 px-1"><span class="d-block">=$' + response.cart
            //                 .price * response.cart.quantity + '</span></div></div>');
            //             $('.totalprice').html('');
            //             $('.totalprice').append(
            //                 '<div class="row px-1"><div class="col-8"></div><div class="col-3"><span class="mx-1">Total=$' +
            //                 response.total + '</span></div><div class="col-1"></div></div>');
            //             $('.CartCount').html('');
            //             $('.CartCount').append(response.count);

            //         }

            //     });


            // }

            // function orderdestroy(destroy_id) {
            //     $.ajax({
            //         type: "POST",
            //         url: "{{ route('orderdestroy') }}",
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         data: {
            //             destroy_id: destroy_id,
            //         },
            //         dataType: "json",
            //         success: function(response) {

            //             $('.destroy' + destroy_id + '').html('');
            //             $('.CartCount').html('');
            //             $('.CartCount').append(response.count);
            //             $('.totalprice').html('');
            //             if (response.total == 0) {} else {
            //                 $('.totalprice').append(
            //                     '<div class="row px-1"><div class="col-8"></div><div class="col-3"><span class="mx-1">Total=$' +
            //                     response.total + '</span></div><div class="col-1"></div></div>');
            //             };
            //             swal({
            //                 title: "Success!",
            //                 text: response.success,
            //                 icon: "success",
            //                 button: "Ok",
            //             });
            //         }

            //     });
            // }


            // function addToCart(product_id, name, price) {
            //     var quantity = document.getElementById('addOrRemove').value;
            //     var product = {
            //         id: product_id,
            //         name: name,
            //         price: price,
            //         quantity: quantity
            //     };
            //     sessionStorage.setItem('product', JSON.stringify(product));
            //     var allData = JSON.parse(sessionStorage.getItem('product'));
            //     if (allData.id == product_id) {
            //         sessionStorage.removeItem('product');
            //         $('.catdata').html('');
            //         // allData.quantity = parseInt(allData.quantity) + parseInt(quantity);
            //     }
            //     var quentity = allData.quantity;
            //     var price = allData.price;
            //     var total = quentity * price;
            //     $('.catdata').append(
            //         '<div class="row"><div class="col-5 px-1"><span class="mx-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span><span>' +
            //         allData.name +
            //         '</span></div><div class="col-1 px-1"><span><i class="fa fa-times" aria-hidden="true"></i></span></div><div class="col-3 px-1"><span>' +
            //         allData.quantity + '</span></div><div class="col-3 px-1"><span class="d-block">= $' + price +
            //         '</span><span>= $' + total + ' Total</span></div></div>');
            // }


            // function addToCart(product_id, name, price) {
            //     var quantity = parseInt(document.getElementById('addOrRemove').value, 10);
            //     var product = {
            //         id: product_id,
            //         name: name,
            //         price: price,
            //         quantity: quantity
            //     };
            //     var existingProducts = sessionStorage.getItem('products');
            //     if (existingProducts) {
            //         existingProducts = JSON.parse(existingProducts);
            //         // Check if product with the same ID already exists
            //         var index = existingProducts.findIndex(function(p) {
            //             return p.id == product_id;
            //         });
            //         if (index !== -1) {
            //             // Update the quantity of existing product
            //             existingProducts[index].quantity += quantity;
            //         } else {
            //             // Add new product to the array
            //             existingProducts.push(product);
            //         }
            //         sessionStorage.setItem('products', JSON.stringify(existingProducts));
            //     } else {
            //         // Add first product to the session
            //         sessionStorage.setItem('products', JSON.stringify([product]));
            //     }
            //     var products = JSON.parse(sessionStorage.getItem('products'));
            //     var total = 0;
            //     $('.catdata').html(''); // Clear existing products
            //     products.forEach(function(p) {
            //         var subtotal = p.price * p.quantity;
            //         total += subtotal;
            //         $('.catdata').append(
            //             '<div class="row"><div class="col-5 px-1"><span class="mx-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span><span>' +
            //             p.name +
            //             '</span></div><div class="col-1 px-1"><span class="remove-product" data-id="' +
            //             p.id +
            //             '"><i class="fa fa-times" aria-hidden="true"></i></span></div><div class="col-3 px-1"><span>' +
            //             p.quantity + '</span></div><div class="col-3 px-1"><span class="d-block">= $' + p.price +
            //             '</span><span>= $' + subtotal.toFixed(2) + ' Total</span></div></div>');
            //     });
            //     $('.catdata').append(
            //         '<div class="row"><div class="col-12 px-1 text-right"><span class="d-block"><strong>Total: $' + total
            //         .toFixed(2) +
            //         '</strong></span></div></div>');
            // }
        </script>
    @endsection
