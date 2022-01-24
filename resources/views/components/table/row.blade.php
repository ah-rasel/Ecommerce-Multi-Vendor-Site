<tr {{ $attributes->merge(['class' => 'dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800'])->only('class')}}>
    {{ $slot }}
</tr>