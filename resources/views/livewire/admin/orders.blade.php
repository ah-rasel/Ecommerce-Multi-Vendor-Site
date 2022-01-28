<div class="">
    <x-global.title>
        Orders
    </x-global.title>
    <x-table.table_index>
        <x-slot name="head">
            <x-table.heading> # </x-table.heading>
            <x-table.heading> Order Number </x-table.heading>
            <x-table.heading> Date </x-table.heading>
            <x-table.heading> Status </x-table.heading>
            <x-table.heading> Payment Method </x-table.heading>
            <x-table.heading> Total </x-table.heading>
            <x-table.heading> Actions </x-table.heading>
        </x-slot>
        <x-slot name="body">
            @foreach ($orders as $order)

            <x-table.row>
                <x-table.cell>
                    {{ $loop->iteration }}
                </x-table.cell>
                <x-table.cell>
                    <a href="#">#{{ $order->id }}</a>
                </x-table.cell>
                <x-table.cell>
                    {{ $order->order_date }}
                </x-table.cell>
                <x-table.cell>
                    <span wire:click="ChangeStatus({{ $order->id }},{{ $order->status }})" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $order->status_color }} cursor-pointer">
                        {{ $order->order_status }}
                    </span>

                </x-table.cell>
                <x-table.cell>
                    {{ $order->payment }}
                </x-table.cell>
                <x-table.cell>
                    {{ $order->amount }}
                </x-table.cell>
                <x-table.cell>
                    <div class="flex space-x-2 md:space-x-4">
                        <button wire:click="CancelOrder({{ $order->id }})" class="text-red-500 transition duration-200 hover:text-red-600 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.76 511.76" width="20">
                                <path d="M436.896 74.869c-99.84-99.819-262.208-99.819-362.048 0-99.797 99.819-99.797 262.229 0 362.048 49.92 49.899 115.477 74.837 181.035 74.837s131.093-24.939 181.013-74.837c99.819-99.818 99.819-262.229 0-362.048zm-75.435 256.448c8.341 8.341 8.341 21.824 0 30.165a21.275 21.275 0 01-15.083 6.251 21.277 21.277 0 01-15.083-6.251l-75.413-75.435-75.392 75.413a21.348 21.348 0 01-15.083 6.251 21.277 21.277 0 01-15.083-6.251c-8.341-8.341-8.341-21.845 0-30.165l75.392-75.413-75.413-75.413c-8.341-8.341-8.341-21.845 0-30.165 8.32-8.341 21.824-8.341 30.165 0l75.413 75.413 75.413-75.413c8.341-8.341 21.824-8.341 30.165 0 8.341 8.32 8.341 21.824 0 30.165l-75.413 75.413 75.415 75.435z" fill="currentColor"></path>
                            </svg>
                        </button>
                        <div class="">
                            <a href="{{ route('admin.orders.show',$order) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </a>
                        </div>
                        <form action="{{ route('admin.orders.destroy',$order) }}" onsubmit="return confirm('Are you sure to delete this Order ?');" method="POST">
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
</div>