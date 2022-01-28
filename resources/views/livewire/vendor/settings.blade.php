<div class="">
    <h2 class="text-lg text-slate-700 md:text-xl xl:text-2xl font-bold mb-6 xl:mb-8">
        Settings</h2>
    <div class="w-full flex  h-full lg:w-8/12 flex-col relative divide-y space-y-3">
        <form wire:submit.prevent="UpdateShop" class="w-full mx-auto flex flex-col justify-center space-y-4">
            <div class="space-y-2">
                <label for="shop_name" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Shop Name</label>
                <input wire:model="shop.name" type="text" name="" id="shop_name" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
            </div>
            <div class="space-y-2">
                <label for="tagline" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Tag Line</label>
                <input wire:model="shop.tag_line" type="text" name="" id="tagline" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
            </div>
            <div class="space-y-2">
                <label for="tagline" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Address</label>
                <textarea name="" id="" cols="30" rows="5" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">{{ $shop->address }}</textarea>
            </div>
            <div class="space-y-2">
                <label for="tagline" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Phone Number</label>
                <input wire:model="shop.phone" type="text" name="" id="tagline" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
            </div>
            <div class="border border-slate-200 dark:border-slate-600 p-5 rounded">
                <div class="flex gap-3">
                    <div class="relative mt-2 border p-3">
                        <label for="tagline" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Logo</label>
                        <img src="{{ $logo?->temporaryUrl() ??  asset('images/').'/'.$shop->logo }}" class="h-32 w-full rounded shadow-sm" alt="">
                        <input wire:model="logo" type="file" class="mt-4 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 cursor-pointer file:rounded-full file:border-0 file:text-sm file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 " />
                    </div>
                    <div class="relative mt-2 border p-3">
                        <label for="tagline" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Shop Banner</label>
                        <img src="{{ $banner?->temporaryUrl() ??  asset('images/').'/'.$shop->banner }}" class="h-32 w-full rounded shadow-sm" alt="">
                        <input wire:model="banner" type="file" class="mt-4 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 cursor-pointer file:rounded-full file:border-0 file:text-sm file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 " />
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="px-6 py-2 bg-cyan-400 text-white rounded-3xl">Udate Details</button>
            </div>
        </form>

        <div class="flex space-x-3 text-white">
            <button class="bg-red-400 hover:bg-opacity-90 mt-6 px-6 py-2">Deactivate Account</button>
            <button class="bg-red-500 hover:bg-opacity-80 mt-6 px-6 py-2">Delete Account</button>
        </div>
    </div>
</div>