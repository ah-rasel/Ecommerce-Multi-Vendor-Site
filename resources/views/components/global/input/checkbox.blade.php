@props([
'label'=>"false",
'name'=>false,
'id'=>false,
'value'=>false,
])
<div class="flex items-center space-x-2">
    <input type="checkbox" name="{{ $name }}" value="{{ $value }}" id="{{ $id }}" {{ $attributes->merge(['class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded'])->only('class') }}>
    <label class="cursor-pointer" for="{{ $id }}">{{ $label }}</label>
</div>