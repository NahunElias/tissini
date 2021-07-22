<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Livewire\Component;

class AddCar extends Component
{
    public $open = false;
    public $selectedsize = false;
    public $product;
    public $amounts = null;
  
    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {        
        $sizes = Size::where('product_id', $this->product->id)->get();
        return view('livewire.add-car', compact('sizes'));
    }

    public function updatedselectedSize($size_id){
        $this->amounts = Size::where('id', $size_id)->get();
    }


   
}
