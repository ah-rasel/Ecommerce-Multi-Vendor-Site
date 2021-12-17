@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Details of "{{ $user->name }}"
</x-global.title>
<div class="max-w-xl mx-auto">
    <div class="md:p-6 w-full bg-white dark:bg-gray-800 rounded shadow border dark:border-gray-900">
        <div class="w-full  overflow-hidden">
            <div class="h-24 w-24 mx-auto">
                <img class="h-24 w-24 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
            </div>
            <div class="text-center my-3 space-y-2">
                <div class="text-xl font-semibold">
                    {{ $user->name }}
                    @foreach ($user->roles as $role)
                    <x-global.badge class="ml-2">
                        {{ $role->title }}
                    </x-global.badge>
                    @endforeach

                </div>
                <div class="text-gray-500 dark:text-gray-400">{{ $user->email }}</div>
                <div class="">
                    Joined: <span>December 17,2021</span>
                </div>
            </div>
            <div class="text-center mt-6 flex justify-center items-center space-x-3">
                <a href="{{ route('admin.users.index') }}" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </a>
                <button class="px-4 bg-red-500 hover:bg-red-400 transition-colors duration-300 text-white py-2 rounded shadow">Deactivete user Account</button>
            </div>

        </div>
    </div>
</div>
@endsection