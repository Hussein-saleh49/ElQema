<?php
namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchBar extends Component
{
    public $search  = '';
    public $results = [];

    
    public function searchProducts()
    {
        if (strlen($this->search) > 0) {
            $this->results = Product::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($this->search) . '%'])
                ->take(5)
                ->get();
        } else {
            $this->results = [];
        }
    }

    public function render()
    {
        return view("livewire.search-bar");
    }
}
