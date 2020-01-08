<ul class="hidden" id="cart-item-template">
    <li class="p-2 mb-4">
        <div class="flex">
            <div class="font-bold text-grey-darker text-md mb-2 h-12 mr-3">
                <img class="cart-item-image" alt="image" width="80">
            </div>

            <div class="h-12">
                <div class="font-bold text-grey-darker text-md mb-2 cart-item-name"></div>

                <div class="text-grey-darkest font-bold text-xl font-bold mb-2 cart-item-price"></div>
            </div>
        </div>

        <div class="flex items-center border-b border-b-2 border-teal pb-2">
            <input class="appearance-none bg-transparent border-none w-full text-grey-darker mr-3 py-1 px-2 cart-item-quantity"
                type="text"
                readonly
            >

            <button class="flex-shrink-0 bg-grey-dark hover:bg-grey-darker border-grey-dark hover:border-grey-darker text-sm border-4 text-white py-0 px-1 rounded mr-2 increase-item-quantity" type="button">
                +
            </button>

            <button class="flex-shrink-0 bg-grey-dark hover:bg-grey-darker border-grey-dark hover:border-grey-darker text-sm border-4 text-white py-0 px-1 rounded mr-2 decrease-item-quantity" type="button" id="decrease-cart-item-quantity">
                -
            </button>

            <button class="flex-shrink-0 bg-red hover:bg-red-dark border-red hover:border-red-dark text-sm border-4 text-white py-0 px-1 rounded remove-cart-item" type="button">
                x
            </button>
        </div>
    </li>
</ul>

<ul class="hidden" id="cart-total-template">
    <li>
        <div class="flex mb-4">
            <div class="w-1/2 cart-total-label"></div>
            <div class="w-1/2 text-right cart-total-value"></div>
        </div>
    </li>
</ul>
