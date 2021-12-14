@extends('layouts.app')
@section('contents')
<!-- Top Slider -->
<div class="swiper home-slider group">
    <div class="swiper-wrapper">
        <!-- Banner -->
        <section class="bg-top bg-no-repeat bg-cover swiper-slide" style="background-image: url('/images/slider/1.jpg');">
            <div class="h-[40vh] md:h-[69vh] flex justify-start items-center">
                <div class="ml-5 md:ml-40 space-y-1.5 md:space-y-4 text-gray-800">
                    <h4 class="text-sm md:tracking-[5.2px] md:text-lg md:font-bold text-center">
                        Welcome To Fashion</h4>
                    <h1 class="text-2xl font-extrabold uppercase md:text-6xl md:font-bold">
                        men fashion</h1>
                    <div class="flex items-center justify-center">
                        <a href="#" class="font-normal px-2 pb-0.5 md:px-5 md:py-2 bg-blue-500 text-sm md:text-base md:font-bold text-white hover:bg-white hover:text-blue-500 border-2 border-blue-500 border-opacity-0 hover:border-opacity-100 transition-all duration-100">
                            Shop now
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-top bg-no-repeat bg-cover swiper-slide" style="background-image: url('/images/slider/2.jpg');">
            <div class="h-[40vh] md:h-[69vh] flex justify-start items-center">
                <div class="ml-5 md:ml-40 space-y-1.5 md:space-y-4 text-gray-800">
                    <h4 class="text-sm md:tracking-[5.2px] md:text-lg md:font-bold text-center">
                        Welcome To Fashion</h4>
                    <h1 class="text-2xl font-extrabold uppercase md:text-6xl md:font-bold">
                        women fashion</h1>
                    <div class="flex items-center justify-center">
                        <a href="#" class="font-normal px-2 pb-0.5 md:px-5 md:py-2 bg-blue-500 text-sm md:text-base md:font-bold text-white hover:bg-white hover:text-blue-500 border-2 border-blue-500 border-opacity-0 hover:border-opacity-100 transition-all duration-100">
                            Shop now
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-top bg-no-repeat bg-cover swiper-slide" style="background-image: url('/images/slider/1.jpg');">
            <div class="h-[40vh] md:h-[69vh] flex justify-start items-center">
                <div class="ml-5 md:ml-40 space-y-1.5 md:space-y-4 text-gray-800">
                    <h4 class="text-sm md:tracking-[5.2px] md:text-lg md:font-bold text-center">
                        Welcome To Fashion</h4>
                    <h1 class="text-2xl font-extrabold uppercase md:text-6xl md:font-bold">
                        men fashion</h1>
                    <div class="flex items-center justify-center">
                        <a href="#" class="font-normal px-2 pb-0.5 md:px-5 md:py-2 bg-blue-500 text-sm md:text-base md:font-bold text-white hover:bg-white hover:text-blue-500 border-2 border-blue-500 border-opacity-0 hover:border-opacity-100 transition-all duration-100">
                            Shop now
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Top Slider Prev -->
    <div class="absolute right-auto z-20 flex items-center justify-center text-gray-800 transition duration-500 transform -translate-x-20 -translate-y-1/2 bg-white border rounded-full shadow opacity-0 cursor-pointer prev group-hover:opacity-100 group-hover:translate-x-0 left-3 md:left-20 top-1/2 w-9 h-9 md:w-14 md:h-14 dark:bg-gray-700 dark:text-gray-300 bg-opacity-60 hover:bg-gray-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </div>
    <!-- Top Slider Next -->
    <div class="absolute left-auto z-20 flex items-center justify-center text-gray-800 transition duration-500 transform translate-x-20 -translate-y-1/2 bg-white border rounded-full shadow opacity-0 cursor-pointer next group-hover:opacity-100 group-hover:translate-x-0 right-3 md:right-20 top-1/2 w-9 h-9 md:w-14 md:h-14 dark:bg-gray-700 dark:text-gray-300 bg-opacity-60 hover:bg-gray-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </div>
