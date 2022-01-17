<div class="py-4 text-gray-500 dark:text-gray-400">
    <div class="w-full flex items-center justify-between">
        <a class="font-satisfy text-lg font-bold text-gray-800 dark:text-gray-200" href="{{ route('dashboard') }}">
            Ecommerce - Admin Panel
        </a>
        <a href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
        </a>
    </div>
    <!-- First item in the list -->
    <ul class="mt-6">
        <li class="relative px-6 py-3">
            @if (url()->current() == route('dashboard'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="{{ route('dashboard') }}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                <span class="ml-4">Dashboard</span>
            </a>
        </li>
    </ul>
    <!-- rest of the menu -->
    <ul>

        <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="#">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="ml-4">Profile</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            @if (url()->current() == route('admin.shops.index'))
            <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true">
            </span>
            @endif
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('admin.shops.index') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18.3 15.057" class="w-5 h-5">
                    <g fill="currentColor" stroke="currentColor" stroke-width=".3">
                        <path data-name="Path 22617" d="M2.258.92a.218.218 0 01.2-.128h13.365a.218.218 0 01.2.127l1.487 3.247a1.125 1.125 0 01-2.249-.066.328.328 0 00-.007-.065.321.321 0 00-.636.065 1.125 1.125 0 01-2.251 0 .321.321 0 00-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.251 0 .321.321 0 10-.642 0 1.125 1.125 0 01-2.249.065L2.261.92zm6.738 13.345V7.694a.6.6 0 00-.6-.6H3.95a.6.6 0 00-.6.6v6.575H2.139V5.858a1.569 1.569 0 012.676.014 1.765 1.765 0 012.893 0 1.765 1.765 0 012.893 0 1.765 1.765 0 012.893 0 1.548 1.548 0 012.652-.017v8.414zm-5.009-.006V7.734H8.35v6.525zM1.492 5.816v8.77a.321.321 0 00.321.321h14.649a.321.321 0 00.321-.321V5.822a1.77 1.77 0 001.366-1.721.321.321 0 00-.029-.134L16.602.652a.862.862 0 00-.782-.5H2.456a.861.861 0 00-.784.506L.178 3.971a.321.321 0 00-.028.132 1.771 1.771 0 001.342 1.715z">
                        </path>
                        <path data-name="Path 22618" d="M15.008 11.895h-4.7V7.734h4.7v4.162zm0-4.8h-4.7a.642.642 0 00-.641.641v4.163a.642.642 0 00.641.641h4.7a.642.642 0 00.641-.641V7.736a.642.642 0 00-.641-.641z">
                        </path>
                    </g>
                </svg>
                <span class="ml-4">Shops</span>
            </a>
        </li>
        <li class="relative px-6 py-3" @if (request()->is('admin/products') || request()->is('admin/products/*')) x-data="{isProductsMenuOpen : true}" >
            <span class="absolute inset-y-0 left-0 w-1 bg-blue-400 rounded-tr-lg rounded-br-lg" aria-hidden="true">
            </span>
            @else
            >
            @endif
            <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 focus:outline-none " @click="toggleProductsMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 28.026" fill="currentColor" class="w-5 h-5">
                        <path d="M22.236 5.187a.836.836 0 00-.529-.568l-9.5-4.062a2.026 2.026 0 00-1.456 0l-9.5 4.062a.835.835 0 00-.529.568.925.925 0 00-.318.722v12.529a1.51 1.51 0 00.814 1.3l9.522 4.578a1.011 1.011 0 00.438.1.761.761 0 01.605 0 1.011 1.011 0 00.438-.1l9.522-4.578a1.51 1.51 0 00.814-1.3V5.909a.925.925 0 00-.321-.722zM11.184 1.576a.969.969 0 01.586 0l8.889 3.8-8.922 4.29a.78.78 0 01-.52 0L2.294 5.375zM1.69 5.087h-.005 0zm0 13.654a.432.432 0 01-.187-.3V6.231l9.229 4.438a.432.432 0 01.187.3v12.21zm9.282 5.076zm1 0zm9.469-5.38a.432.432 0 01-.187.3l-9.229 4.437v-12.21a.431.431 0 01.187-.3l9.229-4.438z" stroke="currentColor" stroke-width=".8"></path>
                    </svg>
                    <span class="ml-4">Products</span>
                </span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div>
                <ul x-cloak x-show="isProductsMenuOpen" x-transition:enter="transition ease-in-out duration-700" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-2" class="p-2 mt-2 space-y-2 overflow-hidden text-xs font-medium tracking-wide text-gray-500 border border-gray-200 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                    @if (url()->current() == route('admin.products.index'))
                    bg-white dark:bg-gray-800 border-r-4 border-blue-400
                    @endif
                    ">
                        <a class="w-full" href="{{ route('admin.products.index') }}">
                           All Products
                        </a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                    @if (url()->current() == route('admin.products.create'))
                    bg-white dark:bg-gray-800 border-r-4 border-blue-400
                    @endif
                    ">
                        <a class="w-full" href="{{ route('admin.products.create') }}">
                            Add New Product
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        @can('user_management_access')
        <li class="relative px-6 py-3" @if (request()->is('admin/permission') || request()->is('admin/permission/*') || request()->is('admin/role') || request()->is('admin/role/*')
            || request()->is('admin/users') || request()->is('admin/users/*') )
            x-data="{isUsersMenuOpen : true}"
            >
            <span class="absolute inset-y-0 left-0 w-1 bg-blue-400 rounded-tr-lg rounded-br-lg" aria-hidden="true">
            </span>
            @else
            >
            @endif
            <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 focus:outline-none " @click="toggleUsersMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="ml-4">User Management</span>
                </span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div>
                <ul x-cloak x-show="isUsersMenuOpen" x-transition:enter="transition ease-in-out duration-700" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-2" class="p-2 mt-2 space-y-2 overflow-hidden text-xs font-medium tracking-wide text-gray-500 border border-gray-200 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">

                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                    @if (request()->is('admin/role') || request()->is('admin/role/*'))
                    bg-white dark:bg-gray-800 border-r-4 border-blue-400
                    @endif
                    ">
                        <a class="w-full" href="{{ route('admin.role.index') }}">Roles</a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                    @if (request()->is('admin/permission') || request()->is('admin/permission/*'))
                    bg-white dark:bg-gray-800 border-r-4 border-blue-400
                    @endif
                    ">
                        <a class="w-full" href="{{ route('admin.permission.index') }}">Permissions</a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                    @if (request()->is('admin/users') || request()->is('admin/users/*'))
                    bg-white dark:bg-gray-800 border-r-4 border-blue-400
                    @endif
                    ">
                        <a class="w-full" href="{{ route('admin.users.index') }}">Users</a>
                    </li>
                </ul>
            </div>
        </li>
        @endcan
        <x-logout />
    </ul>
</div>