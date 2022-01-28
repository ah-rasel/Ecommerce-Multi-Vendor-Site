<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;

class Orders extends Component
{
    public function ChangeStatus($id, $currentstatus)
    {
        $status = ($currentstatus == 0) ? 1 : (($currentstatus == 1) ? 2 : 0);
        Order::where('id', $id)->update([
            'status' => $status,
        ]);
    }
    public function CancelOrder($id)
    {
        Order::where('id', $id)->update([
            'status' => 3,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.orders', [
            'orders' => Order::with(['products'])->orderBy('id', 'DESC')->get(),
        ]);
    }
}
