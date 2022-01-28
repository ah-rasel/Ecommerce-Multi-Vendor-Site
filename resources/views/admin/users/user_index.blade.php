@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Users
</x-global.title>
<a href="{{ route('admin.users.create') }}" class="px-8 py-2 bg-blue-400 text-white">Create New User</a>
<x-table.table_index>
    <x-slot name="head">
        <x-table.heading> User </x-table.heading>
        <x-table.heading> Role </x-table.heading>
        <x-table.heading> Action </x-table.heading>
    </x-slot>
    <x-slot name="body">
        @foreach ($users as $user)
        <x-table.row>
            <x-table.cell>
                <x-table.user_component :user="$user"/>
            </x-table.cell>
            <x-table.cell class="max-w-xs overflow-hidden">
                @foreach ($user->roles as $role)
                <x-global.badge>

                    {{ $role->title }}
                </x-global.badge>
                @endforeach
            </x-table.cell>
            <x-table.cell>
                <div class="flex space-x-2 md:space-x-4">
                    <div class="">
                        <a href="{{ route('admin.users.show',$user) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </div>
                    <x-table.button.action href="{{ route('admin.users.edit',$user->id) }}" edit></x-table.button.action>
                    <form action="{{ route('admin.users.destroy', $user) }}" onsubmit="return confirm('Are you sure to delete this User ?');" method="POST">
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