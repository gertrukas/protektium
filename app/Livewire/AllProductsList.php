<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;

class AllProductsList extends Component
{
    use WithPagination;

    public $destacado;
    public string $title;

    public string $search = '';

    protected $queryString = ['destacado', 'search'];
    public function updatedSearch()
    {
        $this->resetPage(); //
    }

    public function mount($destacado = null)
    {
        $this->destacado = $destacado;
        if ($this->destacado == 1) {
            $this->title = 'TODOS LOS ARTÍCULOS EN PROMOCIÓN';
        } elseif ($this->destacado == 0) {
            $this->title = 'TODOS LOS ARTÍCULOS SIN PROMOCIÓN';
        } else {
            $this->title = 'TODOS LOS ARTÍCULOS';
        }
    }

    public function render()
    {
        $query = Product::query()->active('is_active', 1);

        // Aplicar el filtro 'destacado'
        if (in_array($this->destacado, [0, 1])) {
            $query->where('destacado', $this->destacado);
        }

        // 3. NUEVA LÓGICA DE BÚSQUEDA: Si hay un término de búsqueda, aplicamos el filtro
        if (!empty($this->search)) {
            $searchTerm = '%' . $this->search . '%';

            // Usamos un grupo de clausulas WHERE para buscar en múltiples campos (name Y description)
            $query->where(function (Builder $q) use ($searchTerm) {
                $q->where('name', 'like', $searchTerm)
                    ->orWhere('description', 'like', $searchTerm);
            });
        }

        // Paginar los resultados, por ejemplo, 12 por página.
        $items = $query->paginate(12);

        return view('livewire.all-products-list', [
            'items' => $items,
        ])->layout('layouts.principal');
    }
}
