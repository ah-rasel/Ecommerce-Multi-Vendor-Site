<?php

namespace App\Http\Livewire\Admin;

use App\Models\Shop;
use Livewire\Component;

class Shops extends Component
{
    public $changing = false;
    public function ChangeStatus($id,$currentstatus)
    {
        $this->changing = $id;
        $status = ($currentstatus ==0) ? 1 : (($currentstatus ==1) ? 2: 0);
        Shop::where('id',$id)->update([
            'status'=>$status,
        ]);
    }
    public function render()
    {
        return view('livewire.admin.shops', [
            'shops' => Shop::with('user')->withCount('products')->get(),
        ]);
    }
}
