<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component; // Asegúrate de importar el modelo Product

class ProductCardList extends Component
{
    public string $title;

    public int $destacadoValue;

    public int $limit = 5; // Un número grande por defecto

    public function render()
    {
        if ($this->destacadoValue) {
            $items = Product::where('destacado', $this->destacadoValue)
                ->limit($this->limit)
                ->active()
                ->inRandomOrder()
                ->get();
        } else {

            $items = Product::limit($this->limit)
                ->inRandomOrder()
                ->active()
                ->get();
        }

        return view('livewire.product-card-list', [
            'items' => $items,
        ]);
    }
}
