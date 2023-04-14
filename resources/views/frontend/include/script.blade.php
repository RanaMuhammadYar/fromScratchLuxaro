<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

@if (session('success'))
    <script>
        swal({
            title: "Success!",
            text: "{{ session('success') }}",
            icon: "success",
            button: "Ok",
        });
    </script>
@endif
@if (session('error'))
    <script>
        swal({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error",
            button: "Ok",
        });
    </script>
@endif
<script>
    setTimeout(function() {
        $('.alert').fadeOut('fast');
    }, 3000);

    function appendProducts(selectObject) {
        var filterValue = selectObject.value;
        var id = filterValue.substr(filterValue.length - 1);
        $.ajax({
            type: 'GET',
            url: "{{ route('appendProducts') }}",
            data: {
                price_filter: filterValue
            },
            success: function(data) {
                $('#product-append' + id).html(null);
                $('#product-append' + id).html(data);
                $('#product-append' + id).css({
                    "display": "flex"
                });
            }
        });
    }

    function appendCategories(selectObject) {
        var filterValue = selectObject.value;
        var id = filterValue.substr(filterValue.length - 1);
        $.ajax({
            type: 'GET',
            url: "{{ route('appendCategories') }}",
            data: {
                category_filter: filterValue
            },
            success: function(data) {
                $('#category-append').html(null);
                $('#category-append').html(data);
                $('#category-append').css({
                    "display": "flex"
                });
            }
        });
    }

    function appendCharters(selectObject) {
        var filterValue = selectObject.value;
        $.ajax({
            type: 'GET',
            url: "{{ route('appendCharters') }}",
            data: {
                charter: filterValue
            },
            success: function(data) {
                $('#charter-append').html(null);
                $('#charter-append').html(data);
                $('#charter-append').css({
                    "display": "flex"
                });
            }
        });
    }

    function appendLocalLuxauro(selectObject) {
        var filterValue = selectObject.value;
        $.ajax({
            type: 'GET',
            url: "{{ route('appendLocalLuxauro') }}",
            data: {
                products: filterValue
            },
            success: function(data) {
                $('#local-luxaro-append').html(null);
                $('#local-luxaro-append').html(data);
                $('#local-luxaro-append').css({
                    "display": "flex"
                });
            }
        });
    }
</script>

