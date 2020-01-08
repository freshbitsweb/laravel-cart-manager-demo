<h3 class="mb-6 float-left">
    Cart Details
</h3>

<h3 class="float-right cursor-pointer lg:hidden" id="close-cart">
    &#10007;
</h3>

<div class="clearfix"></div>

<h4 class="text-grey-darker hidden" id="no-cart-item-message">
    No cart item found.
</h4>

<ul class="flex flex-col mb-6" id="cart-items"></ul>

<div class="flex items-center border-b border-b-2 border-teal py-2 mb-6">
    <select name="" class="border border-white-lighter text-grey-darker bg-white py-2 px-2 rounded leading-tight" id="discount-type">
        <option value="1">%</option>
        <option value="2">$</option>
    </select>

    <input class="bg-white border border-white-lighter w-full rounded text-grey-darker mr-3 py-2 mx-3 px-2"
        type="text"
        placeholder="Discount"
        id="discount-input"
    >

    <button class="flex-shrink-0 bg-teal hover:bg-teal-dark border-teal hover:border-teal-dark text-sm border-4 text-white py-1 px-2 rounded"
        type="button"
        id="apply-discount"
    >
        Apply
    </button>
</div>

<ul class="flex flex-col" id="cart-totals"></ul>
