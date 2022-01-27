@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Products
    <span class="font-normal text-base ml-6">
        <x-table.add_item_button href="{{ route('admin.products.create') }}">
            Add new Product
        </x-table.add_item_button>
    </span>
</x-global.title>
<x-table.table_index>
    <x-slot name="head">
        <x-table.heading> Image </x-table.heading>
        <x-table.heading> Name </x-table.heading>
        <x-table.heading> Category </x-table.heading>
        <x-table.heading> Shop </x-table.heading>
        <x-table.heading> Price/Unit </x-table.heading>
        <x-table.heading> Quantity </x-table.heading>
        <x-table.heading> Status </x-table.heading>
        <x-table.heading> Actions </x-table.heading>
    </x-slot>
    <x-slot name="body">
        @foreach ($products as $product)
        <x-table.row>
            <x-table.cell>
                <div class="w-10 h-10 box-border inline-block overflow-hidden rounded-sm">
                    <img src="{{ asset('images') }}/{{ $product->image }}" alt="">
                </div>
            </x-table.cell>
            <x-table.cell>
                <a href="{{ route('product.show',$product->slug) }}" class="hover:underline">
                    {{ $product->name }}
                </a>
            </x-table.cell>
            <x-table.cell>
                {{ $product->category->name }}
            </x-table.cell>
            <x-table.cell>
                {{ $product->shop->name }}
            </x-table.cell>
            <x-table.cell>
                ${{ $product->current_price }}
                <span class="line-through text-slate-500 text-sm">${{ $product->regular_price }}</span>
            </x-table.cell>
            <x-table.cell>
                {{ $product->quantity }}
            </x-table.cell>
            <x-table.cell>
                <x-global.badge>Active</x-global.badge>
            </x-table.cell>
            <x-table.cell>
                <div class="flex space-x-2 md:space-x-4">
                    <div class="">
                        <a href="{{ route('product.show',$product->slug) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </div>
                    <x-table.button.action href="#" edit></x-table.button.action>
                    <form action="{{ route('admin.products.destroy',$product) }}" onsubmit="return confirm('Are you sure to delete this Product ?');" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-warning" type="submit">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </x-table.cell>
        </x-table.row>
        @endforeach
    </x-slot>
</x-table.table_index>
@endsection