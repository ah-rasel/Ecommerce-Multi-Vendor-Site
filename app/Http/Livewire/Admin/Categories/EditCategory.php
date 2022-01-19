<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
class EditCategory extends Component
{
    public Category $category;
    protected $rules = [
        'category.name'=>'required',
        'category.slug'=>'required',
    ];
    public function mount(Category $category)
    {
        $this->category = $category;
    }
    public function UpdatedCategoryName()
    {
        
        $this->category->slug = Str::slug($this->category->name);
    }
    public function UpateCategory()
    {
        $this->category->update();
        return redirect()->route('admin.category.index');
    }
    public function render()
    {
        return view('livewire.admin.categories.edit-category');
    }
}
