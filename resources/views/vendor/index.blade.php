@extends('layouts.app')
@section('contents')
<div class="bg-white dark:bg-gray-600">
    <div class="max-w-screen-2xl md:px-8 px-3 md:py-8 mx-auto">
        <div class="py-8 lg:py-10 px-0 xl:max-w-screen-xl mx-auto flex md:flex-row w-full">
            <div class="flex flex-col md:flex-row w-full">
                <nav class="flex flex-col md:w-2/6 2xl:w-4/12 pb-2 md:pb-0 bg-gray-100 dark:bg-gray-800 rounded md:mr-16 pt-6">
                   <livewire:vendor.shop-details/>
                    <a class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2 {{ (url()->current() == route('vendor.dashboard'))? 'border-r-2 border-fuchsia-700 font-semibold':'' }} " href="{{ route('vendor.dashboard') }}">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256m368-77V64h-48v69">
                            </path>
                        </svg>
                        <span class="px-2">Dashboard</span>
                    </a>
                    <!-- <a class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2 {{ (url()->current() == route('vendor.products'))? 'border-r-2 border-fuchsia-700 font-semibold':'' }} " href="{{ route('vendor.products') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        <span class="px-2">Products</span>
                    </a> -->
                    <ul>
                        <li class="relative px-6 py-3" @if (request()->is('vendor/products') || request()->is('vendor/products/*')) x-data="{isProductsMenuOpen : true}" >
                            <span class="absolute inset-y-0 right-0 w-0.5 bg-fuchsia-700 rounded-tr-lg rounded-br-lg" aria-hidden="true">
                            </span>
                            @else
                            >
                            @endif
                            <button class="inline-flex items-center justify-between w-full text-sm transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 focus:outline-none" :class="{'font-semibold':isProductsMenuOpen}" @click="toggleProductsMenu" aria-haspopup="true">
                                <span class="inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 28.026" fill="currentColor" class="w-5 h-5">
                                        <path d="M22.236 5.187a.836.836 0 00-.529-.568l-9.5-4.062a2.026 2.026 0 00-1.456 0l-9.5 4.062a.835.835 0 00-.529.568.925.925 0 00-.318.722v12.529a1.51 1.51 0 00.814 1.3l9.522 4.578a1.011 1.011 0 00.438.1.761.761 0 01.605 0 1.011 1.011 0 00.438-.1l9.522-4.578a1.51 1.51 0 00.814-1.3V5.909a.925.925 0 00-.321-.722zM11.184 1.576a.969.969 0 01.586 0l8.889 3.8-8.922 4.29a.78.78 0 01-.52 0L2.294 5.375zM1.69 5.087h-.005 0zm0 13.654a.432.432 0 01-.187-.3V6.231l9.229 4.438a.432.432 0 01.187.3v12.21zm9.282 5.076zm1 0zm9.469-5.38a.432.432 0 01-.187.3l-9.229 4.437v-12.21a.431.431 0 01.187-.3l9.229-4.438z" stroke="currentColor" stroke-width=".8"></path>
                                    </svg>
                                    <span class="ml-4">Products</span>
                                </span>
                                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div>
                                <ul x-cloak x-show="isProductsMenuOpen" x-transition:enter="transition ease-in-out duration-700" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-2" class="p-2 mt-2 space-y-2 overflow-hidden text-xs font-medium tracking-wide text-gray-500 border border-gray-200 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                                            @if (url()->current() == route('vendor.products'))
                                            bg-white dark:bg-gray-800 border-l-2 border-fuchsia-700
                                            @endif
                                            ">
                                        <a class="w-full" href="{{ route('vendor.products') }}">
                                            All Products
                                        </a>
                                    </li>
                                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                                        @if (url()->current() == route('vendor.products.create'))
                                        bg-white dark:bg-gray-800 border-l-2 border-fuchsia-700
                                        @endif
                                        ">
                                        <a class="w-full" href="{{ route('vendor.products.create') }}">
                                            Add New Product
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <a class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2 {{ (url()->current() == route('vendor.orders'))? 'border-r-2 border-fuchsia-700 font-semibold':'' }} " href="{{ route('vendor.orders') }}">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="176" cy="416" r="16" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                            <circle cx="400" cy="416" r="16" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 80h64l48 272h256"></path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128">
                            </path>
                        </svg>
                        <span class="px-2">Orders</span>
                    </a>
                    <a class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2 {{ (url()->current() == route('vendor.profile'))? 'border-r-2 border-fuchsia-700 font-semibold':'' }} " href="{{ route('vendor.profile') }}">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z">
                            </path>
                            <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z">
                            </path>
                        </svg>
                        <span class="px-2">Profile</span>
                    </a>
                    <a class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2 {{ (url()->current() == route('vendor.settings'))? 'border-r-2 border-fuchsia-700 font-semibold':'' }} " href="{{ route('vendor.settings') }}">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z">
                            </path>
                        </svg>
                        <span class="px-2">Settings</span>
                    </a>
                    <button class="flex items-center cursor-pointer text-sm lg:text-base  font-normal py-3.5 px-4 lg:px-5 focus:outline-none">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40m64 160l80-80-80-80m-192 80h256">
                            </path>
                        </svg>
                        <span class="px-2">Logout</span>
                    </button>
                </nav>
                <div class="md:w-4/6 2xl:w-8/12 mt-4 md:mt-0 overflow-x-auto md:overflow-visible dark:rounded">
                    @yield('vendor')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection