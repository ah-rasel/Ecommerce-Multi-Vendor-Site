<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') ?? "Ecommerce | Multivendor" }}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('slider-style')
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireStyles
    <style>
        [x-cloak] {
            display: none
        }
    </style>
</head>

<body :class="{ 'dark': dark }" x-data="data()">
    <div class="font-lato">
        <div class="flex flex-col min-h-screen transition-colors duration-150 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
            <x-header.main></x-header.main>
            <div class="flex flex-1 pt-20">
                <!-- Mobile Menu -->
                <x-header.menus.mobile></x-header.menus.mobile>
                <main class="relative w-full">
                    <!-- Backdrop filter on side menu open -->
                    <div x-cloak class="absolute z-10 w-full h-full bg-gray-800 opacity-40" :class="{ 'hidden': !isBackdropOpen,'lg:hidden':isSideMenuOpen }">
                    </div>

                    <div class="relative h-full overflow-y-auto pt-7 md:pt-10">
                        @yield('contents')
                        <x-global.product-modal></x-global.product-modal>

                        <!-- Footer -->
                        <x-footer></x-footer>
                        <!-- Mobile bottom fix menu -->
                        <x-header.menus.mobile-bottom></x-header.menus.mobile-bottom>
                        <!-- Cart -->
                        <livewire:user.cart>
                    </div>
                </main>
            </div>
        </div>
    </div>
    @yield('slider-script')
    <script src="{{asset('js/custom.js')}}"></script>
    @livewireScripts
</body>

</html>