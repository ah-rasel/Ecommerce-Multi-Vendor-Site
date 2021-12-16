@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Roles
</x-global.title>
<a href="{{ route('admin.role.create') }}" class="px-8 py-2 bg-blue-400 text-white">Create New Role</a>
<x-table.table_index>
    <x-slot name="head">
        <x-table.heading> Role </x-table.heading>
        <x-table.heading> Permissions </x-table.heading>
        <x-table.heading> Action </x-table.heading>
    </x-slot>
    <x-slot name="body">
        @foreach ($roles as $role)
        <x-table.row>
            <x-table.cell>
                <x-global.input.checkbox :label="$role->title" name="roles[]" :value="$role->id" :id="$role->id">
                    </x-global.checkbox>
            </x-table.cell>
            <x-table.cell class="max-w-xs overflow-hidden">
                @foreach ($role->permissions as $permission)
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    {{ $permission->title }}
                </span>
                @endforeach
            </x-table.cell>
            <x-table.cell>
                <div class="flex space-x-2">
                    <x-table.button.action href="{{ route('admin.role.edit',$role->id) }}" edit></x-table.button.action>
                    <form action="{{ route('admin.role.destroy', $role) }}" onsubmit="return confirm('Are you sure to delete this role ?');" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-warning" type="submit">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>


                </div>
            </x-table.cell>
        </x-table.row>
        @endforeach
    </x-slot>
</x-table.table_index>
@endsection