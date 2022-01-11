<nav class="flex items-center justify-between px-2 py-4 mx-auto md:px-8 max-w-screen-2xl">
    <!-- Mobile Hamburger Menu -->
    <button @click="toggleSideMenu" @click.away="closeSideMenu" class="flex items-center justify-center h-full p-2 focus:outline-none focus:text-emerald-400 dark:focus:text-gray-400 lg:hidden">
        <svg width="25.567" height="18" viewBox="0 0 25.567 18">
            <g transform="translate(-776 -462)">
                <rect width="12.749" height="2.499" rx="1.25" transform="translate(776 462)" fill="currentColor"></rect>
                <rect width="25.567" height="2.499" rx="1.25" transform="translate(776 469.75)" fill="currentColor"></rect>
                <rect width="17.972" height="2.499" rx="1.25" transform="translate(776 477.501)" fill="currentColor"></rect>
            </g>
        </svg>
    </button>
    <!-- Logo -->
    <div class="md:flex">
        <a href="/" class="flex items-center w-32 h-10 p-0 m-0">
            <img src="images/logo.webp" alt="By Md Rasel">
        </a>
    </div>
    <!-- Search Form -->
    <div class="flex-shrink hidden w-full px-10 mx-auto overflow-hidden lg:block xl:w-10/12">
        <form class="w-full">
            <div class="relative flex h-8 rounded md:rounded-lg md:h-10">
                <input id="grocery search at header" type="text" autocomplete="off" class="flex items-center w-full h-full px-10 pr-12 overflow-hidden text-sm placeholder-gray-500 transition duration-300 ease-in-out bg-gray-100 border border-blue-200 rounded-lg appearance-none focus:outline-none focus:ring-0 md:px-14 focus:border-blue-500 focus" name="search" placeholder="Search your products from here" value="">
                <button class="absolute flex items-center justify-center w-10 h-full transition-colors duration-200 md:w-14 start-0 text-body focus:outline-none hover:text-accent-hover focus:text-accent-hover">
                    <span class="absolute w-[1px] h-[1px] p-0 m-[-1px] overflow-hidden whitespace-nowrap border-0">Search</span>
                    <svg viewBox="0 0 17.048 18" class="w-4 h-4">
                        <path d="M380.321,383.992l3.225,3.218c.167.167.341.329.5.506a.894.894,0,1,1-1.286,1.238c-1.087-1.067-2.179-2.131-3.227-3.236a.924.924,0,0,0-1.325-.222,7.509,7.509,0,1,1-3.3-14.207,7.532,7.532,0,0,1,6,11.936C380.736,383.462,380.552,383.685,380.321,383.992Zm-5.537.521a5.707,5.707,0,1,0-5.675-5.72A5.675,5.675,0,0,0,374.784,384.513Z" transform="translate(-367.297 -371.285)" fill="currentColor">
                        </path>
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <!-- Header Right side div -->
    <div class="flex items-center flex-shrink-0 space-x-8 ">
        <ul class="hidden space-x-5 tracking-wider text-gray-600 md:flex dark:text-gray-300">
            <li class="group">
                <!-- Active -->
                <a href="/" class="relative {{ (url()->current() == route('home'))?'font-semibold text-gray-800':'' }}  dark:text-gray-200">
                    Home
                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded group-hover:opacity-100 {{ (url()->current() == route('home'))?'':'opacity-0  -translate-x-9' }} group-hover:translate-x-0 -bottom-7">
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('shop') }}" class="relative {{ (url()->current() == route('shop'))?'font-semibold text-gray-800':'' }}">
                    Store
                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded group-hover:opacity-100 {{ (url()->current() == route('shop'))?'':'opacity-0  -translate-x-9' }} group-hover:translate-x-0 -bottom-7">
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="{{ route('shops') }}" class="relative {{ (url()->current() == route('shops'))?'font-semibold text-gray-800':'' }}">
                    Shops
                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded group-hover:opacity-100 {{ (url()->current() == route('shops'))?'':'opacity-0  -translate-x-9' }} group-hover:translate-x-0 -bottom-7">
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="#" class="relative">About
                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded opacity-0 group-hover:opacity-100 -translate-x-9 group-hover:translate-x-0 -bottom-7">
                    </div>
                </a>
            </li>
            <li class="group">
                <a href="/Contact.html" class="relative">Contact
                    <div class="absolute w-full h-1 transition duration-500 bg-blue-500 rounded opacity-0 group-hover:opacity-100 -translate-x-9 group-hover:translate-x-0 -bottom-7">
                    </div>
                </a>
            </li>
        </ul>
        @livewire('user.cart-counter')
    </div>
</nav>