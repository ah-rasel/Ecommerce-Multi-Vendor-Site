<div class="px-4 mt-2">
    <div class="text-3xl font-semibold text-gray-600 dark:text-slate-500">Add Product</div>
    <div class="py-6 mt-3 px-4 bg-white dark:bg-gray-800 rounded shadow">
        <form wire:submit.prevent="AddProduct">
            <div class="grid grid-cols-3 gap-x-2">
                <div class="col-span-1" class="overflow-hidden">
                    <div class="border border-slate-200 dark:border-slate-600 p-5 rounded">
                        <div class="relative">
                            <img src="{{ $image?->temporaryUrl()??(asset('product-placeholder.jpg')) }}" class="w-full rounded shadow-sm" alt="">
                            <input wire:model="image" type="file" class="mt-4 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 cursor-pointer file:rounded-full file:border-0 file:text-sm file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 " />

                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4 p-5">
                        @foreach ($boxes=[0,1,2,3,4,5] as $box)
                        <div class="h-28 overflow-hidden border border-slate-200 dark:border-slate-600 rounded-lg">
                            <div class="p-1 relative">
                                <img class="object-cover rounded-lg" src="{{ asset('product-placeholder.jpg') }}" alt="">
                                <button class="absolute h-6 w-6 bg-white text-gray-500 flex items-center justify-center rounded-md shadow dark:shadow-slate-400 right-2 top-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="px-4 space-y-4">
                        <div class="space-y-2">
                            <label for="name" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Product Name</label>
                            <input wire:model="name" type="text" name="" id="name" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                            @error('name')
                            <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="slug" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Slug</label>
                            <input wire:model="slug" type="text" name="" id="slug" class="!-mt-2 block w-full px-3 py-2.5 border-0 border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" disabled>
                            @error('slug')
                            <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="short_description" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Short Description</label>
                            <textarea wire:model.defer="short_description" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" name="" id="short_description" cols="30" rows="7"></textarea>
                            @error('short_description')
                            <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex space-x-4">
                            <div class="space-y-3 w-full">
                                <div class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Colors</div>
                                <div class="flex space-x-2">
                                    <li class="cursor-pointer rounded border border-gray-100 w-9 md:w-11 h-9 md:h-11 p-1 mb-2 md:mb-3 mr-2 md:mr-3 flex justify-center items-center  text-xs md:text-sm uppercase font-semibold transition duration-200 ease-in-out hover:border-black dark:border-gray-600 dark:hover:border-gray-500">
                                        <span class="h-full w-full rounded block" style="background-color: rgb(232, 108, 37);"></span>
                                    </li>
                                </div>
                            </div>
                            <div class="space-y-3 w-full">
                                <div class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Size</div>
                                <div class="flex space-x-2">
                                    <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                        <input type="radio" name="size-choice" value="XXL" class="sr-only" aria-labelledby="size-choice-0-label">
                                        <p id="size-choice-0-label">
                                            XXL
                                        </p>
                                        <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                    </label>
                                    <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                        <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                        <p id="size-choice-0-label">
                                            XXS
                                        </p>
                                        <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                    </label>
                                    <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                        <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                        <p id="size-choice-0-label">
                                            XXS
                                        </p>
                                        <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                    </label>
                                    <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                        <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                        <p id="size-choice-0-label">
                                            XXS
                                        </p>
                                        <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                    </label>
                                    <label class="group relative border dark:border-gray-600 rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white dark:bg-gray-800 shadow-sm text-gray-900 dark:text-gray-300 cursor-pointer undefined">
                                        <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                        <p id="size-choice-0-label">
                                            XXS
                                        </p>
                                        <div class="absolute -inset-px rounded-md pointer-events-none border-2 border-transparent" aria-hidden="true"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-4">
                            <div class="space-y-2 w-full">
                                <label for="current_price" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Current Price/Unit</label>
                                <input wire:model.defer="current_price" type="number" min="1" name="" id="current_price" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                                @error('current_price')
                                <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="space-y-2 w-full">
                                <label for="regular_price" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Price/Unit</label>
                                <input wire:model.defer="regular_price" type="number" min="1" name="" id="regular_price" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                                @error('regular_price')
                                <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="space-y-2 w-full">
                                <label for="quantity" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Quantity</label>
                                <input wire:model.defer="quantity" type="number" min="1" name="" id="quantity" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                                @error('quantity')
                                <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="px-6 py-2 bg-cyan-400 text-white rounded-3xl">Add Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>