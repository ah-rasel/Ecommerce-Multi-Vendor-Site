<td {{ $attributes->merge(['class' => 'px-6 py-4'])->only('class')}}>
    {{ $slot }}
</td>