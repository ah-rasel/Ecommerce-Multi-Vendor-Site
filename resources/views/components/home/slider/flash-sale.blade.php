@props([
'products'
])
<div class="flex flex-col px-4 pt-6 pb-6 bg-white border border-opacity-0 rounded-lg shadow-sm dark:border-opacity-100 dark:border-gray-500 sm:pt-7 lg:pt-8 xl:pt-7 2xl:pt-9 md:px-5 lg:px-7 lg:pb-7 false col-span-full xl:col-span-2 row-span-full xl:row-auto dark:bg-gray-800">
    <div class="flex items-center justify-between mb-4 -mt-2 md:mb-5 lg:mb-6 xl:mb-5 2xl:mb-6 3xl:mb-8">
        <h3 class="text-lg font-bold text-heading md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10">
            Flash Sale</h3>
    </div>
    <div class="2xl:pt-1.5 3xl:pt-0">
        <div class="relative">
            <div class="swiper flash-sale-slider">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
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
                                            <img alt="Adidas Shoes Black" src="{{ asset('images').'/'.$product->image }}" class="box-border absolute inset-0 block object-cover max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-150 ease-linear transform bg-gray-300 rounded-md rounded-s-md group-hover:scale-105">
                                        </span>
                                    </div>
                                    <div class="w-full overflow-hidden">
                                        <h2 class="font-semibold truncate mb-1 md:mb-1.5 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg">
                                            {{ $product->name }}
                                        </h2>
                                        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                                            {{ $product->description }}
                                        </p>
                                        <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                                            <span class="inline-block">${{ $product->price }}</span>
                                            <del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">${{ $product->price }}</del>
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
                    @endforeach
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