</div>
<div class="px-2 mt-8 space-y-8">
    <!-- Services Slider -->
    <div class="border-t border-border-200 md:px-4">
        <div class="relative">
            <div class="swiper slider-services">
                <div class="swiper-wrapper">
                    <a href="#" class="swiper-slide">
                        <img src="/images/offer/offer-1.png" alt="Offer 1">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="/images/offer/offer-2.png" alt="Offer 2">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="/images/offer/offer-3.png" alt="Offer 3">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="/images/offer/offer-4.png" alt="Offer 4">
                    </a>
                    <a href="#" class="swiper-slide">
                        <img src="/images/offer/offer-5.png" alt="Offer 5">
                    </a>
                </div>
            </div>
            <div class="absolute left-0 z-10 flex items-center justify-center w-8 h-8 -mt-4 transition-all duration-200 border rounded-full shadow-xl cursor-pointer service-prev top-2/4 md:-left-5 md:-mt-5 md:w-9 md:h-9 border-border-200 border-opacity-70 text-heading hover:bg-gray-800 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18" height="18">
                    <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z" fill="currentColor" stroke="currentColor"></path>
                </svg>
            </div>
            <div class="absolute right-0 z-10 flex items-center justify-center w-8 h-8 -mt-4 transition-all duration-200 border rounded-full shadow-xl cursor-pointer service-next top-1/2 md:-right-5 md:-mt-5 md:w-9 md:h-9 border-border-200 border-opacity-70 text-heading hover:bg-gray-800 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="18" height="18">
                    <path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z" fill="currentColor" stroke="currentColor"></path>
                </svg>
            </div>
        </div>
    </div>
    <!-- Top Products & Flash Sale -->
    <div class="grid grid-cols-1 gap-5 mb-12 md:gap-14 xl:gap-7 xl:grid-cols-7 2xl:grid-cols-9 md:mb-14 xl:mb-7 md:px-4">
        <div class="px-4 pt-6 pb-5 bg-white border border-opacity-0 rounded-lg shadow-sm xl:col-span-5 2xl:col-span-7 dark:border-opacity-100 dark:border-gray-500 md:pt-7 lg:pt-9 xl:pt-7 2xl:pt-9 md:px-5 lg:px-7 lg:pb-7 dark:bg-gray-600">
            <div class="flex items-center justify-between -mt-2 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                <h3 class="text-lg font-bold text-heading md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10">
                    Top Products
                </h3>
                <a class="text-xs lg:text-sm xl:text-base text-heading mt-0.5 lg:mt-1" href="#">See
                    All Product</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-5 xl:gap-7 xl:-mt-1.5 2xl:mt-0">
                <!-- Single Product -->
                <div class="box-border flex flex-row items-center pr-2 overflow-hidden transition-transform ease-linear bg-gray-200 rounded-md cursor-pointer group dark:bg-gray-800 dark:border dark:border-gray-600 lg:pr-3 2xl:pr-4" title="Maniac Red Boys">
                    <div class="flex flex-shrink-0 w-32 bg-red-400 sm:w-44 md:w-40 lg:w-52 2xl:w-56 3xl:w-64">
                        <span class="box-border relative inline-block max-w-full overflow-hidden">
                            <span class="box-border block max-w-full">
                                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjY1IiBoZWlnaHQ9IjI2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=">
                            </span>
                            <img alt="Maniac Red Boys" src="images/products/p-20-m.png" class="box-border absolute inset-0 block object-cover w-0 h-0 max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-200 ease-linear transform bg-gray-300 border-0 group-hover:scale-105">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden pl-3.5 sm:pl-5 md:pl-4 xl:pl-5 2xl:pl-6 3xl:pl-10">
                        <h2 class="text-heading font-semibold truncate mb-1 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg md:mb-1.5">
                            Maniac Red Boys</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Sporty essentials, these Under Armour athletic shorts are smooth and
                            lightweight in moisture-wicking material.</p>
                        <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                            <span class="inline-block">$15.00</span><del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">$20.00</del>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="box-border flex flex-row items-center pr-2 overflow-hidden transition-transform ease-linear bg-gray-200 rounded-md cursor-pointer group dark:bg-gray-800 dark:border dark:border-gray-600 lg:pr-3 2xl:pr-4" title="Maniac Red Boys">
                    <div class="flex flex-shrink-0 w-32 bg-red-400 sm:w-44 md:w-40 lg:w-52 2xl:w-56 3xl:w-64">
                        <span class="box-border relative inline-block max-w-full overflow-hidden">
                            <span class="box-border block max-w-full">
                                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjY1IiBoZWlnaHQ9IjI2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=">
                            </span>
                            <img alt="Maniac Red Boys" src="images/products/p-22-s.png" class="box-border absolute inset-0 block object-cover w-0 h-0 max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-200 ease-linear transform bg-gray-300 border-0 group-hover:scale-105">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden pl-3.5 sm:pl-5 md:pl-4 xl:pl-5 2xl:pl-6 3xl:pl-10">
                        <h2 class="text-heading font-semibold truncate mb-1 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg md:mb-1.5">
                            Maniac Red Boys</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Sporty essentials, these Under Armour athletic shorts are smooth and
                            lightweight in moisture-wicking material.</p>
                        <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                            <span class="inline-block">$15.00</span><del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">$20.00</del>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="box-border flex flex-row items-center pr-2 overflow-hidden transition-transform ease-linear bg-gray-200 rounded-md cursor-pointer group dark:bg-gray-800 dark:border dark:border-gray-600 lg:pr-3 2xl:pr-4" title="Maniac Red Boys">
                    <div class="flex flex-shrink-0 w-32 bg-red-400 sm:w-44 md:w-40 lg:w-52 2xl:w-56 3xl:w-64">
                        <span class="box-border relative inline-block max-w-full overflow-hidden">
                            <span class="box-border block max-w-full">
                                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjY1IiBoZWlnaHQ9IjI2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=">
                            </span>
                            <img alt="Maniac Red Boys" src="images/products/p-24-s.png" class="box-border absolute inset-0 block object-cover w-0 h-0 max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-200 ease-linear transform bg-gray-300 border-0 group-hover:scale-105">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden pl-3.5 sm:pl-5 md:pl-4 xl:pl-5 2xl:pl-6 3xl:pl-10">
                        <h2 class="text-heading font-semibold truncate mb-1 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg md:mb-1.5">
                            Maniac Red Boys</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Sporty essentials, these Under Armour athletic shorts are smooth and
                            lightweight in moisture-wicking material.</p>
                        <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                            <span class="inline-block">$15.00</span><del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">$20.00</del>
                        </div>
                    </div>
                </div>
                <!-- Single Product -->
                <div class="box-border flex flex-row items-center pr-2 overflow-hidden transition-transform ease-linear bg-gray-200 rounded-md cursor-pointer group dark:bg-gray-800 dark:border dark:border-gray-600 lg:pr-3 2xl:pr-4" title="Maniac Red Boys">
                    <div class="flex flex-shrink-0 w-32 bg-red-400 sm:w-44 md:w-40 lg:w-52 2xl:w-56 3xl:w-64">
                        <span class="box-border relative inline-block max-w-full overflow-hidden">
                            <span class="box-border block max-w-full">
                                <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjY1IiBoZWlnaHQ9IjI2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=">
                            </span>
                            <img alt="Maniac Red Boys" src="images/products/p-25-s.png" class="box-border absolute inset-0 block object-cover w-0 h-0 max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-200 ease-linear transform bg-gray-300 border-0 group-hover:scale-105">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden pl-3.5 sm:pl-5 md:pl-4 xl:pl-5 2xl:pl-6 3xl:pl-10">
                        <h2 class="text-heading font-semibold truncate mb-1 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg md:mb-1.5">
                            Maniac Red Boys</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Sporty essentials, these Under Armour athletic shorts are smooth and
                            lightweight in moisture-wicking material.</p>
                        <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                            <span class="inline-block">$15.00</span><del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">$20.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col px-4 pt-6 pb-6 bg-white border border-opacity-0 rounded-lg shadow-sm dark:border-opacity-100 dark:border-gray-500 sm:pt-7 lg:pt-8 xl:pt-7 2xl:pt-9 md:px-5 lg:px-7 lg:pb-7 false col-span-full xl:col-span-2 row-span-full xl:row-auto dark:bg-gray-800">
            <div class="flex items-center justify-between mb-4 -mt-2 md:mb-5 lg:mb-6 xl:mb-5 2xl:mb-6 3xl:mb-8">
                <h3 class="text-lg font-bold text-heading md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10">
                    Flash Sale</h3>
            </div>
            <div class="2xl:pt-1.5 3xl:pt-0">
                <div class="relative">
                    <div class="swiper flash-sale-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="flex flex-col justify-between h-full">
                                    <div class="mb-5 sm:mb-7 lg:mb-8 2xl:mb-10 3xl:mb-12">
                                        <div class="box-border flex flex-col items-start pb-0 overflow-hidden rounded-md cursor-pointer group" title="Adidas Shoes Black">
                                            <div class="flex mb-3 md:mb-3.5 pb-0">
                                                <span class="box-border relative inline-block max-w-full p-0 m-0 overflow-hidden border-0 bg-none">
                                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                        <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzMwIiBoZWlnaHQ9IjMzMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full p-0 m-0 border-0 bg-none">
                                                    </span>
                                                    <img alt="Adidas Shoes Black" src="images/products/p-22-s.png" class="box-border absolute inset-0 block object-cover max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-150 ease-linear transform bg-gray-300 rounded-md rounded-s-md group-hover:scale-105">
                                                </span>
                                            </div>
                                            <div class="w-full overflow-hidden">
                                                <h2 class="font-semibold truncate mb-1 md:mb-1.5 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg">
                                                    Adidas Shoes Black</h2>
                                                <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                                                    Men Black top sleeveless gown</p>
                                                <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                                                    <span class="inline-block">$45.00</span>
                                                    <del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">$99.99</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between items-center mb-2.5 md:mb-3 xl:mb-2.5 2xl:mb-4">
                                            <div class="text-xs leading-6 text-body md:text-sm md:leading-7">
                                                Sold :<span class="font-semibold text-blue-500 dark:text-blue-300">120</span>
                                            </div>
                                            <div class="text-xs leading-6 text-body md:text-sm md:leading-7">
                                                Available :<span class="font-semibold text-blue-500 dark:text-blue-300">147</span>
                                            </div>
                                        </div>
                                        <div class="relative w-full h-2.5 lg:h-3 2xl:h-4 bg-gray-100 rounded-full overflow-hidden">
                                            <div class="absolute flex items-center justify-center h-full text-white bg-blue-500" style="width: 45%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="flex flex-col justify-between h-full">
                                    <div class="mb-5 sm:mb-7 lg:mb-8 2xl:mb-10 3xl:mb-12">
                                        <div class="box-border flex flex-col items-start pb-0 overflow-hidden rounded-md cursor-pointer group" title="Adidas Shoes Black">
                                            <div class="flex mb-3 md:mb-3.5 pb-0">
                                                <span class="box-border relative inline-block max-w-full p-0 m-0 overflow-hidden border-0 bg-none">
                                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                        <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzMwIiBoZWlnaHQ9IjMzMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full p-0 m-0 border-0 bg-none">
                                                    </span>
                                                    <img alt="Adidas Shoes Black" src="images/products/p-22-s.png" class="box-border absolute inset-0 block object-cover max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-150 ease-linear transform bg-gray-300 rounded-md rounded-s-md group-hover:scale-105">
                                                </span>
                                            </div>
                                            <div class="w-full overflow-hidden">
                                                <h2 class="font-semibold truncate mb-1 md:mb-1.5 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg">
                                                    Adidas Shoes Black</h2>
                                                <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                                                    Men Black top sleeveless gown</p>
                                                <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                                                    <span class="inline-block">$45.00</span>
                                                    <del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">$99.99</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between items-center mb-2.5 md:mb-3 xl:mb-2.5 2xl:mb-4">
                                            <div class="text-xs leading-6 text-body md:text-sm md:leading-7">
                                                Sold :<span class="font-semibold text-blue-500 dark:text-blue-300">120</span>
                                            </div>
                                            <div class="text-xs leading-6 text-body md:text-sm md:leading-7">
                                                Available :<span class="font-semibold text-blue-500 dark:text-blue-300">147</span>
                                            </div>
                                        </div>
                                        <div class="relative w-full h-2.5 lg:h-3 2xl:h-4 bg-gray-100 rounded-full overflow-hidden">
                                            <div class="absolute flex items-center justify-center h-full text-white bg-blue-500" style="width: 45%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="flex flex-col justify-between h-full">
                                    <div class="mb-5 sm:mb-7 lg:mb-8 2xl:mb-10 3xl:mb-12">
                                        <div class="box-border flex flex-col items-start pb-0 overflow-hidden rounded-md cursor-pointer group" title="Adidas Shoes Black">
                                            <div class="flex mb-3 md:mb-3.5 pb-0">
                                                <span class="box-border relative inline-block max-w-full p-0 m-0 overflow-hidden border-0 bg-none">
                                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                        <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzMwIiBoZWlnaHQ9IjMzMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full p-0 m-0 border-0 bg-none">
                                                    </span>
                                                    <img alt="Adidas Shoes Black" src="images/products/p-22-s.png" class="box-border absolute inset-0 block object-cover max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-150 ease-linear transform bg-gray-300 rounded-md rounded-s-md group-hover:scale-105">
                                                </span>
                                            </div>
                                            <div class="w-full overflow-hidden">
                                                <h2 class="font-semibold truncate mb-1 md:mb-1.5 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg">
                                                    Adidas Shoes Black</h2>
                                                <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                                                    Men Black top sleeveless gown</p>
                                                <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                                                    <span class="inline-block">$45.00</span>
                                                    <del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">$99.99</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between items-center mb-2.5 md:mb-3 xl:mb-2.5 2xl:mb-4">
                                            <div class="text-xs leading-6 text-body md:text-sm md:leading-7">
                                                Sold :<span class="font-semibold text-blue-500 dark:text-blue-300">120</span>
                                            </div>
                                            <div class="text-xs leading-6 text-body md:text-sm md:leading-7">
                                                Available :<span class="font-semibold text-blue-500 dark:text-blue-300">147</span>
                                            </div>
                                        </div>
                                        <div class="relative w-full h-2.5 lg:h-3 2xl:h-4 bg-gray-100 rounded-full overflow-hidden">
                                            <div class="absolute flex items-center justify-center h-full text-white bg-blue-500" style="width: 45%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="flex flex-col justify-between h-full">
                                    <div class="mb-5 sm:mb-7 lg:mb-8 2xl:mb-10 3xl:mb-12">
                                        <div class="box-border flex flex-col items-start pb-0 overflow-hidden rounded-md cursor-pointer group" title="Adidas Shoes Black">
                                            <div class="flex mb-3 md:mb-3.5 pb-0">
                                                <span class="box-border relative inline-block max-w-full p-0 m-0 overflow-hidden border-0 bg-none">
                                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                        <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzMwIiBoZWlnaHQ9IjMzMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full p-0 m-0 border-0 bg-none">
                                                    </span>
                                                    <img alt="Adidas Shoes Black" src="images/products/p-22-s.png" class="box-border absolute inset-0 block object-cover max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-150 ease-linear transform bg-gray-300 rounded-md rounded-s-md group-hover:scale-105">
                                                </span>
                                            </div>
                                            <div class="w-full overflow-hidden">
                                                <h2 class="font-semibold truncate mb-1 md:mb-1.5 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg">
                                                    Adidas Shoes Black</h2>
                                                <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                                                    Men Black top sleeveless gown</p>
                                                <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                                                    <span class="inline-block">$45.00</span>
                                                    <del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">$99.99</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-between items-center mb-2.5 md:mb-3 xl:mb-2.5 2xl:mb-4">
                                            <div class="text-xs leading-6 text-body md:text-sm md:leading-7">
                                                Sold :<span class="font-semibold text-blue-500 dark:text-blue-300">120</span>
                                            </div>
                                            <div class="text-xs leading-6 text-body md:text-sm md:leading-7">
                                                Available :<span class="font-semibold text-blue-500 dark:text-blue-300">147</span>
                                            </div>
                                        </div>
                                        <div class="relative w-full h-2.5 lg:h-3 2xl:h-4 bg-gray-100 rounded-full overflow-hidden">
                                            <div class="absolute flex items-center justify-center h-full text-white bg-blue-500" style="width: 45%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute z-10 flex items-center w-full -mt-20 top-2/4 md:-mt-26">
                        <button class="absolute left-0 flex items-center justify-center text-sm text-black transition transform -translate-x-1/2 bg-white rounded-full flash-sale-prev w-7 h-7 lg:w-8 lg:h-8 md:text-base lg:text-lg duration-250 hover:bg-gray-900 hover:text-white focus:outline-none shadow-navigation" aria-label="prev-button">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                </path>
                            </svg>
                        </button>
                        <button class="absolute right-0 flex items-center justify-center text-sm text-black transition transform translate-x-1/2 bg-white rounded-full flash-sale-next w-7 h-7 lg:w-8 lg:h-8 md:text-base lg:text-lg duration-250 hover:bg-gray-900 hover:text-white focus:outline-none shadow-navigation">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Categories -->
    <div class="md:px-4">
        <div class="p-8 bg-white border border-opacity-0 rounded-lg shadow-sm dark:bg-gray-600 dark:border-opacity-100 dark:border-gray-500">
            <div class="flex items-center justify-between -mt-2 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                <h3 class="text-lg font-bold text-heading md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10">
                    Featured Categories
                </h3>
            </div>
            <!-- Slider -->
            <div class="relative lg:hidden">
                <div class="relative">
                    <div class="swiper featured-slide">
                        <div class="swiper-wrapper md:hidden">
                            <div class="swiper-slide">
                                <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:border-gray-500 lg:p-5 xl:p-7">
                                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                                        Jewellers
                                    </h4>
                                    <div class="grid grid-cols-3 gap-2.5 xl:gap-3">
                                        <!-- Same as not slider section -->
                                        <a class="flex overflow-hidden rounded-md" href="#">
                                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                                <span class="box-border block max-w-full">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                                </span>
                                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                                            </span>
                                        </a>
                                        <a class="flex overflow-hidden rounded-md" href="#">
                                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                                <span class="box-border block max-w-full">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                                </span>
                                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                                            </span>
                                        </a>
                                        <a class="flex overflow-hidden rounded-md" href="#">
                                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                                <span class="box-border block max-w-full">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                                </span>
                                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute z-10 flex items-center w-full top-2/4 ">
                        <button class="absolute left-0 flex items-center justify-center text-sm text-black transition transform -translate-x-1/2 bg-white rounded-full featured-prev w-7 h-7 lg:w-8 lg:h-8 md:text-base lg:text-lg duration-250 hover:bg-gray-900 hover:text-white focus:outline-none shadow-navigation xl:w-10 xl:h-10 3xl:w-12 3xl:h-12 3xl:text-2xl">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z">
                                </path>
                            </svg>
                        </button>
                        <button class="absolute right-0 flex items-center justify-center text-sm text-black transition transform translate-x-1/2 bg-white rounded-full featured-next w-7 h-7 lg:w-8 lg:h-8 md:text-base lg:text-lg duration-250 hover:bg-gray-900 hover:text-white focus:outline-none shadow-navigation xl:w-10 xl:h-10 3xl:w-12 3xl:h-12 3xl:text-2xl" aria-label="next-button"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z">
                                </path>
                            </svg></button>
                    </div>
                </div>
            </div>
            <!-- Not Slider -->
            <div class="hidden lg:grid lg:grid-cols-3 lg:gap-5 xl:gap-7">
                <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 lg:p-5 xl:p-7">
                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                        Bags</h4>
                    <div class="grid grid-cols-3 gap-2.5 xl:gap-3">
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 lg:p-5 xl:p-7">
                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                        Bags</h4>
                    <div class="grid grid-cols-3 gap-2.5 xl:gap-3">
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 lg:p-5 xl:p-7">
                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                        Bags</h4>
                    <div class="grid grid-cols-3 gap-2.5 xl:gap-3">
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 lg:p-5 xl:p-7">
                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                        Bags</h4>
                    <div class="grid grid-cols-3 gap-2.5 xl:gap-3">
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 lg:p-5 xl:p-7">
                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                        Bags</h4>
                    <div class="grid grid-cols-3 gap-2.5 xl:gap-3">
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 lg:p-5 xl:p-7">
                    <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                        Bags</h4>
                    <div class="grid grid-cols-3 gap-2.5 xl:gap-3">
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Selling Products -->
    <div class="md:px-4">
        <div class="p-4 bg-white border border-opacity-0 rounded-md shadow-sm dark:border-opacity-100 dark:border-gray-500 md:p-8 dark:bg-gray-800">
            <div class="flex items-center justify-between -mt-2 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
                <h3 class="text-lg font-bold text-heading md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10">
                    Best Selling Products</h3>
            </div>
            <!-- Products Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-6 gap-x-3 md:gap-x-5 xl:gap-x-7 gap-y-3 xl:gap-y-5 2xl:gap-y-8">
                <!-- Single Product -->
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
                <div class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
                    <div class="flex mb-3 md:mb-3.5">
                        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                            <span class="box-border block max-w-full bg-none">
                                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img alt="Nike Bslack" src="images/products/p-22-s.png" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
                        </span>
                    </div>
                    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
                        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
                            Nike Black</h2>
                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                            Casual wear (casual attire or clothing) may be a Western code that’s
                            relaxed, occasional, spontaneous and fitted to everyday use. Casual
                            wear
                            became popular within the Western world</p>
                        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
                            <span class="inline-block">$11.00</span>
                            <del class="font-normal text-gray-800 sm:text-base">$15.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection