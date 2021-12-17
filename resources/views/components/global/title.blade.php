<div {{ $attributes->merge(['class' => 'py-4 px-6 bg-white dark:bg-gray-800 shadow rounded mt-2 mb-5'])->only('class')}}>
    <div class="font-bold text-2xl">{{$slot}}</div>
</div>