<script>
    var cart = @json($cart);
    var cartButton = document.getElementById('cart-button');
    var closeCart = document.getElementById('close-cart');
    var cartDetails = document.getElementById('cart-container');

    if (window.innerWidth > 769) {
        var stickySidebar = new StickySidebar('#cart-details', {
            containerSelector: '#content-wrapper',
            innerWrapperSelector: '.sidebar__inner',
            topSpacing: 20,
            bottomSpacing: 30
        });
    }

    window.addEventListener('load', function() {
        updateCartDetails(cart);
        cartButton.addEventListener('click', function (e) {
            e.preventDefault();
            toggleCartDetails();
        });
        closeCart.addEventListener('click', function (e) {
            e.preventDefault();
            toggleCartDetails();
        });
    }, true);

    function toggleCartDetails() {
        cartButton.classList.toggle('hidden');
        cartButton.classList.toggle('md:hidden');
        cartDetails.classList.toggle('hidden');
        cartDetails.classList.toggle('md:hidden');
    }

    function updateCartDetails(cart) {
        document.getElementById('cart-items').innerHTML = "";
        document.getElementById('cart-totals').innerHTML = "";
        updateCartItems(cart.items)
        updateCartTotals(cart.totals)
    }

    function updateCartItems(cartItems) {
        var cartItemTemplate = document.getElementById('cart-item-template')
            .getElementsByTagName('li')[0]
        ;
        if (cartItems.length == 0) {
            document.getElementById('no-cart-item-message').classList.remove("hidden");
        } else {
            document.getElementById('no-cart-item-message').classList.add("hidden");
        }
        Array.from(cartItems).forEach(function (item, index) {
            cartItem = cartItemTemplate.cloneNode(true);
            cartItem.getElementsByClassName('cart-item-image')[0].setAttribute("src", item.image);
            cartItem.getElementsByClassName('cart-item-name')[0].innerHTML = item.name;
            cartItem.getElementsByClassName('cart-item-quantity')[0].value = item.quantity;
            cartItem.getElementsByClassName('cart-item-price')[0].innerHTML = item.price;
            cartItem.getElementsByClassName('increase-item-quantity')[0].dataset.itemIndex = index;
            cartItem.getElementsByClassName('decrease-item-quantity')[0].dataset.itemIndex = index;
            cartItem.getElementsByClassName('remove-cart-item')[0].dataset.itemIndex = index;
            document.getElementById('cart-items').appendChild(cartItem);
        });
    }

    function updateCartTotals(totals) {
        var cartTotalTemplate = document.getElementById('cart-total-template')
            .getElementsByTagName('li')[0];

        if (totals.hasOwnProperty("Discount") != true) {
            document.getElementById('discount-input').value = '';
        }

        for (var key in totals) {

            cartTotal = cartTotalTemplate.cloneNode(true);
            cartTotal.getElementsByClassName('flex')[0].classList.remove("border-t");
            cartTotal.getElementsByClassName('flex')[0].classList.remove("border-teal");

            separateBillWithLine(key, cartTotal);

            cartTotal.getElementsByClassName('cart-total-label')[0].innerHTML = key;
            cartTotal.getElementsByClassName('cart-total-value')[0].innerHTML = totals[key];

            document.getElementById('cart-totals').appendChild(cartTotal);
        }

        if (window.innerWidth > 769) {
            stickySidebar.updateSticky();
        }
    }

    function separateBillWithLine(key, cartTotal) {
        if (key == 'Net total') {
            cartTotal.children[0].classList.add("border-t");
            cartTotal.children[0].classList.add("border-teal");
        }

        if (key == 'Total') {
            cartTotal.children[0].classList.add("border-t");
            cartTotal.children[0].classList.add("border-teal");
        }

        if (key == 'Payable') {
            cartTotal.children[0].classList.add("border-t");
            cartTotal.children[0].classList.add("border-teal");
        }
    }
</script>
