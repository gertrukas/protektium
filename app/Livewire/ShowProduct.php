<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ShowProduct extends Component
{
    public $product;
    public $activeImageIndex = 0;

    public function mount($slug)
    {
        $this->product = Product::where('slug', $slug)->firstOrFail();
    }


    public function render()
    {
        return view('livewire.show-product');
    }

    public function setActiveImage($index)
    {
        $this->activeImageIndex = $index;
    }
}
