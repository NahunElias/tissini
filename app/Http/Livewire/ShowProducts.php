<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShowProducts extends Component
{
    public $search;

    public function render()
    {
        $products = Product::where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.show-products', compact('products'));
    }
}
