<div class="mx-auto w-full">
    <img class="mx-auto w-32 h-32" src="{{ asset('images/').'/'.$shop->logo }}" alt="Shop Logo">
    <div class="space-y-1">
        <h3 class="text-center font-bold">{{ $shop->name }} </h3>
        <p class="text-center"><a href="{{ route('vendor.products') }}" class="hover:underline">{{ $shop->products->count() }} Products</a> | 10 orders</p>
        <p class="text-center">rasel@myshop.com</p>
    </div>
</div>