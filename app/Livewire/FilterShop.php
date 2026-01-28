<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class FilterShop extends Component
{
    public $search     = '';
    public $brandId    = '';
    public $categoryId = '';
    public $priceMin;
    public $priceMax;

    public $results = [];

    // أول ما الصفحة تفتح
    public function mount()
    {
        $this->filter();
    }

    // دالة واحدة فقط (زي search bar)
    public function filter()
    {
        $query = Product::query();

        // 🔍 Search
        if (strlen($this->search) > 0) {
            $query->whereRaw(
                'LOWER(name) LIKE ?',
                ['%' . strtolower($this->search) . '%']
            );
        }

        // 🏷 Brand (AND)
        if ($this->brandId !== '') {
            $query->where('brand_id', $this->brandId);
        }

        // 📂 Category (AND)
        if ($this->categoryId !== '') {
            $query->where('category_id', $this->categoryId);
        }

        // 💰 Price min
        if ($this->priceMin !== null && $this->priceMin !== '') {
            $query->where('price', '>=', $this->priceMin);
        }

        // 💰 Price max
        if ($this->priceMax !== null && $this->priceMax !== '') {
            $query->where('price', '<=', $this->priceMax);
        }

        $this->results = $query
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.filter-shop', [
            'brands'     => Brand::all(),
            'categories' => Category::all(),
        ]);
    }
}
