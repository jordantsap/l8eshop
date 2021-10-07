<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\SubType;
use App\Models\Type;
use Livewire\Component;

class CategoryTypeSubtype extends Component
{
    public $categories;
    public $types;
    public $subtypes;

    public $selectedCategory = null;
    public $selectedType = null;
    public $selectedSubType = null;

    public function mount($selectedSubType = null)
    {
        $this->categories = Category::withTranslation()->get();
        $this->types = collect();
        $this->subtypes = collect();
        $this->selectedSubType = $selectedSubType;

        if (!is_null($selectedSubType)) {
            $subtype = SubType::with('type')->find($selectedSubType);
            if ($subtype) {
                $this->subtypes = SubType::whereTranslation('type_id', $subtype->type_id)
                ->withTranslation()
                ->get();
                $this->types = Type::whereTranslation('category_id', $subtype->type->category_id)
                    ->withTranslation()
                    ->get();
                $this->selectedCategory = $subtype->type->category_id;
                $this->selectedType = $subtype->type_id;
            }
        }
    }

    public function render()
    {
        return view('livewire.category-type-subtype');
    }

    public function updatedSelectedCategory($category)
    {
        $this->types = Type::whereTranslation('category_id', $category)->get();
        $this->selectedtype = NULL;
    }

    public function updatedSelectedType($type)
    {
        if (!is_null($type)) {
            $this->subtypes = SubType::whereTranslation('type_id', $type)->get();
        }
    }
}
