<?php

namespace App\Http\Livewire\Admin;

use App\Models\Shop;
use Livewire\Component;

class Shops extends Component
{
    public function Block($id)
    {
        Shop::where('id', $id)->update([
            'status' => 2,
        ]);
    }
    public function ChangeStatus($id, $currentstatus)
    {
        $status = ($currentstatus == 0) ? 1 : 0;
        Shop::where('id', $id)->update([
            'status' => $status,
        ]);
    }
    public function render()
    {
        return view('livewire.admin.shops', [
            'shops' => Shop::with('user')->withCount('products')->get(),
        ]);
    }
}
