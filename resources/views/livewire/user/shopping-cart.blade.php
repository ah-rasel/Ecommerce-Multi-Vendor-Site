<div x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" :style="isCartOpen && {transform:'translateX(0)'}" class="fixed w-80 md:w-96 z-20 pt-20 bg-white dark:bg-gray-600 transition duration-200 translate-x-full top-0 right-0">
    <div class="overflow-y-scroll h-screen relative">
        <div class="mt-10 mb-10">
            <div class="w-full px-5 md:px-7 pb-64">

                @foreach ($products as $product)
                <livewire:user.cart-single-product :name="$product->name" :rowId="$product->rowId" :price="$product->price" :qty="$product->qty" :image="$product->options->image" wire:key="{{ $loop->index }}">
                    @endforeach
            </div>
        </div>
        <div class="fixed w-full md:pr-4 bottom-[130px] md:bottom-20 left-auto right-auto">
            <div class="border-t bg-white border-gray-200 py-6 px-4 sm:px-6">
                <div class="flex justify-between text-base font-medium text-gray-900">
                    <p>Total</p>
                    <p>{{ $cart_price_total }}</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at
                    checkout.</p>
                <div class="mt-6">
                    <a href="Checkout.html" class="flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Checkout</a>
                </div>
                <div class="mt-6 flex justify-center text-sm text-center text-gray-500">
                    <p>
                        or
                        <button type="button" @click="closeCart" class="text-indigo-600 font-medium hover:text-indigo-500">Continue
                            Shopping<span aria-hidden="true"> &rarr;</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>