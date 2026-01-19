<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $categories;
    public $brands;

    // Propiedades como arreglos para selección múltiple
    public $selectedCategories = [];
    public $selectedBrands = [];
    public $searchQuery = '';
    public $perPage = 12;

    public function mount()
    {
        $this->categories = ProductCategory::orderBy('name')->get();
        $this->brands = Brand::orderBy('name')->get();
    }

    /**
     * Aplica Filtros y renderiza
     */

    public function render()
    {

        $productsQuery = Product::with(['categories', 'brand']);

        // 1. Filtro por Categorías
        if (!empty($this->selectedCategories)) {
            $categoryIds = array_map('intval', (array)$this->selectedCategories);
            $productsQuery->whereHas('categories', function ($query) use ($categoryIds) {
                $query->whereIn('product_category_id', $categoryIds);
            });
        }

        // 2. Filtro por Marcas
        if (!empty($this->selectedBrands)) {

            $brandIds = array_map('intval', (array)$this->selectedBrands);
            $productsQuery->whereIn('brand_id', $brandIds);
        }

        // 3. Filtro por Búsqueda
        if ($this->searchQuery) {
            $productsQuery->where('name', 'like', '%' . $this->searchQuery . '%');
        }

        // 4. Manejo de Paginación
        $perPageLimit = $this->perPage === 'todos' ? Product::count() : (int)$this->perPage;

        return view('livewire.products', [
            'products' => $productsQuery->paginate($perPageLimit),
        ])->layout('layouts.principal-productos');
    }


    public function updatedSelectedCategories()
    {
        $this->resetPage();
    }

    public function updatedSelectedBrands()
    {
        $this->resetPage();
    }

    public function updatedSearchQuery()
    {
        $this->resetPage();
    }

    // Métodos de limpieza independientes
    public function clearCategoryFilters()
    {
        $this->reset('selectedCategories');
        $this->resetPage();
    }

    public function clearBrandFilters()
    {
        $this->reset('selectedBrands');
        $this->resetPage();
    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }
}
