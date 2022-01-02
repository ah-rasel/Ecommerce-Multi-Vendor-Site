<div class="group w-full h-auto flex justify-start items-center bg-white dark:bg-gray-600 py-2 md:py-4 border-b border-gray-200 dark:border-gray-900 relative last:border-b-0" title="Gucci Carlton UK">
    <div class="relative flex w-24 md:w-28 h-24 md:h-28 rounded-md overflow-hidden bg-gray-200 flex-shrink-0 cursor-pointer mr-4">
        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                <img alt="" aria-hidden="true" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTEyIiBoZWlnaHQ9IjExMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4=" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
            </span>
            <img alt="Gucci Carlton UK" src="images/products/p-20-m.png" class="bg-gray-300 object-cover" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
        </span>
        <div wire:click.prevent="RemoveFromCart('{{ $rowId }}')" class="absolute top-0 start-0 h-full w-full bg-black bg-opacity-30 md:bg-opacity-0 flex justify-center items-center transition duration-200 ease-in-out md:group-hover:bg-opacity-30" role="button">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="relative text-white text-2xl transform md:scale-0 md:opacity-0 transition duration-300 ease-in-out md:group-hover:scale-100 md:group-hover:opacity-100" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z">
                </path>
            </svg>
        </div>
    </div>
    <div class="flex flex-col w-full overflow-hidden">
        <a class="truncate text-sm text-heading mb-1.5 -mt-1" href="#">{{ $name }}</a>
        <span class="text-sm text-gray-400 mb-2.5">Unit Price :
            &nbsp;${{ $price }}
        </span>
        <div class="flex items-end justify-between">
            <div class="group flex items-center justify-between rounded-md overflow-hidden flex-shrink-0 h-8 md:h-9 shadow-navigation bg-gray-700">
                <button wire:click="Decrement('{{ $rowId }}',{{ $qty }})" class="flex items-center justify-center flex-shrink-0 h-full transition ease-in-out duration-300 focus:outline-none w-8 md:w-9 text-white bg-gray-700 hover:bg-gray-600">
                    <svg wire:target="Decrement" wire:loading.remove xmlns="http://www.w3.org/2000/svg" width="10px" height="2px" viewBox="0 0 12 1.5">
                        <rect data-name="Rectangle 970" width="10px" height="2px" fill="currentColor"></rect>
                    </svg>
                    <svg wire:target="Decrement" wire:loading class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
                <span class="font-semibold flex items-center justify-center h-full  transition-colors duration-250 ease-in-out cursor-default flex-shrink-0 text-sm text-white w-8 md:w-10 ">{{ $qty }}
                </span>
                <button wire:click="Increment('{{ $rowId }}',{{ $qty }})" class="flex items-center justify-center h-full flex-shrink-0 transition ease-in-out duration-300 w-8 md:w-9 text-white bg-gray-700 hover:bg-gray-600 focus:outline-none">
                    <svg wire:target="Increment" wire:loading.remove data-name="plus (2)" xmlns="http://www.w3.org/2000/svg" width="10px" height="10px" viewBox="0 0 12 12">
                        <g data-name="Group 5367">
                            <path data-name="Path 17138" d="M6.749,5.251V0h-1.5V5.251H0v1.5H5.251V12h1.5V6.749H12v-1.5Z" fill="currentColor"></path>
                        </g>
                    </svg>
                    <svg wire:target="Increment" wire:loading class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </div>
            <span class="font-semibold text-sm md:text-base text-heading leading-5">${{ $qty*$price }}
            </span>
        </div>
    </div>
</div>