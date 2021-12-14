@extends('layouts.app')
@section('contents')
<div class="bg-white dark:bg-gray-600">
    <div class="max-w-screen-2xl md:px-8 px-3 md:py-8 mx-auto">
        <div x-data="{tab:5}" class="py-8 lg:py-10 px-0 xl:max-w-screen-xl mx-auto flex md:flex-row w-full">
            <div class="flex flex-col md:flex-row w-full">
                <nav class="flex flex-col md:w-2/6 2xl:w-4/12 pb-2 md:pb-0 bg-gray-100 dark:bg-gray-800 rounded md:mr-16 pt-6">
                    <div class="mx-auto w-full">
                        <img class="mx-auto w-32 h-32" src="{{ asset('images/shops/17.png') }}" alt="Shop Logo">
                        <div class="space-y-1">
                            <h3 class="text-center font-bold">Fashion Store </h3>
                            <p class="text-center">750 products | 10 orders</p>
                            <p class="text-center">rasel@myshop.com</p>
                        </div>
                    </div>
                    <a @click.prevent="tab=1" :class="{'border-r-2 border-fuchsia-700 font-semibold':tab==1}" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2" href="#">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256m368-77V64h-48v69">
                            </path>
                        </svg>
                        <span class="px-2">Dashboard</span>
                    </a>
                    <a @click.prevent="tab=2" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2" :class="{'border-r-2 border-fuchsia-700 font-semibold':tab==2}" href="#">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                        <span class="px-2">Products</span>
                    </a>
                    <a @click.prevent="tab=3" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2" :class="{'border-r-2 border-fuchsia-700 font-semibold':tab==3}" href="#">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="176" cy="416" r="16" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                            <circle cx="400" cy="416" r="16" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 80h64l48 272h256"></path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128">
                            </path>
                        </svg>
                        <span class="px-2">Orders</span>
                    </a>
                    <a @click.prevent="tab=4" :class="{'border-r-2 border-fuchsia-700 font-semibold':tab==4}" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2" href="#">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z">
                            </path>
                            <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z">
                            </path>
                        </svg>
                        <span class="px-2">Profile</span>
                    </a>
                    <a @click.prevent="tab=5" :class="{'border-r-2 border-fuchsia-700 font-semibold':tab==5}" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base py-3.5 px-4 lg:px-5 mb-2" href="#">
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
                    <div x-show="tab==1" class="">
                        <h2 class="text-lg md:text-xl xl:text-2xl font-bold  mb-3 xl:mb-5">
                            Dashboard</h2>
                        <p class=" text-sm leading-7 md:text-base md:leading-loose lowercase">
                            From
                            your
                            account dashboard you can view your <a class=" underline font-semibold" href="#">recent
                                orders</a>, manage your <a class=" underline font-semibold" href="#">Account
                                Details</a> and <a class=" underline font-semibold" href="#">change
                                your password</a>.
                        </p>
                    </div>
                    <div x-show="tab==2" class="">
                        <h2 class="text-lg md:text-xl xl:text-2xl font-bold  mb-6 xl:mb-8">
                            Products
                        </h2>
                        <div class="w-full flex flex-col relative">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-500">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider w-3">
                                            <input type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded cursor-pointer">
                                        </th>
                                        <th scope="col" class="pl-5 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Image
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Group
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Price/Unit
                                        </th>
                                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Quantity
                                        </th>
                                        <th scope="col" class="px-2 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-gray-600 text-gray-700 dark:text-gray-200 divide-y divide-gray-200 dark:divide-gray-500">
                                    <tr class="dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200 w-3">
                                            <input wire:model="selected" value="180" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded cursor-pointer">
                                        </td>
                                        <td class="pl-5 py-4 whitespace-nowrap">
                                            <div class="w-10 h-10 box-border inline-block overflow-hidden rounded-sm">
                                                <img src="{{ asset('images/products/p-22-s.png') }}" alt="">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="single_shop.html" class="text-gray-500 dark:text-gray-200">
                                                Apples
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="#" class="text-gray-500 dark:text-gray-200">
                                                Grocery
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center cursor-pointer">
                                            $2.00
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center cursor-pointer">
                                            17
                                        </td>
                                        <td class="px-4 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-200 text-green-800">
                                                Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center cursor-pointer">
                                            <div class="space-x-5 inline-flex items-center w-auto">
                                                <button class="text-red-500 transition duration-200 hover:text-red-600 focus:outline-none">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.76 511.76" width="20">
                                                        <path d="M436.896 74.869c-99.84-99.819-262.208-99.819-362.048 0-99.797 99.819-99.797 262.229 0 362.048 49.92 49.899 115.477 74.837 181.035 74.837s131.093-24.939 181.013-74.837c99.819-99.818 99.819-262.229 0-362.048zm-75.435 256.448c8.341 8.341 8.341 21.824 0 30.165a21.275 21.275 0 01-15.083 6.251 21.277 21.277 0 01-15.083-6.251l-75.413-75.435-75.392 75.413a21.348 21.348 0 01-15.083 6.251 21.277 21.277 0 01-15.083-6.251c-8.341-8.341-8.341-21.845 0-30.165l75.392-75.413-75.413-75.413c-8.341-8.341-8.341-21.845 0-30.165 8.32-8.341 21.824-8.341 30.165 0l75.413 75.413 75.413-75.413c8.341-8.341 21.824-8.341 30.165 0 8.341 8.32 8.341 21.824 0 30.165l-75.413 75.413 75.415 75.435z" fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <a class="ml-2 text-base transition duration-200" title="View" href="/single_shop.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <a class="text-base transition duration-200 hover:text-heading" title="Edit" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.547 20.299" fill="currentColor" width="16">
                                                        <g stroke="currentColor" stroke-width=".4">
                                                            <path data-name="Path 78" d="M18.659 12.688a.5.5 0 00-.5.5v4.423a1.5 1.5 0 01-1.494 1.494H2.691A1.5 1.5 0 011.2 17.609V4.629a1.5 1.5 0 011.494-1.494h4.419a.5.5 0 100-1H2.691A2.493 2.493 0 00.2 4.629v12.98A2.493 2.493 0 002.691 20.1h13.976a2.493 2.493 0 002.491-2.491v-4.423a.5.5 0 00-.5-.5zm0 0">
                                                            </path>
                                                            <path data-name="Path 79" d="M18.96.856a2.241 2.241 0 00-3.17 0L6.899 9.739a.5.5 0 00-.128.219l-1.169 4.219a.5.5 0 00.613.613l4.219-1.169a.5.5 0 00.219-.128l8.886-8.887a2.244 2.244 0 000-3.17zm-10.971 9.21l7.273-7.273 2.346 2.346-7.273 7.273zm-.469.94l1.879 1.875-2.592.718zm11.32-7.1l-.528.528-2.346-2.345.528-.528a1.245 1.245 0 011.761 0l.585.584a1.247 1.247 0 010 1.761zm0 0">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div x-show="tab==3" class="">
                        <h2 class="text-lg md:text-xl xl:text-2xl font-bold  mb-6 xl:mb-8">
                            Orders
                        </h2>
                        <div class="w-full flex flex-col relative">
                            <table class="hidden md:block">
                                <thead class="text-sm lg:text-base">
                                    <tr>
                                        <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-start first:rounded-ts-md">
                                            Order</th>
                                        <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-start lg:text-center">
                                            Date</th>
                                        <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-start lg:text-center">
                                            Status</th>
                                        <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-start lg:text-center">
                                            Total</th>
                                        <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-start lg:text-right last:rounded-te-md">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm lg:text-base">
                                    <tr class="border-b border-gray-300 last:border-b-0">
                                        <td class="px-4 py-5 text-start">
                                            <a class="underline hover:no-underline text-body" href="#">#3203</a>
                                        </td>
                                        <td class="text-start lg:text-center px-4 py-5 ">
                                            March 18, 2021</td>
                                        <td class="text-start lg:text-center px-4 py-5 ">
                                            Completed</td>
                                        <td class="text-start lg:text-center px-4 py-5 ">
                                            $16,950.00 for 93 items</td>
                                        <td class="text-right px-4 py-5 ">
                                            <a class="text-sm leading-4 bg-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600 text-white px-4 py-2.5 inline-block rounded-md hover:text-white hover:bg-gray-600" href="#">view</a>
                                        </td>
                                    </tr>
                                    <tr class="border-b border-gray-300 last:border-b-0">
                                        <td class="px-4 py-5 text-start">
                                            <a class="underline hover:no-underline text-body" href="#">#3204</a>
                                        </td>
                                        <td class="text-start lg:text-center px-4 py-5 ">
                                            March 18, 2021</td>
                                        <td class="text-start lg:text-center px-4 py-5 ">
                                            Completed</td>
                                        <td class="text-start lg:text-center px-4 py-5 ">
                                            $16,950.00 for 93 items</td>
                                        <td class="text-right px-4 py-5 ">
                                            <a class="text-sm leading-4 bg-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600 text-white px-4 py-2.5 inline-block rounded-md hover:text-white hover:bg-gray-600" href="#">view</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="md:hidden w-full space-y-4">
                                <ul class="bg-white dark:bg-gray-800 text-sm font-semibold border border-gray-300 dark:border-gray-400 rounded-md flex flex-col px-4 pt-5 pb-6 space-y-5">
                                    <li class="flex items-center justify-between">Order
                                        1<span class="font-normal">
                                            <a class="underline hover:no-underline text-body" href="#">#3204
                                            </a>
                                        </span>
                                    </li>
                                    <li class="flex items-center justify-between">Date
                                        <span class="font-normal">March 18, 2021</span>
                                    </li>
                                    <li class="flex items-center justify-between">Status
                                        <span class="font-normal">Completed</span>
                                    </li>
                                    <li class="flex items-center justify-between">Total
                                        <span class="font-normal">$16,950.00 for 93 items
                                        </span>
                                    </li>
                                    <li class="flex items-center justify-between">Actions
                                        <span class="font-normal">
                                            <a class="text-sm leading-4 bg-gray-700 text-white px-4 py-2.5 inline-block rounded-md hover:text-white hover:bg-gray-600" href="/my-account/orders/3204">view
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div x-show="tab==4" class="">
                        <div class="w-full flex flex-col relative">
                            <h2 class="text-lg md:text-xl xl:text-2xl font-bold mb-6 xl:mb-8">
                                Account Details</h2>
                            <form class="w-full mx-auto flex flex-col justify-center ">
                                <div class="flex flex-col space-y-4 sm:space-y-5">
                                    <div class="flex flex-col sm:flex-row sm:space-x-3 space-y-4 sm:space-y-0">
                                        <div class="w-full sm:w-1/2">
                                            <label for="firstName" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">First
                                                Name *</label>
                                            <input id="firstName" name="firstName" type="text" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-xs lg:text-sm rounded-md placeholder-body min-h-12 bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                                        </div>
                                        <div class="w-full sm:w-1/2">
                                            <label for="lastName" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">Last
                                                Name *</label>
                                            <input id="lastName" name="lastName" type="text" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-xs lg:text-sm rounded-md placeholder-body min-h-12 bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                                        </div>
                                    </div>
                                    <div class="block">
                                        <label for="displayName" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">Display
                                            Name *</label>
                                        <input id="displayName" name="displayName" type="text" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none border text-xs lg:text-sm rounded-md placeholder-body min-h-12 transition duration-200 ease-in-out bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                                    </div>
                                    <div class="flex flex-col sm:flex-row sm:space-x-3 space-y-4 sm:space-y-0">
                                        <div class="w-full sm:w-1/2">
                                            <label for="phoneNumber" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">Phone/Mobile
                                                *</label>
                                            <input id="phoneNumber" name="phoneNumber" type="tel" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-xs lg:text-sm rounded-md placeholder-body min-h-12  bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                                        </div>
                                        <div class="w-full sm:w-1/2">
                                            <label for="email" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">Email
                                                *</label>
                                            <input id="email" name="email" type="email" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-xs lg:text-sm rounded-md placeholder-body min-h-12 bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                                        </div>
                                    </div>
                                    <div class="relative flex flex-col">
                                        <span class="mt-2 text-sm font-semibold block pb-1 text-gray-600 dark:text-gray-400">Gender</span>
                                        <div class="mt-2 flex items-center space-x-6">
                                            <label class="group flex items-center text-sm cursor-pointer">
                                                <input type="radio" class="mr-2 w-5 h-5 border border-gray-300 rounded-full cursor-pointer transition duration-500 ease-in-out focus:ring-offset-0 hover:border-gray-600 focus:outline-none focus:ring-0 focus-visible:outline-none checked:bg-gray-700" name="gender" value="male">
                                                <span class="ms-2 text-sm relative">Male</span>
                                            </label>
                                            <label class="group flex items-center text-sm cursor-pointer">
                                                <input type="radio" class="mr-2 w-5 h-5 border border-gray-300 rounded-full cursor-pointer transition duration-500 ease-in-out focus:ring-offset-0 hover:border-gray-600 focus:outline-none focus:ring-0 focus-visible:outline-none checked:bg-gray-700" name="gender" value="female">
                                                <span class="ms-2 text-sm relative">Female</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <button data-variant="flat" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none bg-gray-700 dark:bg-gray-800 text-white px-5 md:px-6 py-4 md:py-2.5 lg:py-3 hover:text-white hover:bg-gray-600 dark:hover:bg-gray-600 hover:shadow-cart h-12 mt-3 w-full sm:w-32" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div x-show="tab==5" class="">
                        <h2 class="text-lg md:text-xl xl:text-2xl font-bold mb-6 xl:mb-8">
                            Settings</h2>
                        <div class="w-full flex  h-full lg:w-8/12 flex-col relative" x-data="{password_hidden:true}">
                            <form class="w-full mx-auto flex flex-col justify-center space-y-4">
                                <div class="space-y-1.5">
                                    <label for="password" class="block tracking-wider">Site Name</label>
                                    <input class="w-full px-3 py-2 rounded focus:outline-none focus:ring-2 dark:bg-transparent ring-1 ring-gray-300 dark:ring-gray-700" placeholder="Name" type="text" name="" id="password">
                                </div>
                                <div class="flex space-x-3 text-white">
                                    <button class="bg-red-400 hover:bg-opacity-90 px-6 py-2">Deactivate Account</button>
                                    <button class="bg-red-500 hover:bg-opacity-80 px-6 py-2">Delete Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection