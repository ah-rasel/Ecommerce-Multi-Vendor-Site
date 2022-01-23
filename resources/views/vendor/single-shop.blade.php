@extends('layouts.app')
@section('contents')
<div class="border-t border-gray-300">
    <div class="flex items-center px-8 py-4 mb-4 border-b border-gray-300 lg:hidden">
        <div class="flex flex-shrink-0">
            <span class="box-border relative inline-block overflow-hidden">
                <span class="box-border block">
                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjIiIGhlaWdodD0iNjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                </span>
                <img title="{{ $shop->name }}-Logo" alt="{{ $shop->name }}-Logo" src="{{asset('images')}}/{{ $shop->logo }}" class="box-border absolute inset-0 block rounded-md">
            </span>
        </div>
        <div class="px-4">
            <h4 class="text-sm font-semibold md:text-base xl:text-lg">{{ $shop->name }}
            </h4>
            <button class="text-sm font-semibold transition-all opacity-80 hover:opacity-100">More
                Info</button>
        </div>
    </div>
    <div class="mx-auto max-w-[1920px] px-4 md:px-8 2xl:px-16">
        <div class="flex flex-col pb-16 lg:flex-row gap-x-6 lg:pt-7 lg:pb-20">
            <div class="flex-shrink-0 hidden py-6 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 lg:block lg:w-80 xl:w-96 dark:border-gray-600">
                <div style="position: sticky; top: -189.4px;">
                    <div class="flex flex-col px-6 pt-10 lg:pt-14">
                        <div class="w-full pb-8 text-center border-b border-gray-300">
                            <div class="w-32 h-32 mx-auto lg:w-auto lg:h-auto">
                                <span class="box-border relative inline-block max-w-full p-0 m-0 overflow-hidden bg-none">
                                    <span class="box-border block max-w-full p-0 m-0 bg-none">
                                        <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgwIiBoZWlnaHQ9IjE4MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full p-0 m-0 bg-none">
                                    </span>
                                    <img title="{{ $shop->name }}-Logo" alt="{{ $shop->name }}-Logo" src="{{asset('images')}}/{{ $shop->logo }}" class="box-border absolute inset-0 block max-w-full max-h-full min-w-full min-h-full p-0 m-auto rounded-xl">
                                </span>
                            </div>
                            <h4 class="text-sm md:text-base xl:text-lg font-semibold mt-6 mb-1.5">
                                {{ $shop->name }}
                            </h4>
                            <p class="text-sm leading-7 sm:leading-6">{{ $shop->tag_line }}</p>
                            <div class="flex items-center flex-wrap justify-center space-x-2 pt-4 mt-0.5">
                                <button aria-label="facebook" class="react-share__ShareButton" style="background-color: transparent; border: none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">
                                    <svg viewBox="0 0 64 64" width="25" height="25" class="transition-all hover:opacity-90">
                                        <circle cx="32" cy="32" r="31" fill="#3b5998"></circle>
                                        <path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z" fill="white"></path>
                                    </svg>
                                </button>
                                <button aria-label="twitter" class="react-share__ShareButton" style="background-color: transparent; border: none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">
                                    <svg viewBox="0 0 64 64" width="25" height="25" class="transition-all hover:opacity-90">
                                        <circle cx="32" cy="32" r="31" fill="#00aced"></circle>
                                        <path d="M48,22.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6 C41.7,19.8,40,19,38.2,19c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5c-5.5-0.3-10.3-2.9-13.5-6.9c-0.6,1-0.9,2.1-0.9,3.3 c0,2.3,1.2,4.3,2.9,5.5c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1 c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,2.9,10.1,2.9c12.1,0,18.7-10,18.7-18.7 c0-0.3,0-0.6,0-0.8C46,24.5,47.1,23.4,48,22.1z" fill="white"></path>
                                    </svg>
                                </button>
                                <button aria-label="linkedin" class="react-share__ShareButton" style="background-color: transparent; border: none; padding: 0px; font: inherit; color: inherit; cursor: pointer;">
                                    <svg viewBox="0 0 64 64" width="25" height="25" class="transition-all hover:opacity-90">
                                        <circle cx="32" cy="32" r="31" fill="#007fb1"></circle>
                                        <path d="M20.4,44h5.4V26.6h-5.4V44z M23.1,18c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1 c1.7,0,3.1-1.4,3.1-3.1C26.2,19.4,24.8,18,23.1,18z M39.5,26.2c-2.6,0-4.4,1.4-5.1,2.8h-0.1v-2.4h-5.2V44h5.4v-8.6 c0-2.3,0.4-4.5,3.2-4.5c2.8,0,2.8,2.6,2.8,4.6V44H46v-9.5C46,29.8,45,26.2,39.5,26.2z" fill="white"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="space-y-6 py-7">
                            <div class="block">
                                <h4 class="font-semibold text-sm mb-1.5">Address:
                                </h4>
                                <p class="text-sm leading-7 sm:leading-6">{{ $shop->address }}</p>
                            </div>
                            <div class="block">
                                <h4 class="font-semibold text-sm mb-1.5">Phone:
                                </h4>
                                <div class="flex items-center justify-between">
                                    <p class="text-sm leading-7 sm:leading-6">
                                        {{$shop->phone}}
                                    </p>
                                    <button class="flex-shrink-0 text-sm font-semibold transition-all hover:opacity-80">Call
                                        Now</button>
                                </div>
                            </div>
                            <div class="block">
                                <h4 class="font-semibold text-sm mb-1.5">Ratings:
                                </h4>
                                <p class="text-sm leading-7 sm:leading-6">5.00 rating
                                    from 1 review</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-300 flex space-x-2.5 py-7">
                            <button data-variant="smoke" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-12 px-5 bg-gray-200 dark:bg-gray-700  py-2 transform-none normal-case hover:bg-gray-300 w-full false">Follow</button>
                            <button data-variant="smoke" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-12 px-5 bg-gray-200 dark:bg-gray-700  py-2 transform-none normal-case hover:bg-gray-300 w-full">Share
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="ms-1" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M10 3v2H5v14h14v-5h2v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h6zm7.586 2H13V3h8v8h-2V6.414l-7 7L10.586 12l7-7z">
                                        </path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-2 bg-white border border-gray-300 rounded-md lg:px-7 dark:bg-gray-800 dark:border-gray-600 md:py-6">
                <div class="flex mb-5 lg:mb-7">
                    <span class="box-border relative inline-block max-w-full p-0 m-0 overflow-hidden bg-none">
                        <span class="box-border block max-w-full p-0 m-0 bg-none">
                            <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjc2MCIgaGVpZ2h0PSIxMDIwIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIvPg==" class="block max-w-full p-0 m-0 bg-none">
                        </span>
                        <img title="{{ $shop->name }}-Banner" alt="{{ $shop->name }}-Banner" src="{{asset('images')}}/{{ $shop->banner }}" class="box-border absolute inset-0 block max-w-full max-h-full min-w-full min-h-full p-0 m-auto rounded-xl">
                    </span>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-x-3 lg:gap-x-5 xl:gap-x-7 gap-y-3 xl:gap-y-5 2xl:gap-y-8 ">
                    @foreach ($products as $product)
                    <x-global.product-card :product="$product"></x-global.product-card>
                    @endforeach
                </div>
                <div class="pt-8 text-center xl:pt-14">
                    <button data-variant="slim" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none h-11 md:h-12 px-5 bg-gray-700 dark:bg-gray-600 text-white py-2 transform-none normal-case hover:text-white hover:bg-gray-600 hover:shadow-cart">Load
                        More</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection