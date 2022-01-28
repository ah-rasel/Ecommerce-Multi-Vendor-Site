@props([
'user',
'image'=>false,
])

<div class="flex items-center">
    <div class="flex-shrink-0 h-10 w-10">
        <img class="h-10 w-10 rounded-full" src="{{ $user->profile_photo_url }}" alt="">
    </div>
    <div class="ml-4">
        <div class="text-sm font-medium text-gray-900 dark:text-gray-300">
            {{ $user->name }}
        </div>
        <div class="text-sm text-gray-500 dark:text-gray-400">
            {{ $user->email }}
        </div>
    </div>
</div>