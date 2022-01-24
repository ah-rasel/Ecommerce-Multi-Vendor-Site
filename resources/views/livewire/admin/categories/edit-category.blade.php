<div class="px-4 mt-2">
    <div class="text-3xl font-semibold text-gray-600 dark:text-slate-500">Add Category</div>
    <div class="py-6 mt-3 px-4 bg-white dark:bg-gray-800 rounded shadow">
        <form wire:submit.prevent="UpateCategory">
            <div class="grid grid-cols-3 gap-x-2">
                <div class="col-span-1" class="overflow-hidden">
                    <div class="border border-slate-200 dark:border-slate-600 p-5 rounded">
                        <div class="relative">
                            <img src="{{ asset('product-placeholder.jpg') }}" class="w-full rounded shadow-sm" alt="">
                            <button class="absolute h-12 w-12 bg-white text-gray-500 flex items-center justify-center rounded-md shadow dark:shadow-slate-400  right-2 top-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="px-4 space-y-4">
                        <div class="space-y-2">
                            <label for="name" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Category Name</label>
                            <input wire:model="category.name" type="text" name="" id="name" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                            @error('name')
                            <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="slug" class="uppercase text-slate-500 dark:text-slate-400 text-sm tracking-wider font-semibold">Slug</label>
                            <input wire:model="category.slug" type="text" name="" id="slug" class="!-mt-2 block w-full px-3 py-2.5 border-0 border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent" disabled>
                            @error('slug')
                            <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-right">
                            <button type="submit" class="px-6 py-2 bg-cyan-400 text-white rounded-3xl">Update Category</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>