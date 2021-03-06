@props([
'email',
'image'=>false,
])

<div class="flex items-center">
    <div class="flex-shrink-0 h-10 w-10">
        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
    </div>
    <div class="ml-4">
        <div class="text-sm font-medium text-gray-900 dark:text-gray-300">
            {{ $slot }}
        </div>
        <div class="text-sm text-gray-500 dark:text-gray-400">
            {{ $email }}
        </div>
    </div>
</div>