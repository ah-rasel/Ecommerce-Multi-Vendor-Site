@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Shops
</x-global.title>
<a href="{{ route('admin.shops.create') }}" class="px-8 py-2 bg-blue-400 text-white">Create New Shop</a>
<livewire:admin.shops />
@endsection