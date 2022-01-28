@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Orders
</x-global.title>
<div class="w-2/3 mx-auto border p-4 bg-white dark:bg-slate-800 mb-10">
    <div class="flex items-center justify-between mb-6 xl:mb-8">
        <h2 class="text-lg md:text-xl xl:text-2xl font-bold">Order details:</h2>
        <a href="{{ route('admin.orders.index') }}" class="flex items-center">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                </svg>
            </span>
            Back
        </a>
    </div>
    <table class="w-full font-semibold text-sm lg:text-base">
        <thead>
            <tr>
                <th class="bg-gray-200 p-4 text-left first:rounded-ts-md w-1/2">Product</th>
                <th class="bg-gray-200 p-4 text-left last:rounded-te-md w-1/2">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $ordered_product)
            <tr class="border-b font-normal border-gray-300 last:border-b-0">
                <td class="p-4">
                    <a class="text-blue-400 hover:underline" href="{{ route('product.show',$ordered_product->product->slug) }}"> {{ $ordered_product->product->name   }}</a>
                    <span class="ml-1 font-semibold text-xs">(${{ $ordered_product->unit_price }}x{{ $ordered_product->quantity }})</span>
                </td>
                <td class="p-4">${{ $ordered_product->quantity*$ordered_product->unit_price }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="odd:bg-gray-200">
                <td class="p-4 italic">Subtotal:</td>
                <td class="p-4">${{ $order->amount }}</td>
            </tr>
            <tr class="odd:bg-gray-200">
                <td class="p-4 italic">Shipping:</td>
                <td class="p-4">$0.00<span class="text-[13px] font-normal pl-1.5 inline-block">via Flat rate</span></td>
            </tr>
            <tr class="odd:bg-gray-200">
                <td class="p-4 italic">Payment method:</td>
                <td class="p-4">{{ $order->payment }}</td>
            </tr>
            <tr class="odd:bg-gray-200">
                <td class="p-4 italic">Note:</td>
                <td class="p-4">{{ $order->notes }}</td>
            </tr>
            <tr class="odd:bg-gray-200">
                <td class="p-4 italic">Total:</td>
                <td class="p-4">${{ $order->amount }}</td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection