@extends('layouts.app')
@section('contents')
<div class="border-t border-gray-300 pt-10 lg:pt-12 xl:pt-14 pb-14 lg:pb-16 xl:pb-20 px-4 md:px-8">
    <div class="w-full xl:max-w-[1170px] mx-auto" x-data="{d_style:1}">
        <div class="flex items-center justify-between mb-6 xl:mb-8">
            <h2 class="font-bold text-heading text-lg md:text-xl lg:text-2xl xl:text-3xl">All
                Shops</h2>
            <div class="flex-shrink-0 flex items-center mx-2">
                <button aria-label="list" @click="d_style = 1" class="text-2xl relative top-[1px] transition-all text-heading">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                        </path>
                    </svg>
                </button>
                <button aria-label="grid" class="text-lg transition-all mx-1.5 text-body" @click="d_style = 2">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-4 lg:gap-5 xl:gap-6">
            @foreach ($items=[0,1,2,3,4,5] as $item)                
            <a class="flex items-center px-5 lg:px-6 rounded-md shadow-vendorCard cursor-pointer relative bg-white dark:bg-gray-800 transition-all hover:shadow-md py-5 lg:py-6" :class="{'pt-10 lg:pt-12 pb-9 lg:pb-11 flex-col text-center':d_style==2}" href="single_shop_products.html">
                <span class="text-[10px] xl:text-xs font-semibold text-white uppercase px-2 py-1 xl:py-[5px] rounded bg-[#2B78C6] absolute top-2 right-2">New</span>
                <div class="border border-gray-100 relative flex flex-shrink-0 items-center justify-center bg-gray-300 rounded-full overflow-hidden w-16 h-16" :class="{'w-24 h-24 lg:w-24 lg:h-24':d_style==2}">
                    <span class="box-border block overflow-hidden absolute inset-0">
                        <img class="absolute inset-0 box-border object-cover" alt="text-logo" src="images/shops/17.png">
                    </span>
                </div>
                <div class="flex flex-col mx-4" :class="{'mb-1 pt-4 md:pt-5 lg:pt-6':d_style==2}">
                    <h4 class="text-heading font-semibold text-sm sm:leading-6 leading-7 md:text-base xl:text-lg mb-0.5">
                        Area 365 Mart</h4>
                    <p class="text-[13px] leading-5 flex items-start">
                        <span class="inline-block mr-1 text-[#6B7280] dark:text-gray-400 relative top-1">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
                                </path>
                            </svg>
                        </span>115 E 9th St, New York, CA 90079,USA
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection