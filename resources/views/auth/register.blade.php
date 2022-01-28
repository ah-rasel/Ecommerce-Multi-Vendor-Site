@extends('layouts.app')
@section('contents')
<div class="max-w-screen-2xl md:px-8 px-3 md:py-8 mx-auto ">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-3 mt-6">
        <div class="space-y-4">
            <x-jet-validation-errors class="mb-4" />
            <h1 class="text-lg md:text-2xl font-bold uppercase">Register</h1>
            <div class="px-3 pt-2 md:px-8 md:pt-6 pb-8 bg-white dark:bg-gray-800 shadow rounded">
                <form method="POST" action="{{ route('register') }}" class="space-y-4" x-data="{vendor_register:true}">
                    @csrf
                    <div class="space-y-1.5">
                        <label for="name" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Name</label>
                        <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="Christopher Nolan" type="text" name="name" id="name" required autofocus autocomplete="name">
                    </div>
                    <div class="space-y-1.5">
                        <label for="email" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Email</label>
                        <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="customer@gmail.com" type="email" name="email" id="email" required>
                    </div>
                    <div class="space-y-1.5">
                        <label for="phone_number" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Phone
                            Number</label>
                        <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="customer@gmail.com" type="email" name="" id="phone_number">
                    </div>
                    <div class="space-y-1.5">
                        <label for="password" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Password</label>
                        <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="password" type="password" name="password" id="password" required autocomplete="new-password">
                    </div>
                    <div class="space-y-1.5">
                        <label for="password_confirmation" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Confirm Password</label>
                        <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="password" type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">
                    </div>
                    @if(Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="flex items-center space-x-2">
                        <div class="">
                            <input id="terms_and_services" name="" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <label for="terms_and_services" class="">I agree to the
                            <a href="{{ route('terms.show') }}" class="underline decoration-fuchsia-700 text-sm font-semibold ml-1">terms_of_service and privacy_policy
                            </a>
                        </label>
                    </div>
                    @endif
                    <div class="flex items-center space-x-2">
                        <div class="">
                            <input x-model="vendor_register" id="vendor_register" name="vendor" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <label for="vendor_register" class="tracking-wider">Register as a
                            Vendor</label>
                    </div>
                    <template x-cloak x-if="vendor_register">
                        <div class="space-y-4">
                            <div class="space-y-1.5">
                                <label for="shop_name" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Shop
                                    Name</label>
                                <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="ABC Shop" type="text" name="shop_name" id="shop_name">
                            </div>
                            <div class="space-y-1.5">
                                <label for="tagline" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Tag line</label>
                                <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="ABC Shop" type="text" name="shop_tagline" id="tagline">
                            </div>
                            <div class="space-y-1.5">
                                <label for="address" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Address</label>
                                <textarea name="shop_address" id="" cols="30" rows="3" class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent"></textarea>
                            </div>
                        </div>
                    </template>
                    <div class="">
                        <button type="submit" class="px-6 py-2 border-none border bg-gray-700 hover:bg-opacity-80 text-white">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="space-y-4">
            <h1 class="text-lg md:text-2xl font-bold">Already Have an Account ?</h1>
            <div class="px-3 pt-2 md:px-8 md:pt-6 pb-8 bg-white dark:bg-gray-800 shadow rounded">
                <p class="md:font-semibold tracking-wide md:uppercase mb-4">Login Here</p>
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <div class="space-y-1.5">
                        <label for="email" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Email</label>
                        <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="customer@gmail.com" id="email" type="email" name="email" required autofocus>
                    </div>
                    <div class="space-y-1.5">
                        <label for="password" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Password</label>
                        <input class="block w-full px-3 py-2.5 border border-slate-300 dark:border-gray-600 rounded-xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" placeholder="password" type="password" name="password" required autocomplete="current-password" id="password">
                    </div>
                    <div class="flex items-center space-x-2 cursor-pointer">
                        <div class="">
                            <input id="terms_and_services" name="remember" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                        </div>
                        <label for="terms_and_services" class="cursor-pointer">Remember Me
                        </label>
                    </div>
                    <div class="space-x-3">
                        <button type="submit" class="px-6 py-2 border-none border bg-gray-700 hover:bg-opacity-80 text-white">Login</button>
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection