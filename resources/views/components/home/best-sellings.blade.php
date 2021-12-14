<div class="md:px-4">
    <div class="p-4 bg-white border border-opacity-0 rounded-md shadow-sm dark:border-opacity-100 dark:border-gray-500 md:p-8 dark:bg-gray-800">
        <div class="flex items-center justify-between -mt-2 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
            <h3 class="text-lg font-bold text-heading md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10">
                Best Selling Products</h3>
        </div>
        <!-- Products Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-6 gap-x-3 md:gap-x-5 xl:gap-x-7 gap-y-3 xl:gap-y-5 2xl:gap-y-8">
            @foreach ($items=[0,1,2,3,4,5,6,7,8,9,10,11] as $item)
                
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
            @endforeach
        </div>
    </div>
</div>