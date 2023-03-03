<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>


<script>
    function increment() {
        var value = parseInt(document.getElementById('addOrRemove').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('addOrRemove').value = value;
    }

    function decrement() {
        var value = parseInt(document.getElementById('addOrRemove').value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        if (value > 1) {
            value--;
        }
        document.getElementById('addOrRemove').value = value;
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
