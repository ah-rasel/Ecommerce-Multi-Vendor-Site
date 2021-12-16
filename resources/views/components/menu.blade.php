<div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="ml-6 font-satisfy text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
        Ecommerce - Admin Panel
    </a>
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
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="#)}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="ml-4">Profile</span>
            </a>
        </li>
        @can('user_management_access')
        <li class="relative px-6 py-3" @if (request()->is('admin/permission') || request()->is('admin/permission/*') || request()->is('admin/role') || request()->is('admin/role/*') )
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
                <ul x-show="isUsersMenuOpen" x-transition:enter="transition ease-in-out duration-700" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-end="opacity-0 transform -translate-y-2" class="p-2 mt-2 space-y-2 overflow-hidden text-xs font-medium tracking-wide text-gray-500 border border-gray-200 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">

                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                    @if (request()->is('admin/role') || request()->is('admin/role/*'))
                    bg-white dark:bg-gray-800 border-r-4 border-blue-400
                    @endif
                    ">
                        <a class="w-full" href="#">Roles</a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200
                    @if (request()->is('admin/permission') || request()->is('admin/permission/*'))
                    bg-white dark:bg-gray-800 border-r-4 border-blue-400
                    @endif
                    ">
                        <a class="w-full" href="{{ route('admin.permission.index') }}">Permissions</a>
                    </li>
                    <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <a class="w-full" href="#">Users</a>
                    </li>
                </ul>
            </div>
        </li>
        @endcan
        <x-logout />
    </ul>
</div>