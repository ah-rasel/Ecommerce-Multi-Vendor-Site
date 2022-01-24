<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AddNewCategory extends Component
{
    public $name;
    public $slug;

    protected $rules = [
        'name' => 'required',
        'slug' => 'required',
    ];
    public function AddCategory()
    {
        Category::create([
            'name'=>$this->name,
            'slug'=>$this->slug,
        ]);
        return redirect()->route('admin.category.index');
    }
    public function UpdatedName()
    {
        $this->slug = Str::slug($this->name);
    }
    public function render()
    {
        return view('livewire.admin.categories.add-new-category');
    }
}
