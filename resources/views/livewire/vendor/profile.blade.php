<div class="">
    <div class="w-full flex flex-col relative">
        <h2 class="text-lg md:text-xl xl:text-2xl font-bold mb-6 xl:mb-8">
            Account Details</h2>
        <form class="w-full mx-auto flex flex-col justify-center ">
            <div class="flex flex-col space-y-4 sm:space-y-5">
                <div class="flex flex-col sm:flex-row sm:space-x-3 space-y-4 sm:space-y-0">
                    <div class="w-full sm:w-1/2">
                        <label for="firstName" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">First
                            Name *</label>
                        <input id="firstName" name="firstName" type="text" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-xs lg:text-sm rounded-md placeholder-body min-h-12 bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                    </div>
                    <div class="w-full sm:w-1/2">
                        <label for="lastName" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">Last
                            Name *</label>
                        <input id="lastName" name="lastName" type="text" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-xs lg:text-sm rounded-md placeholder-body min-h-12 bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                    </div>
                </div>
                <div class="block">
                    <label for="displayName" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">Display
                        Name *</label>
                    <input id="displayName" name="displayName" type="text" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none border text-xs lg:text-sm rounded-md placeholder-body min-h-12 transition duration-200 ease-in-out bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                </div>
                <div class="flex flex-col sm:flex-row sm:space-x-3 space-y-4 sm:space-y-0">
                    <div class="w-full sm:w-1/2">
                        <label for="phoneNumber" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">Phone/Mobile
                            *</label>
                        <input id="phoneNumber" name="phoneNumber" type="tel" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-xs lg:text-sm rounded-md placeholder-body min-h-12  bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                    </div>
                    <div class="w-full sm:w-1/2">
                        <label for="email" class="block text-gray-600 dark:text-gray-400 font-semibold text-sm leading-none mb-3 cursor-pointer">Email
                            *</label>
                        <input id="email" name="email" type="email" placeholder="" class="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-xs lg:text-sm rounded-md placeholder-body min-h-12 bg-white border-gray-300 dark:bg-gray-800 dark:border-gray-600 focus:outline-none focus:border-gray-600 h-11 md:h-12">
                    </div>
                </div>
                <div class="relative flex flex-col">
                    <span class="mt-2 text-sm font-semibold block pb-1 text-gray-600 dark:text-gray-400">Gender</span>
                    <div class="mt-2 flex items-center space-x-6">
                        <label class="group flex items-center text-sm cursor-pointer">
                            <input type="radio" class="mr-2 w-5 h-5 border border-gray-300 rounded-full cursor-pointer transition duration-500 ease-in-out focus:ring-offset-0 hover:border-gray-600 focus:outline-none focus:ring-0 focus-visible:outline-none checked:bg-gray-700" name="gender" value="male">
                            <span class="ms-2 text-sm relative">Male</span>
                        </label>
                        <label class="group flex items-center text-sm cursor-pointer">
                            <input type="radio" class="mr-2 w-5 h-5 border border-gray-300 rounded-full cursor-pointer transition duration-500 ease-in-out focus:ring-offset-0 hover:border-gray-600 focus:outline-none focus:ring-0 focus-visible:outline-none checked:bg-gray-700" name="gender" value="female">
                            <span class="ms-2 text-sm relative">Female</span>
                        </label>
                    </div>
                </div>
                <div class="relative">
                    <button data-variant="flat" class="text-[13px] md:text-sm leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-semibold text-center justify-center border-0 border-transparent rounded-md placeholder-white focus-visible:outline-none focus:outline-none bg-gray-700 dark:bg-gray-800 text-white px-5 md:px-6 py-4 md:py-2.5 lg:py-3 hover:text-white hover:bg-gray-600 dark:hover:bg-gray-600 hover:shadow-cart h-12 mt-3 w-full sm:w-32" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>