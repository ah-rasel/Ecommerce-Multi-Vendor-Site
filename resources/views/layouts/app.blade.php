<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce | Frontend</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    @livewireStyles
</head>

<body :class="{ 'dark': dark }" x-data="data()">
    <div class="font-lato">
        <div class="flex flex-col min-h-screen transition-colors duration-150 bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
            <header class="fixed z-40 w-full bg-white shadow dark:bg-gray-800">
                <!-- Header Top-Bar -->
                <div class="text-sm text-gray-500 bg-gray-100 dark:bg-gray-600 dark:text-gray-300 ">
                    <div class="block md:flex items-center justify-between px-2 mx-auto max-w-screen-2xl md:px-8 py-1.5 text-sm md:text-base md:py-0">
                        <div class="items-center space-y-1 text-center md:flex md:text-left md:space-y-0 md:space-x-6">
                            <p class="hidden md:block">Welcome to Our store "Store Name"</p>
                            <div class="flex items-center justify-center space-x-1 md:justify-start md:space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <a href="tel:+01303132018">Call Us :+88<span class="ml-1">01303132018</span></a>
                            </div>
                        </div>
                        <div class="items-center hidden md:flex">
                            <div class="px-4 pt-2">
                                <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                                    <template x-if="!dark">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                            </path>
                                        </svg>
                                    </template>
                                    <template x-if="dark">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </template>
                                </button>
                            </div>
                            <div class="group py-3.5 px-2">
                                <div class="relative overflow-hidden group-hover:overflow-visible">
                                    <div class="flex items-center space-x-1 text-sm cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <p>My Account</p>
                                    </div>
                                    <div class="absolute z-10 px-6 py-2 pr-16 font-semibold text-gray-800 transition duration-700 transform translate-y-5 bg-white shadow opacity-0 group-hover:opacity-100 group-hover:translate-y-0 dark:bg-gray-700 dark:text-gray-200 top-8 -left-10">
                                        <ul class="space-y-2">
                                            <li>
                                                <a href="/login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="/register.html">Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Desktop Menu -->
                <nav class="flex items-center justify-between px-2 py-4 mx-auto md:px-8 max-w-screen-2xl">
                    <!-- Mobile Hamburger Menu -->
                    <button @click="toggleSideMenu" @click.away="closeSideMenu" class="flex items-center justify-center h-full p-2 focus:outline-none focus:text-emerald-400 dark:focus:text-gray-400 lg:hidden">
                        <svg width="25.567" height="18" viewBox="0 0 25.567 18">
                            <g transform="translate(-776 -462)">
                                <rect width="12.749" height="2.499" rx="1.25" transform="translate(776 462)" fill="currentColor"></rect>
                                <rect width="25.567" height="2.499" rx="1.25" transform="translate(776 469.75)" fill="currentColor"></rect>
                                <rect width="17.972" height="2.499" rx="1.25" transform="translate(776 477.501)" fill="currentColor"></rect>
                            </g>
                        </svg>
                    </button>
                    <!-- Logo -->
                    <div class="md:flex">
                        <a href="/index.html" class="flex items-center w-32 h-10 p-0 m-0">
                            <img src="images/logo.webp" alt="By Md Rasel">
                        </a>
                    </div>
                    <!-- Search Form -->
                    <div class="flex-shrink hidden w-full px-10 mx-auto overflow-hidden lg:block xl:w-10/12">
                        <form class="w-full">
                            <div class="relative flex h-8 rounded md:rounded-lg md:h-10">
                                <input id="grocery search at header" type="text" autocomplete="off" class="flex items-center w-full h-full px-10 pr-12 overflow-hidden text-sm placeholder-gray-500 transition duration-300 ease-in-out bg-gray-100 border border-blue-200 rounded-lg appearance-none focus:outline-none focus:ring-0 md:px-14 focus:border-blue-500 focus" name="search" placeholder="Search your products from here" value="">
                                <button class="absolute flex items-center justify-center w-10 h-full transition-colors duration-200 md:w-14 start-0 text-body focus:outline-none hover:text-accent-hover focus:text-accent-hover">
                                    <span class="absolute w-[1px] h-[1px] p-0 m-[-1px] overflow-hidden whitespace-nowrap border-0">Search</span>
                                    <svg viewBox="0 0 17.048 18" class="w-4 h-4">
                                        <path d="M380.321,383.992l3.225,3.218c.167.167.341.329.5.506a.894.894,0,1,1-1.286,1.238c-1.087-1.067-2.179-2.131-3.227-3.236a.924.924,0,0,0-1.325-.222,7.509,7.509,0,1,1-3.3-14.207,7.532,7.532,0,0,1,6,11.936C380.736,383.462,380.552,383.685,380.321,383.992Zm-5.537.521a5.707,5.707,0,1,0-5.675-5.72A5.675,5.675,0,0,0,374.784,384.513Z" transform="translate(-367.297 -371.285)" fill="currentColor">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Header Right side div -->
                    <div class="flex items-center flex-shrink-0 space-x-8 ">
                        <ul class="hidden space-x-5 tracking-wider text-gray-600 md:flex dark:text-gray-300">
                            <li class="group">
                                <!-- Active -->
                                <a href="/index.html" class="relative font-semibold text-gray-800 dark:text-gray-200">
                                    Home
                                    <!-- 
                                        Active 
                                        remove [-translate-x-9 , opacity-0]
                                     -->
                                    <div class="absolute w-full h-1 bg-blue-500 rounded -bottom-7"></div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="/shop.html" class="relative">Shop
                                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded opacity-0 group-hover:opacity-100 -translate-x-9 group-hover:translate-x-0 -bottom-7">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="/All_Shops.html" class="relative">
                                    All Shops
                                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded opacity-0 group-hover:opacity-100 -translate-x-9 group-hover:translate-x-0 -bottom-7">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="#" class="relative">About
                                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded opacity-0 group-hover:opacity-100 -translate-x-9 group-hover:translate-x-0 -bottom-7">
                                    </div>
                                </a>
                            </li>
                            <li class="group">
                                <a href="/Contact.html" class="relative">Contact
                                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded opacity-0 group-hover:opacity-100 -translate-x-9 group-hover:translate-x-0 -bottom-7">
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="relative flex items-center justify-center p-2 bg-blue-400">
                            <button @click="toggleCart" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </button>
                            <span class="text-xs text-center w-5 h-5 flex items-center justify-center bg-gray-700 text-white absolute -top-2.5 xl:-top-3 -right-2.5 xl:-right-3 rounded-full font-bold">0</span>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="flex flex-1 pt-20">
                <!-- Mobile Menu -->
                <div class="fixed bottom-0 left-0 z-20 h-full px-4 overflow-y-auto transition duration-300 transform -translate-x-full bg-white shadow pt-28 w-72 xl:w-76 lg:block dark:bg-gray-800" :style="isSideMenuOpen && {transform:'translateX(0)'}" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <!-- Mobile sidebar menu -->
                    <div class="flex flex-col py-3 space-y-6 overflow-auto">
                        <a href="/index.html" class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.2 16.2" class="w-5 h-5">
                                <g data-name="menu (1)">
                                    <g data-name="Group 36282">
                                        <path data-name="Path 22647" d="M6.433 5.433H1.1a1 1 0 01-1-1V1.1a1 1 0 011-1h5.333a1 1 0 011 1v3.333a1 1 0 01-1 1zM1.1.767a.334.334 0 00-.333.333v3.333a.334.334 0 00.333.334h5.333a.334.334 0 00.333-.333V1.1a.334.334 0 00-.333-.333z" fill="currentColor" stroke="currentColor" stroke-width=".2"></path>
                                    </g>
                                    <g data-name="Group 36283">
                                        <path data-name="Path 22648" d="M6.433 16.1H1.1a1 1 0 01-1-1V7.767a1 1 0 011-1h5.333a1 1 0 011 1V15.1a1 1 0 01-1 1zM1.1 7.434a.334.334 0 00-.333.333V15.1a.334.334 0 00.333.334h5.333a.334.334 0 00.333-.333V7.767a.334.334 0 00-.333-.333z" fill="currentColor" stroke="currentColor" stroke-width=".2"></path>
                                    </g>
                                    <g data-name="Group 36284">
                                        <path data-name="Path 22649" d="M15.1 16.1H9.767a1 1 0 01-1-1v-3.333a1 1 0 011-1H15.1a1 1 0 011 1V15.1a1 1 0 01-1 1zm-5.333-4.666a.334.334 0 00-.333.333V15.1a.334.334 0 00.333.333H15.1a.334.334 0 00.333-.333v-3.333a.334.334 0 00-.333-.333z" fill="currentColor" stroke="currentColor" stroke-width=".2"></path>
                                    </g>
                                    <g data-name="Group 36285">
                                        <path data-name="Path 22650" d="M15.1 9.433H9.767a1 1 0 01-1-1V1.1a1 1 0 011-1H15.1a1 1 0 011 1v7.333a1 1 0 01-1 1zM9.767.767a.334.334 0 00-.333.333v7.333a.334.334 0 00.333.334H15.1a.334.334 0 00.333-.333V1.1A.334.334 0 0015.1.767z" fill="currentColor" stroke="currentColor" stroke-width=".2"></path>
                                    </g>
                                </g>
                            </svg>
                            <span>Home</span>
                        </a>
                        <a class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400" href="/shop.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.3 15.057" class="w-5 h-5">
                                <g fill="currentColor" stroke="currentColor" stroke-width=".3">
                                    <path data-name="Path 22617" d="M2.258.92a.218.218 0 01.2-.128h13.365a.218.218 0 01.2.127l1.487 3.247a1.125 1.125 0 01-2.249-.066.328.328 0 00-.007-.065.321.321 0 00-.636.065 1.125 1.125 0 01-2.251 0 .321.321 0 00-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.249.065L2.261.92zm6.738 13.345V7.694a.6.6 0 00-.6-.6H3.95a.6.6 0 00-.6.6v6.575H2.139V5.858a1.569 1.569 0 012.676.014 1.765 1.765 0 012.893 0 1.765 1.765 0 012.893 0 1.765 1.765 0 012.893 0 1.548 1.548 0 012.652-.017v8.414zm-5.009-.006V7.734H8.35v6.525zM1.492 5.816v8.77a.321.321 0 00.321.321h14.649a.321.321 0 00.321-.321V5.822a1.77 1.77 0 001.366-1.721.321.321 0 00-.029-.134L16.602.652a.862.862 0 00-.782-.5H2.456a.861.861 0 00-.784.506L.178 3.971a.321.321 0 00-.028.132 1.771 1.771 0 001.342 1.715z">
                                    </path>
                                    <path data-name="Path 22618" d="M15.008 11.895h-4.7V7.734h4.7v4.162zm0-4.8h-4.7a.642.642 0 00-.641.641v4.163a.642.642 0 00.641.641h4.7a.642.642 0 00.641-.641V7.736a.642.642 0 00-.641-.641z">
                                    </path>
                                </g>
                            </svg>
                            <span>Shop</span>
                        </a>
                        <a class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400" href="/All_Shops.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.828 14.8" class="w-5 h-5">
                                <g data-name="my shop" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=".8">
                                    <path data-name="Line 1" d="M15.237 14.4V4.883"></path>
                                    <path data-name="Line 2" d="M1.59 14.4V4.883"></path>
                                    <path data-name="Path 22619" d="M15.316 1.677a.626.626 0 00.612-.639h0a.626.626 0 00-.612-.639h-13.8a.639.639 0 000 1.277">
                                    </path>
                                    <path data-name="Path 22620" d="M13.875 6.616v4.986a.7.7 0 01-.683.712H9.023a.7.7 0 01-.683-.712V6.617a.7.7 0 01.683-.712h4.169a.7.7 0 01.683.711z">
                                    </path>
                                    <path data-name="Path 22621" d="M2.954 14.4V8.495a.7.7 0 01.684-.714h2.539a.7.7 0 01.684.714V14.4"></path>
                                    <path data-name="Line 3" d="M3.706 11.007v.38"></path>
                                    <path data-name="Path 22622" d="M3.791 4.897h0a1.13 1.13 0 01-.98-1.618l.729-1.6h1.95l-.656 2.4a1.092 1.092 0 01-1.043.818z">
                                    </path>
                                    <path data-name="Path 22623" d="M8.414 4.897h0A1.185 1.185 0 017.266 3.58l.174-1.9h1.95l.174 1.9a1.185 1.185 0 01-1.15 1.317z">
                                    </path>
                                    <path data-name="Path 22624" d="M13.039 4.897h0a1.094 1.094 0 01-1.044-.822l-.656-2.4h1.95l.729 1.6a1.129 1.129 0 01-.979 1.622z">
                                    </path>
                                    <path data-name="Path 22625" d="M1.431 4.897h0a1.062 1.062 0 01-.845-1.646l1-1.574h1.95L2.344 4.293a1.013 1.013 0 01-.913.604z">
                                    </path>
                                    <path data-name="Path 22626" d="M5.955 4.897h0a1.051 1.051 0 01-.976-1.35l.51-1.87h1.95l-.18 1.983a1.333 1.333 0 01-1.304 1.237z">
                                    </path>
                                    <path data-name="Path 22627" d="M10.715 4.897h0a1.155 1.155 0 01-1.131-1.072l-.2-2.148h1.95l.468 1.71a1.175 1.175 0 01-1.087 1.51z">
                                    </path>
                                    <path data-name="Path 22628" d="M15.398 4.897a1.009 1.009 0 01-.916-.6L13.29 1.676h1.948l1 1.575a1.061 1.061 0 01-.84 1.646z">
                                    </path>
                                    <path data-name="Line 4" d="M1.135 14.4h14.559"></path>
                                </g>
                            </svg>
                            <span>All Shops</span>
                        </a>
                        <a class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400" href="/Offers.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 28.026" fill="currentColor" class="w-5 h-5">
                                <path d="M22.236 5.187a.836.836 0 00-.529-.568l-9.5-4.062a2.026 2.026 0 00-1.456 0l-9.5 4.062a.835.835 0 00-.529.568.925.925 0 00-.318.722v12.529a1.51 1.51 0 00.814 1.3l9.522 4.578a1.011 1.011 0 00.438.1.761.761 0 01.605 0 1.011 1.011 0 00.438-.1l9.522-4.578a1.51 1.51 0 00.814-1.3V5.909a.925.925 0 00-.321-.722zM11.184 1.576a.969.969 0 01.586 0l8.889 3.8-8.922 4.29a.78.78 0 01-.52 0L2.294 5.375zM1.69 5.087h-.005 0zm0 13.654a.432.432 0 01-.187-.3V6.231l9.229 4.438a.432.432 0 01.187.3v12.21zm9.282 5.076zm1 0zm9.469-5.38a.432.432 0 01-.187.3l-9.229 4.437v-12.21a.431.431 0 01.187-.3l9.229-4.438z" stroke="currentColor" stroke-width=".8"></path>
                            </svg>
                            <span>Offers</span>
                        </a>
                        <a class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400" href="/Contact.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.737 19.2" class="w-5 h-5">
                                <g id="attribute" transform="translate(-6019.363 -2902.9)">
                                    <path id="settings-outline" d="M57.257,48.321a2.784,2.784,0,0,0-2.775,1.527,2.636,2.636,0,0,0,.545,3.054,2.828,2.828,0,0,0,3.142.53,2.679,2.679,0,0,0,1.571-2.7A2.737,2.737,0,0,0,57.257,48.321ZM63.925,51a6.312,6.312,0,0,1-.066.874l1.956,1.491a.446.446,0,0,1,.106.578l-1.85,3.112a.474.474,0,0,1-.569.193l-1.943-.76a.714.714,0,0,0-.656.074,7.168,7.168,0,0,1-.932.527.672.672,0,0,0-.382.511L59.3,59.614a.475.475,0,0,1-.462.386h-3.7a.477.477,0,0,1-.463-.373l-.291-2.011a.678.678,0,0,0-.389-.514,6.767,6.767,0,0,1-.928-.529.709.709,0,0,0-.654-.072l-1.942.76a.474.474,0,0,1-.569-.193l-1.85-3.112a.446.446,0,0,1,.106-.578l1.653-1.262a.667.667,0,0,0,.26-.592c-.016-.175-.025-.35-.025-.526s.009-.348.025-.519a.665.665,0,0,0-.263-.586l-1.652-1.262a.446.446,0,0,1-.1-.575l1.85-3.112a.474.474,0,0,1,.569-.193l1.943.76a.714.714,0,0,0,.656-.074A7.168,7.168,0,0,1,54,44.91a.672.672,0,0,0,.382-.511l.291-2.014A.475.475,0,0,1,55.135,42h3.7a.477.477,0,0,1,.463.373l.291,2.011a.678.678,0,0,0,.389.514,6.767,6.767,0,0,1,.928.529.709.709,0,0,0,.654.072l1.942-.76a.474.474,0,0,1,.569.193l1.85,3.112a.446.446,0,0,1-.106.578l-1.653,1.262a.667.667,0,0,0-.262.592C63.915,50.65,63.925,50.825,63.925,51Z" transform="translate(5972.015 2861.5)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                    <g id="Group_36413" data-name="Group 36413" transform="translate(6042.5 2904.625)">
                                        <line id="Line_1" data-name="Line 1" x2="9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"></line>
                                        <line id="Line_2" data-name="Line 2" x2="9" transform="translate(0 3.75)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                        </line>
                                        <line id="Line_3" data-name="Line 3" x2="9" transform="translate(0 7.5)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                        </line>
                                        <line id="Line_4" data-name="Line 4" x2="9" transform="translate(0 11.25)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                        </line>
                                        <line id="Line_5" data-name="Line 5" x2="4.5" transform="translate(0 15)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2">
                                        </line>
                                    </g>
                                </g>
                            </svg>
                            <span>Contact</span>
                        </a>
                        <a class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400" href="/Checkout.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 86.02 86.02" class="w-5 h-5" fill="currentColor">
                                <path d="M.354 48.874l.118 25.351a.89.89 0 00.467.779l20.249 10.602a.886.886 0 00.421.106h.002a.926.926 0 00.211.182.882.882 0 00.878.02l19.992-10.842a.89.89 0 00.392-.445.898.898 0 00.364.379l20.248 10.602a.89.89 0 00.422.106h.002a.965.965 0 00.21.182.894.894 0 00.878.02L85.2 75.071a.89.89 0 00.467-.783V47.911c0-.008-.004-.016-.004-.022l.002-.021c-.001-.023-.01-.049-.014-.072a1.174 1.174 0 00-.027-.146.91.91 0 00-.038-.093c-.019-.042-.037-.082-.062-.12a1.048 1.048 0 00-.154-.181.925.925 0 00-.083-.066c-.02-.012-.034-.03-.056-.043-.02-.011-.041-.017-.062-.025-.019-.01-.03-.022-.049-.029l-20.603-9.978c-.082-.034-.17-.038-.257-.047V10.865l-.002-.022c-.001-.007.001-.013.001-.02-.001-.025-.012-.049-.015-.073a1.159 1.159 0 00-.027-.145.755.755 0 00-.038-.093c-.02-.042-.036-.083-.062-.12-.02-.03-.041-.057-.062-.084a.88.88 0 00-.174-.162c-.021-.014-.035-.032-.056-.045-.021-.011-.042-.016-.062-.026-.019-.009-.031-.021-.048-.027L43.118.07a.885.885 0 00-.746.025L22.009 10.71a.89.89 0 00-.489.79l.002.016a.886.886 0 00-.063.312l.118 25.233a.892.892 0 00-.311.079L.903 47.755a.891.891 0 00-.489.791c0 .005.003.009.003.015a.844.844 0 00-.063.313zm60.967-37.91L43.372 21l-19.005-9.485 18.438-9.646 18.516 9.095zm1.165 26.044l-18.214 9.586V22.535l18.214-10.18v24.653zm3.188 22.572l18.214-10.179v24.355l-18.214 9.883V59.58zM45.77 48.559l18.438-9.646 18.515 9.099-17.948 10.033-19.005-9.486zM23.165 59.58L41.38 49.402v24.355l-18.215 9.882V59.58zM3.262 48.559L21.7 38.913l18.515 9.099-17.949 10.033-19.004-9.486z">
                                </path>
                            </svg>
                            <span>Checkout</span>
                        </a>
                        <a class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400" href="/Profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span>Profile</span>
                        </a>
                        <a class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400" href="/Orders.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                </path>
                            </svg>
                            <span>Orders</span>
                        </a>
                        <a class="flex items-center w-full space-x-4 text-base text-body-dark text-start focus:text-emerald-400 dark:focus:text-gray-400" href="/Dashboard.html">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.352 21.073" class="w-5 h-5">
                                <g data-name="Group 5777">
                                    <g data-name="Group 5776">
                                        <path data-name="Path 843" d="M18.269 5.816l-.016-.027a1 1 0 00-.074-.129L15.247.592A1.189 1.189 0 0014.221 0H4.131a1.189 1.189 0 00-1.027.593L.125 5.762a.618.618 0 00-.06.145A1.044 1.044 0 000 6.27v13.35a1.454 1.454 0 001.452 1.452h15.447a1.454 1.454 0 001.452-1.452V6.222v-.053a.615.615 0 00-.082-.353zM9.815 1.235h4.378l2.305 3.987H9.815zm-5.654 0H8.58v3.987H1.862zm12.955 18.386a.217.217 0 01-.217.217H1.452a.217.217 0 01-.217-.217V6.458h15.881z" fill="currentColor"></path>
                                    </g>
                                </g>
                                <g data-name="Group 5779">
                                    <g data-name="Group 5778">
                                        <path data-name="Path 844" d="M11.979 11.114a.618.618 0 00-.873 0l-2.758 2.758-1.06-1.06a.618.618 0 10-.873.873l1.5 1.5a.617.617 0 00.873 0l3.194-3.194a.618.618 0 00-.003-.877z" fill="currentColor"></path>
                                    </g>
                                </g>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </div>

                </div>
                <!-- Mobile bottom fix menu is now below footer-->
                <main class="relative w-full">
                    <!-- Backdrop filter on side menu open -->
                    <div class="absolute z-10 w-full h-full bg-gray-800 opacity-40" :class="{ 'hidden': !isBackdropOpen,'lg:hidden':isSideMenuOpen }">
                    </div>

                    <div class="relative h-full overflow-y-auto pt-7 md:pt-10">
                        @yield('contents')
                        <!-- Footer -->
                        <footer class="z-0 pt-8 mt-6 text-gray-700 bg-white border-b-4 border-gray-200 dark:bg-gray-800 dark:border-gray-900 dark:text-gray-200">
                            <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
                                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-5 md:gap-9 xl:gap-5 pb-9 md:pb-14 lg:pb-16 2xl:pb-20 lg:mb-0.5 2xl:mb-0">
                                    <div class="col-span-2 pb-3 mt-3 space-y-4 md:px-4 md:pb-0">
                                        <img class="object-cover mx-auto w-44 md:ml-0" src="http://themes.pixelstrap.com/multikart/assets/images/icon/logo.png" alt="By Md Rasel">
                                        <p class="text-justify text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit
                                            amet consectetur
                                            adipisicing elit. Dicta quia magni iste nemo adipisci itaque ipsa ab
                                            sunt
                                            quibusdam enim, quos culpa recusandae consequuntur. Nemo porro voluptate
                                            itaque vitae blanditiis.
                                        </p>
                                        <div class="flex justify-center space-x-6 md:justify-start">
                                            <div class="flex items-center justify-center border rounded-full shadow cursor-pointer h-11 w-11 group hover:bg-gray-700 bg-gray-50 dark:bg-gray-700">
                                                <svg stroke="currentColor" class="w-5 h-5 transition duration-300 transform group-hover:text-gray-200" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z">
                                                    </path>
                                                    <path d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-center border rounded-full shadow cursor-pointer h-11 w-11 group hover:bg-gray-700 bg-gray-50 dark:bg-gray-700">
                                                <svg stroke="currentColor" class="w-5 h-5 transition duration-300 transform group-hover:text-gray-200" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-center border rounded-full shadow cursor-pointer h-11 w-11 group hover:bg-gray-700 bg-gray-50 dark:bg-gray-700">
                                                <svg stroke="currentColor" class="w-4 h-4 transition duration-300 transform group-hover:text-gray-200" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9zM207 353.89v-196.5l145 98.2z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex items-center justify-center border rounded-full shadow cursor-pointer h-11 w-11 group hover:bg-gray-700 bg-gray-50 dark:bg-gray-700">
                                                <svg stroke="currentColor" class="w-5 h-5 transition duration-300 transform group-hover:text-gray-200" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pb-3 md:pb-0">
                                        <h4 class="mb-5 text-sm font-semibold text-gray-800 dark:text-gray-200 md:text-base xl:text-lg 2xl:mb-6 3xl:mb-7">
                                            Contact</h4>
                                        <ul class="text-xs lg:text-sm text-gray-500 dark:text-gray-400 flex flex-col space-y-3 lg:space-y-3.5">
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Contact Us</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="/">yourexample@email.com</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">example@email.com</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Call us: +1 254 568-5479</a></li>
                                        </ul>
                                    </div>
                                    <div class="pb-3 md:pb-0">
                                        <h4 class="mb-5 text-sm font-semibold text-gray-800 dark:text-gray-200 md:text-base xl:text-lg 2xl:mb-6 3xl:mb-7">
                                            About</h4>
                                        <ul class="text-xs lg:text-sm text-gray-500 dark:text-gray-400 flex flex-col space-y-3 lg:space-y-3.5">
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Support Center</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="/">Customer Support</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">About Us</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Copyright</a></li>
                                        </ul>
                                    </div>
                                    <div class="pb-3 md:pb-0">
                                        <h4 class="mb-5 text-sm font-semibold text-gray-800 dark:text-gray-200 md:text-base xl:text-lg 2xl:mb-6 3xl:mb-7">
                                            Customer Care</h4>
                                        <ul class="text-xs lg:text-sm text-gray-500 dark:text-gray-400 flex flex-col space-y-3 lg:space-y-3.5">
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">FAQ
                                                    &amp; Helps</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Shipping &amp; Delivery</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Return &amp; Exchanges</a></li>
                                        </ul>
                                    </div>
                                    <div class="pb-3 md:pb-0">
                                        <h4 class="mb-5 text-sm font-semibold text-gray-800 dark:text-gray-200 md:text-base xl:text-lg 2xl:mb-6 3xl:mb-7">
                                            Our Information</h4>
                                        <ul class="text-xs lg:text-sm text-gray-500 dark:text-gray-400 flex flex-col space-y-3 lg:space-y-3.5">
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Privacy policy update</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Terms &amp; conditions</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Return Policy</a></li>
                                            <li class="flex items-baseline"><a class="transition-colors duration-200 hover:text-black dark:hover:text-gray-300" href="#">Site Map</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="py-5 pb-16 mb-2 border-t border-gray-300 sm:pb-20 md:pb-5 sm:mb-0">
                                <div class="flex flex-col-reverse md:flex-row text-center md:justify-center mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
                                    <p class="text-xs leading-6 lg:text-sm">Copyright © 2021&nbsp;
                                        <a class="font-semibold text-gray-700 transition-colors duration-200 ease-in-out dark:text-gray-400 hover:text-body" href="index.html">Md Rasel.
                                        </a>&nbsp; All rights reserved
                                    </p>
                                </div>
                            </div>
                        </footer>
                        <!-- Mobile bottom fix menu -->
                        <div class="fixed bottom-0 z-30 flex items-center justify-between w-full px-4 text-gray-700 bg-white shadow md:hidden body-font h-14 sm:h-16">
                            <button class="relative flex items-center justify-center flex-shrink-0 h-auto focus:outline-none" aria-label="search-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17px" height="18px" viewBox="0 0 18.942 20" class="md:w-4 xl:w-5 md:h-4 xl:h-5">
                                    <path d="M381.768,385.4l3.583,3.576c.186.186.378.366.552.562a.993.993,0,1,1-1.429,1.375c-1.208-1.186-2.422-2.368-3.585-3.6a1.026,1.026,0,0,0-1.473-.246,8.343,8.343,0,1,1-3.671-15.785,8.369,8.369,0,0,1,6.663,13.262C382.229,384.815,382.025,385.063,381.768,385.4Zm-6.152.579a6.342,6.342,0,1,0-6.306-6.355A6.305,6.305,0,0,0,375.615,385.983Z" transform="translate(-367.297 -371.285)" fill="currentColor" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                            <button class="flex flex-col items-center justify-center flex-shrink-0 outline-none focus:outline-none" @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                        </path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                            <a class="flex-shrink-0" href="/index.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="20px" viewBox="0 0 17.996 20.442">
                                    <path d="M48.187,7.823,39.851.182A.7.7,0,0,0,38.9.2L31.03,7.841a.7.7,0,0,0-.211.5V19.311a.694.694,0,0,0,.694.694H37.3A.694.694,0,0,0,38,19.311V14.217h3.242v5.095a.694.694,0,0,0,.694.694h5.789a.694.694,0,0,0,.694-.694V8.335a.7.7,0,0,0-.228-.512ZM47.023,18.617h-4.4V13.522a.694.694,0,0,0-.694-.694H37.3a.694.694,0,0,0-.694.694v5.095H32.2V8.63l7.192-6.98L47.02,8.642v9.975Z" transform="translate(-30.619 0.236)" fill="currentColor" stroke="currentColor" stroke-width="0.4">
                                    </path>
                                </svg>
                            </a>
                            <button @click="toggleCart" class="relative flex items-center justify-center flex-shrink-0 h-auto transform focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 20 20" class="md:w-4 xl:w-5 md:h-4 xl:h-5">
                                    <path d="M5,4H19a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4ZM2,5A3,3,0,0,1,5,2H19a3,3,0,0,1,3,3V19a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3Zm10,7C9.239,12,7,9.314,7,6H9c0,2.566,1.669,4,3,4s3-1.434,3-4h2C17,9.314,14.761,12,12,12Z" transform="translate(-2 -2)" fill="currentColor" fill-rule="evenodd"></path>
                                </svg>
                                <span class="text-xs text-center w-5 h-5 flex items-center justify-center bg-gray-800 text-white absolute -top-2.5 xl:-top-3 -right-2.5 xl:-right-3 rounded-full font-bold">0</span>
                            </button>
                            <button class="flex-shrink-0 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="20px" viewBox="0 0 16.577 18.6">
                                    <path d="M-7722.37,2933a.63.63,0,0,1-.63-.63c0-4.424,2.837-6.862,7.989-6.862s7.989,2.438,7.989,6.862a.629.629,0,0,1-.63.63Zm.647-1.251h13.428c-.246-3.31-2.5-4.986-6.713-4.986s-6.471,1.673-6.714,4.986Zm2.564-12.518a4.1,4.1,0,0,1,1.172-3,4.1,4.1,0,0,1,2.979-1.229,4.1,4.1,0,0,1,2.979,1.229,4.1,4.1,0,0,1,1.171,3,4.341,4.341,0,0,1-4.149,4.5,4.344,4.344,0,0,1-4.16-4.5Zm1.251,0a3.1,3.1,0,0,0,2.9,3.254,3.094,3.094,0,0,0,2.9-3.253,2.878,2.878,0,0,0-.813-2.109,2.88,2.88,0,0,0-2.085-.872,2.843,2.843,0,0,0-2.1.856,2.841,2.841,0,0,0-.806,2.122Z" transform="translate(7723.3 -2914.703)" fill="currentColor" stroke="currentColor" stroke-width="0.6">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <!-- Cart -->
                        <livewire:user.cart>

                    </div>

                </main>

            </div>

        </div>
    </div>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{asset('js/slider.js')}}"></script>
    @livewireScripts
</body>

</html>