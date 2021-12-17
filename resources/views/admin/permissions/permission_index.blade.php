@extends('layouts.admin')
@section('admin_contents')
<x-global.title>
    Permissions
</x-global.title>
<x-table.table_index>
    <x-slot name="head">
        <x-table.heading> Permission </x-table.heading>
        <x-table.heading> Action </x-table.heading>
    </x-slot>
    <x-slot name="body">
        @foreach ($permissions as $permission)
        <x-table.row>
            <x-table.cell>
                <x-global.input.checkbox :label="$permission->title" name="permissions[]" :value="$permission->id" :id="$permission->id">
                    </x-global.checkbox>
            </x-table.cell>
            <x-table.cell>
                <div class="flex space-x-2">
                    <x-table.button.action edit></x-table.button.action>
                    <x-table.button.action href="/delete" delete></x-table.button.action>
                </div>
            </x-table.cell>
        </x-table.row>
        @endforeach
    </x-slot>
</x-table.table_index>
@endsection