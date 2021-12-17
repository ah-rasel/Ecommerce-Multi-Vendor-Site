@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Create New Role
</x-global.title>
<div class="py-6 px-4">
    <form action="{{ route('admin.role.store') }}" method="POST">
        @csrf
        <div class="space-y-2">
            <x-global.label class="font-bold">Role Title</x-global.label>
            <x-global.input.text name="title" value="" type="text" placeholder="Manager"></x-global.input.text>
        </div>
        <div class="space-y-2 my-3">
            @foreach ($permissions as $permission)
            <div class="flex items-center space-x-2">
                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="{{ $permission->id }}" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                <label class="cursor-pointer" for="{{ $permission->id }}">{{ $permission->title }}</label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="bg-blue-400 px-8 py-2 text-white mt-4">Add Role</button>
    </form>
</div>
@endsection