<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;
    public $image;
    public $settings;
    public $sliders;
    public $NewSlider = false;
    public $main = '';
    public $tag = '';
    public $serialized_lider;
    public function mount()
    {
        $this->serialized_lider = Setting::where('name', 'sliders')->first();
        $this->sliders = unserialize($this->serialized_lider->value);
        // dd($this->sliders);
    }
    public function AddSlider()
    {
        $imageName = $this->image->store('/','images');
        $newSlide = [
            'main' => $this->main,
            'tag' => $this->tag,
            'image' => $imageName,
        ];
        array_push($this->sliders, $newSlide);
        // dd($this->sliders);
        $data_temp = serialize($this->sliders);
        Setting::where('name','sliders')->update([
            'value'=>$data_temp,
        ]);
        // $this->data1->action_value = $data_temp;
        // $this->data1->update();
        // $this->$var = false;
        // $this->new_expertise_value = $this->new_expertise_title = '';
        $this->NewSlider = false;
    }
    public function render()
    {
        return view('livewire.admin.settings')
            ->extends('layouts.admin')
            ->section('admin_contents');
    }
}
