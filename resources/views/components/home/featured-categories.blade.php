<div class="md:px-4">
    <div class="p-2 md:p-8 bg-white border border-opacity-0 rounded-lg shadow-sm dark:bg-gray-600 dark:border-opacity-100 dark:border-gray-500">
        <div class="flex items-center justify-between -mt-2 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
            <h3 class="text-lg font-bold text-heading md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10">
                Featured Categories
            </h3>
        </div>
        <!-- Slider -->
        <x-home.slider.featured-categories-slider></x-home.slider.featured-categories-slider>
        <!-- Not Slider -->
        <div class="hidden lg:grid lg:grid-cols-3 lg:gap-5 xl:gap-7">
            @php
            $items = [0,1,2,3,4,5];
            @endphp
            @foreach ($items as $item)
            <div class="flex flex-col p-4 bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 lg:p-5 xl:p-7">
                <h4 class="text-heading text-sm md:text-base xl:text-lg font-semibold capitalize -mt-0.5 lg:-mt-1 xl:-mt-0 mb-2.5 lg:mb-3.5">
                    Bags</h4>
                <div class="grid grid-cols-3 gap-2.5 xl:gap-3">
                    @for ($i=1;$i<=3;$i++) 
                        <a class="flex overflow-hidden rounded-md" href="#">
                            <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
                                <span class="box-border block max-w-full">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTY1IiBoZWlnaHQ9IjE2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" class="block max-w-full bg-none">
                                </span>
                                <img alt="Alter Products" src="images/products/p-20-m.png" class="box-border absolute inset-0 object-cover transition duration-300 ease-in-out transform bg-gray-300 rounded-md hover:scale-110">
                            </span>
                        </a>
                    @endfor
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>