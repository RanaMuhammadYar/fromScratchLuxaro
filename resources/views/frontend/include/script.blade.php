<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>


<script>
    $('.openLuxaroSidebar').click(function(){
        $('.common').addClass('close');
        $('.common').removeClass('show');
        $('.LuxaroSidebar').addClass('show');
        $('.LuxaroSidebarbtn').addClass('show');
    });
    $('.openGoldEvineSidebar').click(function(){
        $('.common').addClass('close');
        $('.common').removeClass('show');
        $('.GoldEvineSidebar').addClass('show');
        $('.GoldEvineSidebarbtn').addClass('show');
    });
    $('.openGMGSidebar').click(function(){
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

        // console.log(quantity);
        // console.log(product_id);
        // console.log(name);
        // console.log(price);
        // return false;
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
                    return false;
                } else {
                    swal({
                        title: "Success!",
                        text: response.success,
                        icon: "success",
                        button: "Ok",
                    });

                }

                $('.catdata').append(
                    '<div class="row destroy' + response.id +
                    '"><div class="col-5 px-1"><span class="mx-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span><span>' +
                    response.cart.name +
                    '</span></div><div class="col-1 px-1"><span><i class="fa fa-times" aria-hidden="true" onclick="orderdestroy(' +
                    response.id + ')"style="cursor: pointer;"></i></span></div><div class="col-3 px-1"><span>' +
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
    //         var index = existingProducts.findIndex(function(p) {
    //             return p.id == product_id;
    //         });
    //         if (index !== -1) {
    //             existingProducts[index].quantity += quantity;
    //         } else {
    //             existingProducts.push(product);
    //         }
    //         sessionStorage.setItem('products', JSON.stringify(existingProducts));
    //     } else {
    //         sessionStorage.setItem('products', JSON.stringify([product]));
    //     }
    //     var products = JSON.parse(sessionStorage.getItem('products'));
    //     var total = 0;
    //     $('.catdata').html('');
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
