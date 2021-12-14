<header class="fixed z-40 w-full bg-white shadow dark:bg-gray-800">
    <!-- Header Top-Bar -->
    <div class="text-sm text-gray-500 bg-gray-100 dark:bg-gray-600 dark:text-gray-300 ">
        <div class="block md:flex items-center justify-between px-2 mx-auto max-w-screen-2xl md:px-8 py-1.5 text-sm md:text-base md:py-0">
            <div class="items-center space-y-1 text-center md:flex md:text-left md:space-y-0 md:space-x-6">
                <p class="hidden md:block">Welcome to Our store "Store Name"</p>
                <div class="flex items-center justify-center space-x-1 md:justify-start md:space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <a href="tel:+01303132018">Call Us :+88<span class="ml-1">01303132018</span></a>
                </div>
            </div>
            <div class="items-center hidden md:flex">
                <div class="px-4 pt-2">
                    <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                        <template x-if="!dark">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                </path>
                            </svg>
                        </template>
                        <template x-if="dark">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                            </svg>
                        </template>
                    </button>
                </div>
                <div class="group py-3.5 px-2">
                    <div class="relative overflow-hidden group-hover:overflow-visible">
                        <div class="flex items-center space-x-1 text-sm cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <p>My Account</p>
                        </div>
                        <div class="absolute z-10 px-6 py-2 pr-16 font-semibold text-gray-800 transition duration-700 transform translate-y-5 bg-white shadow opacity-0 group-hover:opacity-100 group-hover:translate-y-0 dark:bg-gray-700 dark:text-gray-200 top-8 -left-10">
                            <ul class="space-y-2">
                                <li>
                                    <a href="/login.html">Login</a>
                                </li>
                                <li>
                                    <a href="/register.html">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Desktop Menu -->
    <x-header.menus.desktop></x-header.menus.desktop>
</header>