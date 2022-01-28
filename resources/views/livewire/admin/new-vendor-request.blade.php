<div>
    <div class="grid grid-cols-4 gap-3 m-3">
        @foreach ($shops as $shop)
        <div class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:border-slate-400 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 space-y-3">
            <div class="">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $shop->name }}
                </h5>
            </div>
            <div class="">
                <x-table.user_component :user="$shop->user" />
            </div>
            <div class="flex items-center justify-center gap-x-6">
                <div wire:click="Approve({{ $shop->id }})" class="bg-green-200 hover:bg-green-300 cursor-pointer h-8 w-8 flex items-center justify-center rounded-full border shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div wire:click="Cancel({{ $shop->id }})" class="bg-red-200 hover:bg-red-300 cursor-pointer h-8 w-8 flex items-center justify-center rounded-full border shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>