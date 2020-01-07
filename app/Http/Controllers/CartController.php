<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Add to cart
     *
     * @return json
     */
    public function addToCart()
    {
        Product::addToCart(request('productId'));
        return $this->getCartDetails();
    }
    /**
     * Remove from cart
     *
     * @return json
     */
    public function removeFromCart()
    {
        cart()->removeAt(request('cartItemIndex'));
        return $this->getCartDetails();
    }
    /**
     * Increment cart item quantity
     *
     * @return json
     */
    public function incrementCartItem()
    {
        cart()->incrementQuantityAt(request('cartItemIndex'));
        return $this->getCartDetails();
    }
    /**
     * Decrement cart item quantity
     *
     * @return json
     */
    public function decrementCartItem()
    {
        cart()->decrementQuantityAt(request('cartItemIndex'));
        return $this->getCartDetails();
    }
    /**
     * Applies the discount to the cart
     *
     * @return json
     */
    public function applyDiscount()
    {
        if (request('discountType') == 1) {
            cart()->applyDiscount($percentage = request('discountInput'));
            return $this->getCartDetails();
        }
        cart()->applyFlatDiscount($amount = request('discountInput'));
        return $this->getCartDetails();
    }
}
