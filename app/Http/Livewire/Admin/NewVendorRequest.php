<?php

namespace App\Http\Livewire\Admin;

use App\Models\Shop;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewVendorRequest extends Component
{
    public function Approve($id)
    {
        $shop = Shop::with('user')->where('id', $id)->firstOrFail();
        $shop->status = 1;
        $shop->save();
        DB::table('role_user')
            ->updateOrInsert([
                'user_id' => $shop->user->id,
                'role_id' => 2,
            ]);
    }
    public function Cancel($id)
    {
        Shop::where('id', $id)->delete();
    }
    public function render()
    {
        return view('livewire.admin.new-vendor-request', [
            'shops' => Shop::with(['user'])->where([
                ['status', 0],
            ])->get(),
        ])
            ->extends('layouts.admin')
            ->section('admin_contents');
    }
}
