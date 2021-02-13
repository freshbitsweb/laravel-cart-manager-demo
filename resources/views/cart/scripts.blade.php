<script>
    var addToCartButtons = document.querySelectorAll('.add-to-cart');
    Array.from(addToCartButtons).forEach(function(addToCartButton) {
        addToCartButton.addEventListener('click', function(event) {
            event.preventDefault();
            axios.post('add-to-cart', {
                productId: event.target.dataset.productId
            })
            .then(function (response) {
                updateCartDetails(response.data);
                showNotice('success', 'Item Added to the cart successfully');
            })
            .catch(function (error) {
                showNotice('error', 'Something went wrong!');
            });
        });
    });
    delegate(document.querySelector('#cart-items'), "click", ".remove-cart-item", function(event) {
        event.preventDefault();
        axios.post('remove-from-cart', {
            cartItemIndex: this.dataset.itemIndex
        })
        .then(function (response) {
            updateCartDetails(response.data);
            showNotice('success', 'Item removed from the cart successfully');
        })
        .catch(function (error) {
            showNotice('error', 'Something went wrong!');
        });
    });
    delegate(document.querySelector('#cart-items'), "change", ".cart-item-quantity", function(event) {
        event.preventDefault();
        axios.post('cart-item-quantity-set', {
            cartItemIndex: this.dataset.itemIndex,
            cartQuantity: this.value
        })
        .then(function (response) {
            updateCartDetails(response.data);
            showNotice('success', 'Cart item updated successfully');
        })
        .catch(function (error) {
            showNotice('error', 'Something went wrong!');
        });
    });
    delegate(document.querySelector('#cart-items'), "click", ".increase-item-quantity", function(event) {
        event.preventDefault();
        axios.post('increment-cart-item', {
            cartItemIndex: this.dataset.itemIndex
        })
        .then(function (response) {
            updateCartDetails(response.data);
            showNotice('success', 'Cart item updated successfully');
        })
        .catch(function (error) {
            showNotice('error', 'Something went wrong!');
        });
    });
    delegate(document.querySelector('#cart-items'), "click", ".decrease-item-quantity", function(event) {
        event.preventDefault();
        axios.post('decrement-cart-item', {
            cartItemIndex: this.dataset.itemIndex
        })
        .then(function (response) {
            updateCartDetails(response.data);
            showNotice('success', 'Cart item updated successfully');
        })
        .catch(function (error) {
            showNotice('error', 'Something went wrong!');
        });
    });
    var applyDiscount = document.getElementById('apply-discount');
    applyDiscount.addEventListener('click', function(event) {
        event.preventDefault();
        var discountInput = document.getElementById('discount-input').value;
        var discountType = document.getElementById('discount-type').value;
        axios.post('apply-discount', {
            discountInput: discountInput,
            discountType: discountType,
        })
        .then(function (response) {
            updateCartDetails(response.data);
            showNotice('success', 'Discount applied successfully');
        })
        .catch(function (error) {
            showNotice('error', 'Something went wrong!');
        });
    });
</script>
