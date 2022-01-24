<div class="">
    <h2 class="text-lg md:text-xl xl:text-2xl font-bold mb-6 xl:mb-8">
        Settings</h2>
    <div class="w-full flex  h-full lg:w-8/12 flex-col relative" x-data="{password_hidden:true}">
        <form class="w-full mx-auto flex flex-col justify-center space-y-4">
            <div class="space-y-1.5">
                <label for="password" class="block tracking-wider">Site Name</label>
                <input class="w-full px-3 py-2 rounded focus:outline-none focus:ring-2 dark:bg-transparent ring-1 ring-gray-300 dark:ring-gray-700" placeholder="Name" type="text" name="" id="password">
            </div>
            <div class="flex space-x-3 text-white">
                <button class="bg-red-400 hover:bg-opacity-90 px-6 py-2">Deactivate Account</button>
                <button class="bg-red-500 hover:bg-opacity-80 px-6 py-2">Delete Account</button>
            </div>
        </form>
    </div>
</div>