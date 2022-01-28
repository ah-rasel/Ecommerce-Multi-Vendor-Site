@extends('layouts.admin')
@section('admin_contents')
<div class="p-5 md:p-8 w-full grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-6">
    <div class="w-full ">
        <div class="flex flex-col w-full h-full p-7 rounded bg-white dark:bg-gray-800">
            <div class="w-full flex justify-between mb-auto pb-8">
                <div class="w-full flex flex-col">
                    <span class="text-base text-heading font-semibold mb-1">Total
                        Revenue</span>
                    <span class="text-xs text-body font-semibold">(Last 30
                        Days)</span>
                </div>
                <div class="w-12 h-12 rounded-full bg-gray-200 flex flex-shrink-0 items-center justify-center ms-3" style="background-color: rgb(167, 243, 208);">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.115 21.773" class="w-7 h-7" color="#047857">
                        <g data-name="Group 31">
                            <g data-name="Group 30">
                                <path data-name="Path 26" d="M6.057.35a.439.439 0 00-.439.439v20.2a.439.439 0 10.878 0V.789A.439.439 0 006.057.35z" fill="currentColor" stroke="currentColor" stroke-width=".7">
                                </path>
                            </g>
                        </g>
                        <g data-name="Group 33">
                            <g data-name="Group 32">
                                <path data-name="Path 27" d="M6.057 2.106C2.91 2.106.35 4.076.35 6.496a4.4 4.4 0 003.135 3.922.44.44 0 10.318-.82 3.559 3.559 0 01-2.576-3.1c0-1.937 2.166-3.512 4.829-3.512s4.829 1.575 4.829 3.512a.439.439 0 10.878 0c.002-2.423-2.559-4.392-5.706-4.392z" fill="currentColor" stroke="currentColor" stroke-width=".7">
                                </path>
                            </g>
                        </g>
                        <g data-name="Group 35">
                            <g data-name="Group 34">
                                <path data-name="Path 28" d="M8.629 11.355a.44.44 0 10-.317.82 3.558 3.558 0 012.576 3.1c0 1.937-2.166 3.512-4.829 3.512S1.23 17.212 1.23 15.275a.439.439 0 00-.878 0c0 2.421 2.56 4.39 5.707 4.39s5.707-1.97 5.707-4.39a4.4 4.4 0 00-3.137-3.92z" fill="currentColor" stroke="currentColor" stroke-width=".7">
                                </path>
                            </g>
                        </g>
                        <g data-name="Group 37">
                            <g data-name="Group 36">
                                <path data-name="Path 29" d="M8.634 11.357c-1.285-.518-1.894-.719-2.538-.932a40.761 40.761 0 01-2.292-.824.44.44 0 00-.318.82c1.152.448 1.756.644 2.336.838.63.208 1.226.405 2.485.912a.446.446 0 00.164.032.438.438 0 00.163-.845z" fill="currentColor" stroke="currentColor" stroke-width=".7">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <span class="text-xl font-semibold text-heading mb-2">
                $0.00
            </span>
        </div>
    </div>
    <div class="w-full">
        <div class="flex flex-col w-full h-full p-7 rounded bg-white dark:bg-gray-800">
            <div class="w-full flex justify-between mb-auto pb-8">
                <div class="w-full flex flex-col"><span class="text-base text-heading font-semibold mb-1">Total Orders ({{ $total_orders }})</span><span class="text-xs text-body font-semibold">(Last 30
                        Days)</span></div>
                <div class="w-12 h-12 rounded-full bg-gray-200 flex flex-shrink-0 items-center justify-center ms-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48px" height="48px" viewBox="0 0 48 48">
                        <g data-name="Group 2994" transform="translate(-601 -757)">
                            <rect data-name="Rectangle 541" width="48" height="48" rx="20" transform="translate(601 757)" fill="#facaca"></rect>
                            <g transform="translate(610.988 768.246)">
                                <g data-name="Group 2985" transform="translate(3.013 0.754)">
                                    <path data-name="Path 3641" d="M6.071,15.424H23.177a.726.726,0,0,0,.724-.674l.778-10.885a.726.726,0,0,0-.724-.778h-8.6V1.48a.726.726,0,1,0-1.452,0V3.087H5.832c-.051-.618-2.058-.416-.7-.077-.113-.517-.571-.277-.71,0L5.29,14.073a3.058,3.058,0,0,0,.78,6.016h.121a3.058,3.058,0,1,0,5.2,0h6.849a3.059,3.059,0,1,0,5.175-.042.726.726,0,0,0-.241-1.41H6.071a1.607,1.607,0,0,1,0-3.213ZM13.9,4.539V9.058L12.8,7.964a.726.726,0,0,0-1.027,1.027l2.333,2.333a.726.726,0,0,0,1.027,0L17.47,8.991a.726.726,0,0,0-1.027-1.027L15.35,9.058V4.539h7.825L22.5,13.972H6.739L5.953,4.539Zm6.946,15.55A1.607,1.607,0,1,1,19.237,21.7,1.608,1.608,0,0,1,20.844,20.089Zm-12.051,0A1.607,1.607,0,1,1,7.186,21.7,1.608,1.608,0,0,1,8.792,20.089Z" transform="translate(-3.013 -0.754)" fill="#ff6e6e">
                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="text-xs font-semibold mb-2 flex gap-x-2 items-center">
                <div class="">
                    <span class="text-xl font-semibold text-heading mb-2">
                        {{ env('CURRENCY').$order_sum }}
                    </span>
                </div>
                <a href="{{ route('admin.orders.index') }}" class="hover:underline text-slate-600 group uppercase flex items-center justify-center">
                    View Orders
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-3 opacity-0 group-hover:opacity-100 group-hover:translate-x-3 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="flex flex-col w-full h-full p-7 rounded bg-white dark:bg-gray-800">
            <div class="w-full flex justify-between mb-auto pb-8">
                <div class="w-full flex flex-col">
                    <span class="text-base text-heading font-semibold mb-1">Total Shops ({{ $total_shops }})</span>
                    <span class="text-xs text-body font-semibold">(Last 30 Days)</span>
                </div>
                <div class="w-12 h-12 rounded-full bg-gray-200 flex flex-shrink-0 items-center justify-center ms-3" style="background-color: rgb(147, 197, 253);">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.3 15.057" class="w-6" color="#1D4ED8">
                        <g fill="currentColor" stroke="currentColor" stroke-width=".3">
                            <path data-name="Path 22617" d="M2.258.92a.218.218 0 01.2-.128h13.365a.218.218 0 01.2.127l1.487 3.247a1.125 1.125 0 01-2.249-.066.328.328 0 00-.007-.065.321.321 0 00-.636.065 1.125 1.125 0 01-2.251 0 .321.321 0 00-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.249.065L2.261.92zm6.738 13.345V7.694a.6.6 0 00-.6-.6H3.95a.6.6 0 00-.6.6v6.575H2.139V5.858a1.569 1.569 0 012.676.014 1.765 1.765 0 012.893 0 1.765 1.765 0 012.893 0 1.765 1.765 0 012.893 0 1.548 1.548 0 012.652-.017v8.414zm-5.009-.006V7.734H8.35v6.525zM1.492 5.816v8.77a.321.321 0 00.321.321h14.649a.321.321 0 00.321-.321V5.822a1.77 1.77 0 001.366-1.721.321.321 0 00-.029-.134L16.602.652a.862.862 0 00-.782-.5H2.456a.861.861 0 00-.784.506L.178 3.971a.321.321 0 00-.028.132 1.771 1.771 0 001.342 1.715z">
                            </path>
                            <path data-name="Path 22618" d="M15.008 11.895h-4.7V7.734h4.7v4.162zm0-4.8h-4.7a.642.642 0 00-.641.641v4.163a.642.642 0 00.641.641h4.7a.642.642 0 00.641-.641V7.736a.642.642 0 00-.641-.641z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="text-xs font-semibold mb-2 flex">
                <a href="{{ route('admin.shops.index') }}" class="hover:underline text-slate-600 group uppercase flex items-center justify-center">View Shops
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-3 opacity-0 group-hover:opacity-100 group-hover:translate-x-3 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="flex flex-col w-full h-full p-7 rounded bg-white dark:bg-gray-800">
            <div class="w-full flex justify-between mb-auto pb-8">
                <div class="w-full flex flex-col"><span class="text-base text-heading font-semibold mb-1">New Shop Requests ({{ $new_shops }})</span><span class="text-xs text-body font-semibold">(Last 30 Days)</span>
                </div>
                <div class="w-12 h-12 rounded-full bg-gray-200 flex flex-shrink-0 items-center justify-center ms-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.3 15.057" class="w-6" color="#1D4ED8">
                        <g fill="currentColor" stroke="currentColor" stroke-width=".3">
                            <path data-name="Path 22617" d="M2.258.92a.218.218 0 01.2-.128h13.365a.218.218 0 01.2.127l1.487 3.247a1.125 1.125 0 01-2.249-.066.328.328 0 00-.007-.065.321.321 0 00-.636.065 1.125 1.125 0 01-2.251 0 .321.321 0 00-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.249.065L2.261.92zm6.738 13.345V7.694a.6.6 0 00-.6-.6H3.95a.6.6 0 00-.6.6v6.575H2.139V5.858a1.569 1.569 0 012.676.014 1.765 1.765 0 012.893 0 1.765 1.765 0 012.893 0 1.765 1.765 0 012.893 0 1.548 1.548 0 012.652-.017v8.414zm-5.009-.006V7.734H8.35v6.525zM1.492 5.816v8.77a.321.321 0 00.321.321h14.649a.321.321 0 00.321-.321V5.822a1.77 1.77 0 001.366-1.721.321.321 0 00-.029-.134L16.602.652a.862.862 0 00-.782-.5H2.456a.861.861 0 00-.784.506L.178 3.971a.321.321 0 00-.028.132 1.771 1.771 0 001.342 1.715z">
                            </path>
                            <path data-name="Path 22618" d="M15.008 11.895h-4.7V7.734h4.7v4.162zm0-4.8h-4.7a.642.642 0 00-.641.641v4.163a.642.642 0 00.641.641h4.7a.642.642 0 00.641-.641V7.736a.642.642 0 00-.641-.641z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="text-xs font-semibold mb-2 flex">
                <a href="{{ route('admin.new.shops') }}" class="hover:underline text-slate-600 group uppercase flex items-center justify-center">View requests
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 -translate-x-3 opacity-0 group-hover:opacity-100 group-hover:translate-x-3 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection