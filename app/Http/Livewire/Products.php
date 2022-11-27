<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $searchTerm = '';
    public $products;
    public function render()
    {
        $this->products = Product::where('id', 'like', '%'.$this->searchTerm.'%')->get();
        return view('livewire.products');
    }
}
