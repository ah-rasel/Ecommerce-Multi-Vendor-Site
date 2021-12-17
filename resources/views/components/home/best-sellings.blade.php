@props([
'products'=>false
])
<div class="md:px-4">
    <div class="p-4 bg-white border border-opacity-0 rounded-md shadow-sm dark:border-opacity-100 dark:border-gray-500 md:p-8 dark:bg-gray-800">
        <div class="flex items-center justify-between -mt-2 pb-0.5 mb-4 md:mb-5 lg:mb-6 2xl:mb-7 3xl:mb-8">
            <h3 class="text-lg font-bold text-heading md:text-xl lg:text-2xl 2xl:text-3xl xl:leading-10">
                Best Selling Products</h3>
        </div>
        <!-- Products Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-6 gap-x-3 md:gap-x-5 xl:gap-x-7 gap-y-3 xl:gap-y-5 2xl:gap-y-8">
            @foreach ($products as $product)
            <x-global.product-card href="{{ route('product.show',$product->slug) }}" :product="$product"></x-global.product-card>
            @endforeach
        </div>
    </div>
</div>