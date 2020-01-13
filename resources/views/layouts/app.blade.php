<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ mix('css/vendor.css') }}" rel="stylesheet">
    <style>
        .cart-icon {
            bottom: 20px;
            right: 20px;
        }
        .limit-text {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        #cart-details{
			will-change: min-height;
		}
		#cart-details .sidebar__inner{
			position: relative;
			transform: translate(0, 0);
			transform: translate3d(0, 0, 0);
			will-change: position, transform;
		}
        .sidebar__inner{
            transform: translate(0, 0); /* For browsers don't support translate3d. */
            transform: translate3d(0, 0, 0);
            will-change: position, transform;
        }
        .cart-item-name {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            width: 140px;
        }
    </style>
</head>
<body class="h-screen">
    <div id="app">
        <nav class="bg-white h-12 shadow mb-8 px-6">
            <div class="container mx-auto h-full">
                <div class="flex items-center justify-center h-12">
                    <div class="mr-6">
                        <a href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="flex-1 text-right">
                        <a class="no-underline hover:underline text-grey-darker pr-3 text-sm"
                            href="https://github.com/freshbitsweb/laravel-cart-manager"
                            target="_blank"
                        >
                            Package Source
                        </a>

                        <a class="no-underline hover:underline text-grey-darker pr-3 text-sm"
                            href="https://github.com/freshbitsweb/laravel-cart-manager-demo"
                            target="_blank"
                        >
                            Demo Source
                        </a>

                        <a class="no-underline hover:underline text-grey-darker text-sm"
                            href="https://docs.freshbits.in/laravel-cart-manager"
                            target="_blank"
                        >
                            Documentation
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container mx-auto px-8">
            @yield('content')
        </div>
    </div>

    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>
