@props([
'product'=>false,
])
<div {{ $attributes }} role="button" @click="$dispatch('modal', {productId:'{{ $product->id }}',productName:'{{ $product->name }}', img: '/images/{{ $product->image }}',product_modal:true,link:'{{ route('product.show',$product->slug) }}',productDescription:'{{ $product->description }}',productCurrentPrice:'{{ $product->current_price }}',productRegularPrice:'{{ $product->regular_price }}' }),productQuantity=1" 

class="group box-border overflow-hidden flex rounded-md cursor-pointer pr-0 pb-2 lg:pb-3 flex-col items-start bg-white dark:bg-gray-800 transition duration-200 ease-in-out transform hover:-translate-y-1 md:hover:-translate-y-1.5 hover:shadow-md" role="button" title="Nike Black">
    <div class="flex mb-3 md:mb-3.5">
        <span class="box-border relative inline-block max-w-full overflow-hidden bg-none">
            <span class="box-border block max-w-full bg-none">
                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzQwIiBoZWlnaHQ9IjQ0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
            </span>
            <img alt="{{ $product->name }}" src="{{ asset('images').'/'.$product->image }}" class="absolute inset-0 block object-cover w-full max-w-full max-h-full min-w-full min-h-full transition duration-200 ease-in bg-gray-300 rounded-md rounded-s-md group-hover:rounded-b-none">
        </span>
    </div>
    <div class="w-full overflow-hidden md:px-2.5 xl:px-4">
        <h2 class="mb-1 text-sm font-semibold truncate text-heading md:text-base">
            {{ $product->name }}
        </h2>
        <p class="text-body text-xs lg:text-sm leading-normal xl:leading-relaxed max-w-[250px] truncate">
            {{ $product->description }}
        </p>
        <div class="text-heading font-semibold text-sm sm:text-base mt-1.5 space-x-2 lg:text-lg lg:mt-2.5">
            <span class="inline-block">${{ $product->current_price }}</span>
            <del class="font-normal text-gray-800 sm:text-base">${{ $product->regular_price }}</del>
        </div>
    </div>
</div>