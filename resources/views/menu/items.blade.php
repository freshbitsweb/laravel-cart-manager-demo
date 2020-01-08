<div class="flex flex-wrap mb-4">
    @foreach ($products as $product)
        <div class="w-full sm:w-1/2 lg:w-1/3 pl-8 pr-8 pb-8 mb-8">
            <div class="rounded overflow-hidden bg-grey-lighter">
                <img class="w-full" src="{{ $product->getFirstMediaUrl('products') }}" alt="Sunset in the mountains">

                <div class="px-2 py-2">
                    <div class="font-bold text-lg mb-2">
                        {{ $product->name }}
                    </div>

                    <p class="text-grey-darker text-base mb-6 text-justify limit-text">
                        {{ $product->description }}
                    </p>

                    <p class="text-grey-darkest text-center font-bold text-2xl font-bold">
                        ${{ $product->price }}
                    </p>
                </div>

                <div class="px-2 pb-4 text-center">
                    <button class="bg-teal rounded-full pr-4 pl-4 pt-2 pb-2 font-semibold text-white add-to-cart"
                        data-product-id="{{ $product->id }}"
                    >
                        Add To cart
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>

@push('scripts')
    @include('cart.scripts')
@endpush
