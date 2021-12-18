@extends('layouts.app')
@section('contents')
<div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16 bg-white dark:bg-transparent">
    <div class="pt-8 pb-1">
        <div class="flex items-center">
            <ol class="flex items-center w-full overflow-hidden">
                <li class="text-sm px-2.5 transition duration-200 ease-in first:px-0 last:pr-0 text-gray-600 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-200">
                    <a href="/">Home</a>
                </li>
                <li class="text-base mt-0.5">/</li>
                <li class="text-sm px-2.5 transition duration-200 ease-in first:px-0 last:pr-0 text-gray-600 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-200">
                    <a class="capitalize" href="{{ route('shop') }}">products</a>
                </li>
                <li class="text-base mt-0.5">/</li>
                <li class="text-sm px-2.5 transition duration-200 ease-in first:px-0 last:pr-0 text-gray-600 hover:text-gray-700 dark:text-gray-300 dark:hover:text-gray-200">
                    <a class="capitalize" href="{{ $product->slug }}">{{ $product->name }}</a>
                </li>
            </ol>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-9 sm:gap-x-3">
        <div class="col-span-4 space-y-2">
            <div class="border dark:border-gray-500 sm:p-2 rounded-t">
                <div class="swiper product-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="overflow-hidden">
                                <img class="object-contain transition duration-500 h-64 object-center md:h-[500px] w-full" src="{{ asset('images').'/'.$product->image }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="overflow-hidden">
                                <img class="object-contain transition duration-500 h-64 object-center md:h-[500px] w-full" src="{{ asset('images').'/'.$product->image }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-1 sm:p-3 border dark:border-gray-500 rounded-b">
                <div class="swiper gallary-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="overflow-hidden border dark:border-gray-600 h-16 w-16 sm:h-20 sm:w-20 p-1">
                                <img class="h-16 w-16 sm:h-20 sm:w-20 object-contain object-center" src="{{ asset('images').'/'.$product->image }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-5 px-2 sm:px-14 mt-3 sm:mt-0">
            <div class="pb-7 mb-7 border-b border-gray-300">
                <h2 class="text-lg md:text-xl lg:text-2xl 2xl:text-3xl font-bold hover:text-black mb-3.5 capitalize">{{ $product->name }}</h2>
                <p class="text-body text-sm lg:text-base leading-6 lg:leading-8">
                    {{ $product->description }}
                </p>
                <div class="flex items-center mt-5">
                    <div class="font-bold text-base md:text-xl lg:text-2xl 2xl:text-4xl pr-2 md:pr-0 lg:pr-2 2xl:pr-0">{{ $product->price }}</div>
                    <span class="line-through font-segoe text-gray-400 text-sm md:text-base lg:text-lg xl:text-xl px-2">{{ $product->price }}</span>
                </div>
            </div>
            <div class="pb-3 border-b border-gray-300">
                <div class="mb-4">
                    <h3 class="text-base md:text-lg font-semibold mb-2.5 capitalize">size</h3>
                    <ul class="colors flex flex-wrap -mr-3">
                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black">S</li>
                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black">M</li>
                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black">L</li>
                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black">XL</li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h3 class="text-base md:text-lg font-semibold mb-2.5 capitalize">color</h3>
                    <ul class="colors flex flex-wrap -mr-3">
                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black">
                            <span class="h-full w-full rounded block" style="background-color: rgb(232, 108, 37);">
                            </span>
                        </li>
                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black">
                            <span class="h-full w-full rounded block" style="background-color: rgb(255, 165, 180);">
                            </span>
                        </li>
                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black">
                            <span class="h-full w-full rounded block" style="background-color: rgb(130, 36, 227);">
                            </span>
                        </li>
                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black">
                            <span class="h-full w-full rounded block" style="background-color: rgb(221, 51, 51);">
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center space-x-4 md:pr-32 lg:pr-12 2xl:pr-32 3xl:pr-48 border-b border-gray-300 py-8">
                <div class="group flex items-center justify-between rounded-md overflow-hidden flex-shrink-0 border h-11 md:h-12 border-gray-300" x-data="counter()">
                    <button @click="decrement()" class="flex items-center justify-center flex-shrink-0 h-full transition ease-in-out duration-300 focus:outline-none w-10 md:w-12 border-e border-gray-300 hover:text-white hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="2px" viewBox="0 0 12 1.5">
                            <rect data-name="Rectangle 970" width="12px" height="2px" fill="currentColor"></rect>
                        </svg>
                    </button>
                    <span class="font-semibold flex items-center justify-center h-full  transition-colors duration-250 ease-in-out cursor-default flex-shrink-0 text-base w-12  md:w-20 xl:w-24" x-text="count"></span>
                    <button @click="increment()" class="flex items-center justify-center h-full flex-shrink-0 transition ease-in-out duration-300 focus:outline-none w-10 md:w-12 hover:text-white hover:bg-gray-600">
                        <svg data-name="plus (2)" xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 12 12">
                            <g data-name="Group 5367">
                                <path data-name="Path 17138" d="M6.749,5.251V0h-1.5V5.251H0v1.5H5.251V12h1.5V6.749H12v-1.5Z" fill="currentColor"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <button data-variant="slim" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-12 px-5 bg-heading text-white py-2 transform-none normal-case hover:text-white bg-gray-700 dark:bg-gray-400 hover:bg-gray-600 hover:shadow-cart w-full md:w-6/12 xl:w-full">
                    <span class="py-2 3xl:px-8">Add to cart</span></button>
            </div>
            <div class="py-6">
                <ul class="text-sm space-y-5 pb-1">
                    <li>
                        <span class="font-semibold inline-block pr-2">SKU:</span>{{ $product->sku??'' }}
                    </li>
                    <li>
                        <span class="font-semibold inline-block pr-2">Category:</span>
                        <a class="transition hover:underline hover:text-heading" href="/">{{ $product->category->name }}</a>
                    </li>
                    <li class="">
                        <span class="font-semibold inline-block pr-2">Tags:</span>
                        @foreach ($tags=[0,1] as $tag)
                        <a class="inline-block pr-1.5 transition hover:underline last:pr-0" href="#">
                            <x-global.badge>Cotton</x-global.badge>
                            @if (!$loop->last)
                            <span class="text-gray-600">,</span>
                            @endif
                        </a>
                        @endforeach
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="sm:p-6">
        <div class="md:text-2xl font-bold my-3">Related Products</div>
        <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-6 gap-x-3 lg:gap-x-5 xl:gap-x-7 gap-y-3 xl:gap-y-5 2xl:gap-y-8">
            @foreach ($products as $product)
            <x-global.product-card href="{{ route('product.show',$product->slug) }}" :product="$product"></x-global.product-card>
            @endforeach
        </div>
    </div>
</div>
<script>
    function counter() {
        return {
            count: 1,
            increment() {
                if (this.count < 10) {
                    this.count++;
                }
            },
            decrement() {
                if (this.count > 1) {
                    this.count--;
                }
            }
        };
    }
</script>
@endsection
@section('slider-script')
<x-slider_script></x-slider_script>
@endsection
@section('slider-style')
<x-slider_style>
    </x-slider_script>
    @endsection