<script>
    $('.openLuxaroSidebar').click(function() {
        $('.common').addClass('close');
        $('.common').removeClass('show');
        $('.LuxaroSidebar').addClass('show');
        $('.LuxaroSidebarbtn').addClass('show');
    });
    $('.openGoldEvineSidebar').click(function() {
        $('.common').addClass('close');
        $('.common').removeClass('show');
        $('.GoldEvineSidebar').addClass('show');
        $('.GoldEvineSidebarbtn').addClass('show');
    });
    $('.openGMGSidebar').click(function() {
        $('.common').addClass('close');
        $('.common').removeClass('show');
        $('.GMGSidebar').addClass('show');
        $('.GMGSidebarbtn').addClass('show');
    });

    function increment() {
        var value = $('.addOrRemove').val();
        value = isNaN(value) ? 0 : value;
        value++;
        $('.addOrRemove').val(value);
    }

    function decrement() {
        var value = $('.addOrRemove').val();
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        if (value > 1) {
            value--;
        }
        $('.addOrRemove').val(value);
    }

    function addToCart(product_id, name, price) {
        var quantity = $('.addOrRemove').val();

        var total = price * quantity;
        $.ajax({
            type: "GET",
            url: "{{ route('addtocart') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                product_id: product_id,
                name: name,
                price: price,
                quantity: quantity,
                total: total
            },
            dataType: "json",
            success: function(response) {
                if (response.success == 'Product Already Added To Cart.') {
                    swal({
                        title: "Error!",
                        text: response.success,
                        icon: "error",
                        button: "Ok",

                    });
                } else {
                    swal({
                        title: "Success!",
                        text: response.success,
                        icon: "success",
                        button: "Ok",
                    });
                    $('.catdata').append(
                        '<div class="row destroy' + response.id +
                        '"><div class="col-5 px-1"><span class="mx-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span><span>' +
                        response.cart.name +
                        '</span></div><div class="col-1 px-1"><span><i class="fa fa-times" aria-hidden="true" onclick="orderdestroy(' +
                        response.id +
                        ')"style="cursor: pointer;"></i></span></div><div class="col-3 px-1"><span>' +
                        response.cart.quantity +
                        '</span></div><div class="col-3 px-1"><span class="d-block">=$' + response.cart
                        .price * response.cart.quantity + '</span></div></div>');
                    $('.totalprice').html('');
                    $('.totalprice').append(
                        '<div class="row px-1"><div class="col-8"></div><div class="col-3"><span class="mx-1">Total=$' +
                        response.total + '</span></div><div class="col-1"></div></div>');
                    $('.CartCount').html('');
                    $('.CartCount').append(response.count);
                }


            }

        });


    }

    function orderdestroy(destroy_id) {
        $.ajax({
            type: "GET",
            url: "{{ route('orderdestroy') }}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                destroy_id: destroy_id,
            },
            dataType: "json",
            success: function(response) {
                $('.destroy' + destroy_id + '').html('');
                $('.CartCount').html('');
                $('.CartCount').append(response.count);
                $('.totalprice').html('');
                if (response.total == 0) {} else {
                    $('.totalprice').append(
                        '<div class="row px-1"><div class="col-8"></div><div class="col-3"><span class="mx-1">Total=$' +
                        response.total + '</span></div><div class="col-1"></div></div>');
                };
                swal({
                    title: "Success!",
                    text: response.success,
                    icon: "success",
                    button: "Ok",
                });
            }

        });
    }

    function orderdestroycheckout(destroy_id, producttotal, deliverycharges) {
        var destroy_id = destroy_id;
        var subtotal = $('.luxaurosubtotal').attr('data-subtotal');
        var shiping = $('.shiping').attr('data-shiping');
        var overalltotal = $('.overalltotal').attr('data-total');
        $.ajax({
            url: "{{ route('order.destroycheckout') }}",
            method: "GET",
            data: {
                destroy_id: destroy_id
            },
            success: function(data) {
                if (data.status == 'success') {
                    $('.allcartitem' + destroy_id).html('');
                    var subtotals = subtotal - producttotal;
                    var shipings = shiping - deliverycharges;
                    // console.log(shipings);
                    var overalltotals = overalltotal - producttotal;
                    $('.luxaurosubtotal').html('$' + subtotals);
                    $('.shiping').html('$' + shipings);
                    $('.overalltotal').html('$' + overalltotals);
                    $('.luxaurosubtotal').attr('data-subtotal', subtotals);
                    $('.shiping').attr('data-shiping', shipings);
                    $('.overalltotal').attr('data-total', overalltotals);
                    $('.destroy' + destroy_id + '').html('');
                    $('.CartCount').html('');
                    $('.CartCount').append(data.count);
                    $('.totalprice').html('');
                    $('.shipingcharge').val(shipings);
                    if (data.total == 0) {} else {
                        $('.totalprice').append(
                            '<div class="row px-1"><div class="col-8"></div><div class="col-3"><span class="mx-1">Total=$' +
                            data.total + '</span></div><div class="col-1"></div></div>');
                    }
                    swal({
                        title: "Success!",
                        text: data.success,
                        icon: "success",
                        button: "Ok",
                    });


                }

            }
        });

    }
    // $(document).on('change', '.goldeinefilteras', function() {

    // Code to execute when the input value changes
    // });



    // $(document).ready(function() {
    //     $('.goldeinefilteras').change(function(e) {
    //         e.preventDefault();
    //         alert('hello');
    //         $.ajax({
    //             url: "{{ route('filterGoldevine') }}",
    //             type: "GET",
    //             data: {
    //                 filter: filter
    //             },
    //             success: function(data) {
    //                 $('.appendFilterData').html('');
    //                 $('.classAppendgoldevine').slider('destroy');
    //                 $('.classAppendgoldevine').slider();
    //                 data.forEach(element => {
    //                     $('.filterGoldevines').append(element);
    //                     console.log(element);
    //                 });
    //             }
    //         });

    //     });
    //     // $j("#classAppendgoldevine").slider();
    // });

    // function filterGoldevine() {
    //     var filter = $('#goldeinefilter').val();

    // }
</script>

<script>
    $(window).on('load', function() {
        // $( '#ckeditor-textarea' ).ckeditor();
        CKEDITOR.replace('description');
    });

    $(document).ready(function() {});
</script>

<script>
    function goldeinefilteras() {
        $('.appendFilterData').html('');
        $('.filterGoldevines').html('');
        let filter = $('.goldeinefiltera').val();
        $.ajax({
            url: "{{ route('filterGoldevine') }}",
            type: "GET",
            data: {
                filter: filter
            },
            beforeSend: function() {
                $('.appendFilterData').html('');
                if ($('.appendFilterData').hasClass('slick-initialized')) {
                    $('.appendFilterData').html('');
                    $('.filterGoldevines').html('');
                    $('.appendFilterData').show();
                } else {
                    $('.appendFilterData').show();
                }
                $('.appendFilterData').html(
                    '<div class="text-center " style="height:299px;"><div class="spinner-border" role="status" style="color:#133033 !importent ; width: 5rem; height: 5rem;"> <span class="visually-hidden">Loading...</span> </div></div>'
                );
            },
            success: function(data) {
                if( $('.filterGoldevines').hasClass('slick-initialized')) {
                    $('.filterGoldevines').slick('unslick');
                    $('.appendFilterData').html('');
                    $('.filterGoldevines').html('');

                }else{
                    $('.appendFilterData').html('');
                    $('.filterGoldevines').html('');
                }
                data.forEach(element => {
                    $('.filterGoldevines').append(element);
                });

                // check if the element has a Slick slider initialized
                if ($('.filterGoldevines').hasClass('slick-initialized')) {
                    $('.filterGoldevines').slick('unslick');
                }

                $('.filterGoldevines').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true,
                    focusOnSelect: true,
                    autoplay: false,
                    mobileFirst: true,
                    prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
                    nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
                    responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 1,
                        }
                    }]
                });
            },
            complete: function() {
                $('.appendFilterData').hide();
            }
        });

    }
    // $('.goldeinefilteras').change(function(e) {
    //     e.preventDefault();
    //     alert('hello');

    // });



    // $('.goldeinefilteras').change(function(e) {
    //     e.preventDefault();
    //     let filter = $(this).val();
    //     $.ajax({
    //         url: "{{ route('filterGoldevine') }}",
    //         type: "GET",
    //         data: {
    //             filter: filter
    //         },
    //         success: function(data) {
    //             console.log(data);
    //             $('.appendFilterData').html('');
    //             $('.filterGoldevines').html('');
    //             data.forEach(element => {
    //                 $('.filterGoldevines').append(element);
    //             });
    //             $('.filterGoldevines').slick({
    //                 slidesToShow: 2,
    //                 slidesToScroll: 1,
    //                 infinite: true,
    //                 dots: false,
    //                 arrows: true,
    //                 focusOnSelect: true,
    //                 autoplay: false,
    //                 mobileFirst: true,
    //                 prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    //                 nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
    //                 responsive: [{
    //                     breakpoint: 768,
    //                     settings: {
    //                         slidesToShow: 4,
    //                         slidesToScroll: 1,
    //                     }
    //                 }, {
    //                     breakpoint: 992,
    //                     settings: {
    //                         slidesToShow: 6,
    //                         slidesToScroll: 1,
    //                     }
    //                 }]
    //             });
    //         }
    //     });
    // });

    // function testslider() {
    //     $('.slider').slick({
    //         slidesToShow: 2,
    //         slidesToScroll: 1,
    //         infinite: true,
    //         dots: false,
    //         arrows: true,
    //         focusOnSelect: true,
    //         autoplay: false,
    //         mobileFirst: true,
    //         prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    //         nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
    //         responsive: [{
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 4,
    //                 slidesToScroll: 1,
    //             }
    //         }, {
    //             breakpoint: 992,
    //             settings: {
    //                 slidesToShow: 6,
    //                 slidesToScroll: 1,
    //             }
    //         }]
    //     });

    // }

    // $(document).ready(function() {
    //     $('.filterGoldevines').on('load', function() {
    //         alert();
    //     });
    // });

    // window.onload = function() {
    //     $('.filterGoldevines').addClass('slick-initialized slick-slider');
    // };
</script>
