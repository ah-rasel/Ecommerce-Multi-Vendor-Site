@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Create New User
</x-global.title>
<div class="py-6 px-4">
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <div class="space-y-2">
            <x-global.label>Name</x-global.label>
            <x-global.input.text value="" name="name" type="text" placeholder="Christopher Nolan"></x-global.input.text>
        </div>
        <div class="space-y-2">
            <x-global.label>Email</x-global.label>
            <x-global.input.text value="" name="email" type="email" placeholder="rasel@gmail.com"></x-global.input.text>
        </div>
        <div class="space-y-2 my-3">
            @foreach ($roles as $role)
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="roles[]" value="{{ $role->id }}" id="{{ $role->id }}" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                <label class="cursor-pointer" for="{{ $role->id }}">{{ $role->title }}</label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="bg-blue-400 px-8 py-2 text-white mt-4">Create User</button>
    </form>
</div>
@endsection