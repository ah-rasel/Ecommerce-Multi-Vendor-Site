<template x-on:modal.window="productId = $event.detail.productId;img = $event.detail.img; product_modal = $event.detail.product_modal;productName=$event.detail.productName;productCurrentPrice = $event.detail.productCurrentPrice;productRegularPrice = $event.detail.productRegularPrice;productDescription = $event.detail.productDescription;link=$event.detail.link;"></template>

<div x-show="product_modal" x-cloak class="fixed z-40 inset-0 overflow-y-auto" aria-modal="true">
    <div x-data="{SuccessMessage:false}" class="flex min-h-screen text-center md:block md:px-2 lg:px-4 -mt-6">

        <div x-cloak x-show="product_modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block" @click="product_modal = false" aria-hidden="true">
        </div>
        <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true"></span>

        <div x-show="product_modal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" x-transition:enter-end="opacity-100 translate-y-0 md:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 md:scale-100" x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl">
            <div class="w-full relative flex items-center bg-white dark:bg-gray-800 px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 dark:text-gray-300 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8" @click="product_modal = false">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <div class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
                    <div class="aspect-w-2 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden sm:col-span-4 lg:col-span-5">
                        <img :src="img" alt="Product image" class="object-center object-cover">
                    </div>
                    <div class="sm:col-span-8 lg:col-span-7">
                        <div class="pb-5">
                            <div class="mb-2 md:mb-2.5 block -mt-1.5" role="button">
                                <h2 class=" text-lg md:text-xl lg:text-2xl font-semibold " x-text="productName"></h2>
                            </div>
                            <p class="text-sm leading-6 md:text-body md:leading-7" x-text="productDescription"></p>
                            <div class="flex items-center mt-3">
                                <div class=" font-semibold text-base md:text-xl lg:text-2xl" x-text="productCurrentPrice"></div><del class="font-segoe text-gray-400 text-base lg:text-xl px-2.5 -mt-0.5 md:mt-0" x-text="productRegularPrice"></del>
                            </div>
                        </div>
                        <section aria-labelledby="options-heading" class="mt-10">
                            <h3 id="options-heading" class="sr-only">Product options</h3>

                            <form>
                                <div class="">
                                    <h3 class="text-base md:text-lg font-semibold mb-2.5 capitalize">color</h3>
                                    <ul class="colors flex flex-wrap -mr-3">
                                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center  text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black dark:border-gray-600 dark:hover:border-gray-500">
                                            <span class="h-full w-full rounded block" style="background-color: rgb(232, 108, 37);"></span>
                                        </li>
                                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center  text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black dark:border-gray-600 dark:hover:border-gray-500">
                                            <span class="h-full w-full rounded block" style="background-color: rgb(255, 165, 180);"></span>
                                        </li>
                                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center  text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black dark:border-gray-600 dark:hover:border-gray-500">
                                            <span class="h-full w-full rounded block" style="background-color: rgb(130, 36, 227);"></span>
                                        </li>
                                        <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center  text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black dark:border-gray-600 dark:hover:border-gray-500">
                                            <span class="h-full w-full rounded block" style="background-color: rgb(221, 51, 51);"></span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Sizes -->
                                <div class="">
                                    <div class="flex items-center justify-between">
                                        <h4 class="text-base md:text-lg  font-semibold mb-2.5 capitalize">Size</h4>
                                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                                    </div>

                                    <fieldset class="mt-4">
                                        <legend class="sr-only">
                                            Choose a size
                                        </legend>
                                        <div class="grid grid-cols-4 gap-4">

                                            <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                                <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                                <p id="size-choice-0-label">
                                                    XXS
                                                </p>

                                                <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                            </label>

                                            <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                                <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                                <p id="size-choice-1-label">
                                                    XS
                                                </p>

                                                <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                            </label>

                                            <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                                <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                                                <p id="size-choice-2-label">
                                                    S
                                                </p>

                                                <!-- <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-indigo-500" aria-hidden="true"></div> -->
                                            </label>

                                            <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                                <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                                                <p id="size-choice-3-label">
                                                    M
                                                </p>

                                                <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                            </label>

                                            <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                                <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                                                <p id="size-choice-4-label">
                                                    L
                                                </p>

                                                <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                            </label>

                                            <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                                <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                                                <p id="size-choice-5-label">
                                                    XL
                                                </p>

                                                <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                            </label>

                                            <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                                <input type="radio" name="size-choice" value="XXL" class="sr-only" aria-labelledby="size-choice-6-label">
                                                <p id="size-choice-6-label">
                                                    XXL
                                                </p>

                                                <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                            </label>

                                            <label class="group relative rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-gray-50 dark:bg-gray-700 text-gray-200 cursor-not-allowed">
                                                <input type="radio" name="size-choice" value="XXXL" disabled="" class="sr-only" aria-labelledby="size-choice-7-label">
                                                <p id="size-choice-7-label">
                                                    XXXL
                                                </p>

                                                <div aria-hidden="true" class="absolute -inset-px rounded-md border dark:border-gray-400 pointer-events-none">
                                                    <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2" viewBox="0 0 100 100" stroke="currentColor">
                                                        <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke"></line>
                                                    </svg>
                                                </div>
                                            </label>

                                        </div>
                                    </fieldset>
                                </div>

                                <div class="pt-2 md:pt-4">
                                    <div class="flex items-center justify-between mb-4 space-x-3 sm:space-x-4">
                                        <div class="group flex items-center justify-between rounded-md overflow-hidden flex-shrink-0 border h-11 md:h-12 border-gray-300">
                                            <button @click.prevent="decrement()" class="flex items-center justify-center flex-shrink-0 h-full transition ease-in-out duration-300 focus:outline-none w-10 md:w-12 border-e border-gray-300 hover:text-white hover:bg-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="2px" viewBox="0 0 12 1.5">
                                                    <rect data-name="Rectangle 970" width="12px" height="2px" fill="currentColor"></rect>
                                                </svg>
                                            </button>
                                            <span class="font-semibold flex items-center justify-center h-full  transition-colors duration-250 ease-in-out cursor-default flex-shrink-0 text-base w-12  md:w-20 xl:w-24" x-text="productQuantity"></span>
                                            <button @click.prevent="increment()" class="flex items-center justify-center h-full flex-shrink-0 transition ease-in-out duration-300 focus:outline-none w-10 md:w-12 hover:text-white hover:bg-gray-600">
                                                <svg data-name="plus (2)" xmlns="http://www.w3.org/2000/svg" width="12px" height="12px" viewBox="0 0 12 12">
                                                    <g data-name="Group 5367">
                                                        <path data-name="Path 17138" d="M6.749,5.251V0h-1.5V5.251H0v1.5H5.251V12h1.5V6.749H12v-1.5Z" fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                        <button @click.prevent="SuccessMessage=true,setTimeout(() => {SuccessMessage = false,productQuantity = 1}, 3000),Livewire.emit('AddToCart',productId,productQuantity)" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none text-white px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white bg-gray-600 hover:bg-gray-600 w-full h-11 md:h-12">Add To Cart</button>
                                    </div>
                                    <div x-show="SuccessMessage" x-init="setTimeout(() => SuccessMessage = false, 3000)" class="py-2 mb-2 border border-dashed border-green-200 text-green-500">
                                        <p class="text-center">Cart Updated Successfully .</p>
                                    </div>
                                    <div class=""><a :href="link" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold font-body text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none text-white px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white bg-blue-600 hover:bg-gray-600 w-full h-11 md:h-12">View Details</a></div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    // function counter() {
    //     return {
    //         count: 1,
    //         increment() {
    //             if (this.count < 10) {
    //                 this.count++;
    //             }
    //         },
    //         decrement() {
    //             if (this.count > 1) {
    //                 this.count--;
    //             }
    //         }
    //     };
    // }
</script>