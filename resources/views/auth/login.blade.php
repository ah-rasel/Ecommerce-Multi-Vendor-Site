@extends('layouts.app')
@section('contents')
<div class="max-w-screen-2xl md:px-8 px-3 md:py-8 mx-auto ">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-3 mt-6">
        <div class="space-y-4">

            <x-jet-validation-errors class="mb-4" />
            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <h1 class="text-lg md:text-2xl font-bold uppercase">Login</h1>
            <div class="px-3 pt-2 md:px-8 md:pt-6 pb-8 bg-gray-200 dark:bg-gray-800 shadow rounded">
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <div class="space-y-1.5">
                        <label for="email" class="block tracking-wider">Email</label>
                        <input class="w-full px-3 py-2 rounded focus:outline-none focus:ring-2 dark:bg-transparent ring-1 ring-gray-300 dark:ring-gray-700" placeholder="customer@gmail.com" id="email" type="email" name="email" required autofocus>
                    </div>
                    <div class="space-y-1.5">
                        <label for="password" class="block tracking-wider">Password</label>
                        <input class="w-full px-3 py-2 rounded focus:outline-none focus:ring-2 dark:bg-transparent ring-1 ring-gray-300 dark:ring-gray-700" placeholder="password" type="password" name="password" required autocomplete="current-password" id="password">
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
        <div class="space-y-4">
            <h1 class="text-lg md:text-2xl font-bold">Create New Account</h1>
            <div class="px-3 pt-2 md:px-8 md:pt-6 pb-8 h-[270px] bg-gray-200 dark:bg-gray-800 shadow rounded">
                <div class="space-y-6">
                    <p class="md:font-semibold tracking-wide md:uppercase">Create a Account</p>
                    <p class="text-gray-600 dark:text-gray-400">Sign up for a free account at our store. Registration is quick and easy.
                        It allows you to be able to order from our shop. To start shopping click
                        register.
                    </p>
                    <div class="">
                        <a class="block md:w-1/3 text-center text-white bg-gray-700 hover:bg-opacity-80 px-6 py-2 mt-16" href="{{ route('register') }}">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection