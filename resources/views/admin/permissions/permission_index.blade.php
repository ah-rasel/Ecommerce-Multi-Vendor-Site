@extends('layouts.admin')
@section('admin_contents')
<x-table.table_index>
    <x-slot name="head">
        <x-table.heading> Permission </x-table.heading>
        <x-table.heading> Action </x-table.heading>
    </x-slot>
    <x-slot name="body">
        <x-table.row>
            <x-table.cell>
                <x-global.input.checkbox label="hey" name="" value="" id="1" ></x-global.checkbox>
            </x-table.cell>
            <x-table.cell>
                <div class="flex space-x-2">
                    <x-table.button.action edit></x-table.button.action>
                    <x-table.button.action href="/delete" delete></x-table.button.action>
                </div>
            </x-table.cell>
        </x-table.row>
    </x-slot>
</x-table.table_index>
@endsection