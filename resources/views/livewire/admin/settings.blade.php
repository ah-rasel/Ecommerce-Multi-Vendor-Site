<div>
    <x-global.title>
        Settings
    </x-global.title>
    <div class="">
        <div class="mt-2 space-y-3">
            <div class="p-5 bg-white rounded">
                <div class="space-y-3">
                    <div class="flex items-center gap-x-8">
                        <div class="font-bold">Sliders </div>
                        <div class="">
                            <button wire:click="$set('NewSlider',true)" class="px-4 cursor-pointer py-2 shadow shadow-slate-200 hover:bg-slate-100 dark:shadow-slate-600 rounded text-slate-600">Add New Slider</button>
                        </div>
                    </div>

                    <div class="grid grid-cols-4 gap-5">
                        @foreach ($sliders as $slider)
                        <div class="border border-slate-200 dark:border-slate-600 p-5 rounded space-y-1 w-full relative">
                            <div class="relative">
                                <img src="{{ asset('images/').'/'.$slider['image'] }}" class="rounded shadow-sm" alt="">
                            </div>
                            <div class="">
                                <div class="space-y-2">
                                    <label for="name" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">SLider Title</label>
                                    <p class="text-slate-600">{{ $slider['main'] }}</p>
                                </div>
                                <div class="space-y-2">
                                    <label for="name" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Tag Line</label>
                                    <p class="text-slate-600">{{ $slider['tag'] }}</p>
                                </div>
                            </div>
                            <button class="absolute h-10 w-10 bg-white text-gray-500 flex items-center justify-center rounded-md shadow dark:shadow-slate-400 right-2 top-2 border">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                        </div>
                        @endforeach
                    </div>
                    @if ($NewSlider)                        
                    <div class="grid grid-cols-4 gap-5">
                        <form action="" wire:submit.prevent="AddSlider">
                            <div class="border border-slate-200 dark:border-slate-600 p-5 rounded space-y-1 w-full">
                                <div class="relative">
                                    <img src="{{ $image?->temporaryUrl()??(asset('product-placeholder.jpg')) }}" class="rounded shadow-sm" alt="">
                                </div>
                                <div class="">
                                    <input wire:model="image" type="file" class="mt-4 block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 cursor-pointer file:rounded-full file:border-0 file:text-sm file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 " />
                                </div>
                                <div class="">
                                    <div class="space-y-2">
                                        <label for="name" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">SLider Title</label>
                                        <input wire:model.defer="main" type="text" name="" id="name" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                                        @error('main')
                                        <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="space-y-2">
                                        <label for="name" class="uppercase text-slate-500 dark:text-slate-400 text-xs tracking-wider font-semibold">Tag Line</label>
                                        <input wire:model.defer="tag" type="text" name="" id="name" class="block w-full px-3 py-2.5 border border-gray-200 dark:border-gray-600 rounded-2xl text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-gray-200 focus:ring-0 focus:ring-gray-200 text-slate-600 dark:text-slate-300 bg-transparent">
                                        @error('tag')
                                        <span class="ml-4 text-xs font-semibold text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <button type="submit" class="px-6 py-2 w-full bg-cyan-400 text-white ">Update Slides</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>