@props([
'categories'
])
<div class="relative lg:hidden">
    <div class="relative">
        <div class="swiper featured-slide">
            <div class="swiper-wrapper md:hidden">
                @foreach ($categories as $category)
                <div class="swiper-slide">
                    <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:border-gray-500 lg:p-5 xl:p-7">
                        <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                            {{ $category->name }}
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
                @endforeach
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