@props([
'products',
'flashSaleProducts'
])
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
            @foreach ($products as $product )
            <div role="button" @click="$dispatch('modal', {productId:'{{ $product->id }}',productName:'{{ $product->name }}', img: '/images/{{ $product->image }}',product_modal:true,link:'{{ route('product.show',$product->slug) }}',productDescription:'{{ $product->description }}',productCurrentPrice:'{{ $product->current_price }}',productRegularPrice:'{{ $product->regular_price }}' }),productQuantity=1" class="box-border flex flex-row items-center pr-2 overflow-hidden transition-transform ease-linear bg-gray-200 rounded-md cursor-pointer group dark:bg-gray-800 dark:border dark:border-gray-600 lg:pr-3 2xl:pr-4" title="Maniac Red Boys">
                <div class="flex flex-shrink-0 w-32 sm:w-44 md:w-40 lg:w-52 2xl:w-56 3xl:w-64">
                    <span class="box-border relative inline-block max-w-full overflow-hidden">
                        <span class="box-border block max-w-full">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjY1IiBoZWlnaHQ9IjI2NSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=">
                        </span>
                        <img alt="Maniac Red Boys" src="{{ asset('images').'/'.$product->image }}" class="box-border absolute inset-0 block object-cover w-0 h-0 max-w-full max-h-full min-w-full min-h-full p-0 m-auto transition duration-200 ease-linear transform bg-gray-300 border-0 group-hover:scale-105">
                    </span>
                </div>
                <div class="w-full overflow-hidden pl-3.5 sm:pl-5 md:pl-4 xl:pl-5 2xl:pl-6 3xl:pl-10">
                    <h2 class="text-heading font-semibold truncate mb-1 text-sm sm:text-base md:text-sm lg:text-base xl:text-lg md:mb-1.5">
                        {{ $product->name }}
                    </h2>
                    <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
                        {{ $product->description }}
                    </p>
                    <div class="text-heading font-semibold text-sm mt-1.5 space-x-2 sm:text-xl md:text-base lg:text-xl md:mt-2.5 2xl:mt-3">
                        <span class="inline-block">${{ $product->current_price }}</span>
                        <del class="font-normal text-gray-800 sm:text-base dark:text-gray-400">${{ $product->regular_price }}</del>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <x-home.slider.flash-sale :products="$flashSaleProducts"></x-home.slider.flash-sale>
</div>