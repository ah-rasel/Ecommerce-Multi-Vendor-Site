<div class="">
    <div class="flex justify-center p-6 md:p-10 2xl:p-8 relative bg-no-repeat bg-center bg-cover" style="background-image: url('../images/slider/1.jpg');">
        <div class="absolute top-0 start-0 bg-black w-full h-full opacity-50 transition-opacity duration-500 group-hover:opacity-80">
        </div>
        <div class="w-full flex items-center justify-center relative z-10 py-10 md:py-14 lg:py-20 xl:py-24 2xl:py-32">
            <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-white text-center">
                <span class="font-satisfy block font-normal mb-3">explore</span>
                My Account
            </h2>
        </div>
    </div>
    <div class="max-w-screen-2xl md:px-8 px-3 md:py-8 mx-auto ">
        <div x-data="{SelectedTab:@entangle('SelectedTab')}" class="py-16 lg:py-20 px-0 xl:max-w-screen-xl mx-auto flex md:flex-row w-full">
            <div class="flex flex-col md:flex-row w-full">
                <nav class="flex flex-col md:w-2/6 2xl:w-4/12 md:pr-8 lg:pr-12 xl:pr-16 2xl:pr-20 pb-2 md:pb-0">
                    <a @click.prevent="SelectedTab=1" :class="{'bg-gray-200 dark:bg-gray-800 font-semibold':SelectedTab==1}" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base  py-3.5 px-4 lg:px-5 rounded mb-2" href="/my-account">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212">
                            </path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256m368-77V64h-48v69">
                            </path>
                        </svg>
                        <span class="px-2">Dashboard</span>
                    </a>
                    <a @click.prevent="SelectedTab=2" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base   py-3.5 px-4 lg:px-5 rounded mb-2" :class="{'bg-gray-200 dark:bg-gray-800 font-semibold':SelectedTab==2}" href="/my-account/orders">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="176" cy="416" r="16" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                            <circle cx="400" cy="416" r="16" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></circle>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M48 80h64l48 272h256"></path>
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M160 288h249.44a8 8 0 007.85-6.43l28.8-144a8 8 0 00-7.85-9.57H128">
                            </path>
                        </svg>
                        <span class="px-2">Orders</span>
                    </a>
                    <a @click.prevent="SelectedTab=3" :class="{'bg-gray-200 dark:bg-gray-800 font-semibold':SelectedTab==3}" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base  py-3.5 px-4 lg:px-5 rounded mb-2" href="/my-account/account-details">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z">
                            </path>
                            <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z">
                            </path>
                        </svg>
                        <span class="px-2">Account Details</span>
                    </a>
                    <a @click.prevent="SelectedTab=4" :class="{'bg-gray-200 dark:bg-gray-800 font-semibold':SelectedTab==4}" class="hover:bg-gray-200 dark:hover:bg-gray-600 flex items-center cursor-pointer text-sm lg:text-base  py-3.5 px-4 lg:px-5 rounded mb-2" href="/my-account/change-password">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z">
                            </path>
                        </svg>
                        <span class="px-2">Change Password</span>
                    </a>
                    <button class="flex items-center cursor-pointer text-sm lg:text-base  font-normal py-3.5 px-4 lg:px-5 focus:outline-none">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="w-5 h-5" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 336v40a40 40 0 01-40 40H104a40 40 0 01-40-40V136a40 40 0 0140-40h152c22.09 0 48 17.91 48 40v40m64 160l80-80-80-80m-192 80h256">
                            </path>
                        </svg>
                        <span class="px-2">Logout</span>
                    </button>
                </nav>
                <div class="md:w-4/6 2xl:w-8/12 mt-4 md:mt-0">
                    <div x-cloak x-show="SelectedTab==1" class="">
                        @if ($message)
                        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mb-4" role="alert">
                            <p class="font-bold">Hello - {{ auth()->user()->name }}</p>
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <h2 class="text-lg md:text-xl xl:text-2xl font-bold  mb-3 xl:mb-5">
                            Dashboard</h2>
                        <p class=" text-sm leading-7 md:text-base md:leading-loose lowercase">From
                            your
                            account dashboard you can view your <a class="underline font-semibold" @click.prevent="SelectedTab=2" href="#">recent
                                orders</a>, manage your <a class="underline font-semibold" @click.prevent="SelectedTab=3" href="#">Account
                                Details</a> and <a class="underline font-semibold" @click.prevent="SelectedTab=4" href="#">change
                                your password</a>.
                        </p>
                    </div>
                    <div x-cloak x-show="SelectedTab==2" class="">
                        @if ($showOrders)
                        <div class="">
                            <h2 class="text-lg md:text-xl xl:text-2xl font-bold  mb-6 xl:mb-8">
                                Orders
                            </h2>
                            <div class="w-full flex flex-col relative">
                                <table class="hidden md:block">
                                    <thead class="text-sm lg:text-base">
                                        <tr>
                                            <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-left first:rounded-ts-md">
                                                Order</th>
                                            <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-left lg:text-center">
                                                Date</th>
                                            <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-left lg:text-center">
                                                Status</th>
                                            <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-left lg:text-center">
                                                Total</th>
                                            <th class="bg-gray-200 dark:bg-gray-800 p-4  font-semibold text-left lg:text-right last:rounded-te-md">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-sm lg:text-base">
                                        @foreach ($orders as $order)
                                        <tr class="border-b border-gray-300 last:border-b-0">
                                            <td class="px-4 py-5 text-left">
                                                <a class="underline hover:no-underline text-body" href="#">#{{ $order->id }}</a>
                                            </td>
                                            <td class="text-left lg:text-center px-4 py-5 ">
                                                {{ $order->order_date }}
                                            </td>
                                            <td class="text-left lg:text-center px-4 py-5 ">
                                                {{ $order->order_status }}
                                            </td>
                                            <td class="text-left lg:text-center px-4 py-5 ">
                                                ${{ $order->amount }} for {{ $order->products_count }} items</td>
                                            <td class="text-right px-4 py-5 flex items-center space-x-3">
                                                <a wire:click.prevent="ShowOrder({{ $order->id }},{{ $order }})" class="text-sm leading-4 bg-gray-300 dark:bg-gray-800 dark:hover:bg-gray-600 text-gray-800 px-5 py-2.5 inline-block hover:text-white hover:bg-gray-400 border border-gray-400" href="#">view</a>
                                                <button title="Download Invoice for Order {{ $order->id }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="md:hidden w-full space-y-4">
                                    @foreach ($orders as $order)
                                    <ul class="bg-white dark:bg-gray-800 text-sm font-semibold border border-gray-300 dark:border-gray-400 rounded-md flex flex-col px-4 pt-5 pb-6 space-y-5">
                                        <li class="flex items-center justify-between">Order No
                                            <span class="font-normal">
                                                <a class="underline hover:no-underline text-body" href="#">#{{ $order->id }}
                                                </a>
                                            </span>
                                        </li>
                                        <li class="flex items-center justify-between">Date
                                            <span class="font-normal">{{ $order->order_date }}</span>
                                        </li>
                                        <li class="flex items-center justify-between">Status
                                            <span class="font-normal">{{ $order->order_status }}</span>
                                        </li>
                                        <li class="flex items-center justify-between">Total
                                            <span class="font-normal">${{ $order->amount }} for {{ $order->products_count }} items
                                            </span>
                                        </li>
                                        <li class="flex items-center justify-between">Actions
                                            <span class="font-normal">
                                                <a class="text-sm leading-4 bg-gray-700 text-white px-4 py-2.5 inline-block rounded-md hover:text-white hover:bg-gray-600" wire:click.prevent="ShowOrder({{ $order->id }})" href="#">view
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @elseif ($SpecificOrder)
                        <div class="p-0">
                            <div class="flex items-center justify-between mb-6 xl:mb-8">
                                <h2 class="text-lg md:text-xl xl:text-2xl font-bold">Order details:</h2>
                                <button wire:click="CloseOrder" class="flex items-center">
                                    <span class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                                        </svg>
                                    </span>
                                    Back
                                </button>
                            </div>
                            <table class="w-full font-semibold text-sm lg:text-base">
                                <thead>
                                    <tr>
                                        <th class="bg-gray-200 p-4 text-left first:rounded-ts-md w-1/2">Product</th>
                                        <th class="bg-gray-200 p-4 text-left last:rounded-te-md w-1/2">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $ordered_product)
                                    <tr class="border-b font-normal border-gray-300 last:border-b-0">
                                        <td class="p-4">
                                            <a class="text-blue-400 hover:underline" href="{{ route('product.show',$ordered_product->product->slug) }}"> {{ $ordered_product->product->name   }}</a>
                                            <span class="ml-1 font-semibold text-xs">(${{ $ordered_product->unit_price }}x{{ $ordered_product->quantity }})</span>
                                        </td>
                                        <td class="p-4">${{ $ordered_product->quantity*$ordered_product->unit_price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="odd:bg-gray-200">
                                        <td class="p-4 italic">Subtotal:</td>
                                        <td class="p-4">${{ $order->amount }}</td>
                                    </tr>
                                    <tr class="odd:bg-gray-200">
                                        <td class="p-4 italic">Shipping:</td>
                                        <td class="p-4">$0.00<span class="text-[13px] font-normal pl-1.5 inline-block">via Flat rate</span></td>
                                    </tr>
                                    <tr class="odd:bg-gray-200">
                                        <td class="p-4 italic">Payment method:</td>
                                        <td class="p-4">{{ $order->payment }}</td>
                                    </tr>
                                    <tr class="odd:bg-gray-200">
                                        <td class="p-4 italic">Note:</td>
                                        <td class="p-4">{{ $order->notes }}</td>
                                    </tr>
                                    <tr class="odd:bg-gray-200">
                                        <td class="p-4 italic">Total:</td>
                                        <td class="p-4">${{ $order->amount }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        @endif
                    </div>
                    <div x-cloak x-show="SelectedTab==3" class="">
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
                    <div x-cloak x-show="SelectedTab==4" class="">
                        <h2 class="text-lg md:text-xl xl:text-2xl font-bold mb-6 xl:mb-8">
                            Change Password</h2>
                        <div class="w-full flex  h-full lg:w-8/12 flex-col relative" x-data="{password_hidden:true}">
                            <form class="w-full mx-auto flex flex-col justify-center ">
                                <div class="flex flex-col space-y-3">
                                    <div class="mb-4">
                                        <label for="oldPassword" class="block text-gray-600 font-semibold dark:text-gray-300 text-sm leading-none mb-3 cursor-pointer">Old
                                            Password</label>
                                        <div class="relative">
                                            <input id="oldPassword" name="oldPassword" type="password" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border border-gray-500 text-xs lg:text-sm rounded-md placeholder-gray-600 focus:outline-none h-11 md:h-12 dark:bg-gray-800 focus:ring-0">
                                            <label for="oldPassword" class="absolute right-4 top-5 -mt-2 text-gray-500 cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg></label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="newPassword" class="block text-gray-600 font-semibold dark:text-gray-300 text-sm leading-none mb-3 cursor-pointer">New
                                            Password</label>
                                        <div class="relative">
                                            <input id="newPassword" name="newPassword" :type="!password_hidden ? 'text' : 'password'" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border border-gray-500 text-xs lg:text-sm rounded-md placeholder-gray-600 focus:outline-none h-11 md:h-12 dark:bg-gray-800 focus:ring-0">
                                            <label for="newPassword" class="absolute right-4 top-5 -mt-2 text-gray-500 cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" @click="password_hidden = !password_hidden" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6" :class="{'hidden':!password_hidden}">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6" @click="password_hidden = !password_hidden" :class="{'hidden':password_hidden}">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="relative">
                                        <button data-variant="flat" class="text-[12px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none text-white px-5 md:px-6 py-4 md:py-2.5 lg:py-3 hover:text-white bg-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600 hover:bg-gray-600 hover:shadow-cart h-13 mt-3" type="submit">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>