<div class="swiper home-slider group">
    <div class="swiper-wrapper">
        <!-- Banner -->
        @php
            $items=[0,1];
        @endphp
        @foreach ($items as $item)
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
        @endforeach
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