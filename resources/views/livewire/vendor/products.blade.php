<div class="">
    <h2 class="text-lg md:text-xl xl:text-2xl font-bold  mb-6 xl:mb-8">
        Products
    </h2>
    <div class="w-full flex flex-col relative">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-500">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider w-3">
                        <input type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded cursor-pointer">
                    </th>
                    <th scope="col" class="pl-5 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Group
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Price/Unit
                    </th>
                    <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Quantity
                    </th>
                    <th scope="col" class="px-2 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-600 text-gray-700 dark:text-gray-200 divide-y divide-gray-200 dark:divide-gray-500">
                <tr class="dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800">
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200 w-3">
                        <input wire:model="selected" value="180" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded cursor-pointer">
                    </td>
                    <td class="pl-5 py-4 whitespace-nowrap">
                        <div class="w-10 h-10 box-border inline-block overflow-hidden rounded-sm">
                            <img src="{{ asset('images/products/p-22-s.png') }}" alt="">
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="single_shop.html" class="text-gray-500 dark:text-gray-200">
                            Apples
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="text-gray-500 dark:text-gray-200">
                            Grocery
                        </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center cursor-pointer">
                        $2.00
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center cursor-pointer">
                        17
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-200 text-green-800">
                            Active
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center cursor-pointer">
                        <div class="space-x-5 inline-flex items-center w-auto">
                            <button class="text-red-500 transition duration-200 hover:text-red-600 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.76 511.76" width="20">
                                    <path d="M436.896 74.869c-99.84-99.819-262.208-99.819-362.048 0-99.797 99.819-99.797 262.229 0 362.048 49.92 49.899 115.477 74.837 181.035 74.837s131.093-24.939 181.013-74.837c99.819-99.818 99.819-262.229 0-362.048zm-75.435 256.448c8.341 8.341 8.341 21.824 0 30.165a21.275 21.275 0 01-15.083 6.251 21.277 21.277 0 01-15.083-6.251l-75.413-75.435-75.392 75.413a21.348 21.348 0 01-15.083 6.251 21.277 21.277 0 01-15.083-6.251c-8.341-8.341-8.341-21.845 0-30.165l75.392-75.413-75.413-75.413c-8.341-8.341-8.341-21.845 0-30.165 8.32-8.341 21.824-8.341 30.165 0l75.413 75.413 75.413-75.413c8.341-8.341 21.824-8.341 30.165 0 8.341 8.32 8.341 21.824 0 30.165l-75.413 75.413 75.415 75.435z" fill="currentColor"></path>
                                </svg>
                            </button>
                            <a class="ml-2 text-base transition duration-200" title="View" href="/single_shop.html">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </a>
                            <a class="text-base transition duration-200 hover:text-heading" title="Edit" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.547 20.299" fill="currentColor" width="16">
                                    <g stroke="currentColor" stroke-width=".4">
                                        <path data-name="Path 78" d="M18.659 12.688a.5.5 0 00-.5.5v4.423a1.5 1.5 0 01-1.494 1.494H2.691A1.5 1.5 0 011.2 17.609V4.629a1.5 1.5 0 011.494-1.494h4.419a.5.5 0 100-1H2.691A2.493 2.493 0 00.2 4.629v12.98A2.493 2.493 0 002.691 20.1h13.976a2.493 2.493 0 002.491-2.491v-4.423a.5.5 0 00-.5-.5zm0 0">
                                        </path>
                                        <path data-name="Path 79" d="M18.96.856a2.241 2.241 0 00-3.17 0L6.899 9.739a.5.5 0 00-.128.219l-1.169 4.219a.5.5 0 00.613.613l4.219-1.169a.5.5 0 00.219-.128l8.886-8.887a2.244 2.244 0 000-3.17zm-10.971 9.21l7.273-7.273 2.346 2.346-7.273 7.273zm-.469.94l1.879 1.875-2.592.718zm11.32-7.1l-.528.528-2.346-2.345.528-.528a1.245 1.245 0 011.761 0l.585.584a1.247 1.247 0 010 1.761zm0 0">
                                        </path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                <!-- More people... -->
            </tbody>
        </table>
    </div>
</div>