@extends('layouts.app')

@section('content')
    <div class="flex mb-4" id="content-wrapper">
        <div class="w-full sm:w-full lg:w-3/4">
            @include('menu.items')
        </div>

        <div id="cart-container" class="hidden md:hidden bg-white lg:block overflow-auto lg:overflow-visible md:w-1/2 lg:w-1/4 fixed lg:static pin-r pin-t pin-b pl-4">
            <div id="cart-details">
                <div class="sidebar__inner shadow-none lg:shadow-lg rounded">
                    <div class="shadow-none lg:shadow-lg rounded p-4">
                        @include('menu.cart')
                    </div>
                </div>
            </div>
        </div>

        <a id="cart-button" class="cart-icon block lg:hidden fixed rounded-full bg-teal pl-3 pt-2 pr-3 pb-2">
            <img src="{{ asset('images/cart.svg') }}" alt="Cart Icon" width="28" class="pt-1">
        </a>
    </div>

    {{-- Cart item template --}}
    @include('cart.item_template')
@endsection

@push('scripts')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    @include('menu.scripts')
@endpush
