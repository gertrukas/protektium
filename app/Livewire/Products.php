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
    public $brands; // Nueva propiedad
    public $selectedCategory = 'all';
    public $selectedBrand = 'all'; // Nueva propiedad
    public $searchQuery = '';
    public $perPage = 12;
    public $showMoreCategories = false; // Propiedad para controlar la visibilidad

    public function mount()
    {
        $this->categories = ProductCategory::with('products')->get();
        $this->brands = Brand::orderBy('name')->get();
    }

    public function render()
    {
        $productsQuery = Product::query();

        if ($this->selectedCategory !== 'all') {
            $category = ProductCategory::where('name', $this->selectedCategory)->first();
            if ($category) {
                $productsQuery->whereHas('categories', function ($query) use ($category) {
                    $query->where('product_category_id', $category->id);
                });
            }
        }

        if ($this->selectedBrand !== 'all') {
            $productsQuery->where('brand_id', $this->selectedBrand);
        }

        // Filtro por Búsqueda
        if ($this->searchQuery) {
            $productsQuery->where('name', 'like', '%' . $this->searchQuery . '%');
        }

        $products = $productsQuery->paginate($this->perPage);

        return view('livewire.products', [
            'products' => $products,
        ])->layout('layouts.principal-productos');
    }

    // Nuevo método para alternar la visibilidad del menú
    public function toggleMoreCategories()
    {
        $this->showMoreCategories = !$this->showMoreCategories;
    }

    // Filtrar por Marca
    public function filterByBrand($brandId)
    {
        $this->selectedBrand = $brandId;
        $this->resetPage();
    }

    public function filterByCategory($categoryId)
    {
        if ($categoryId === 'all') {
            $this->selectedCategory = 'all';
        } else {
            $category = ProductCategory::find($categoryId);
            if ($category) {
                $this->selectedCategory = $category->name;
            }
        }
        $this->resetPage();
        $this->showMoreCategories = false; // Cierra el menú al seleccionar una categoría
    }

    public function updatedSearchQuery()
    {
        $this->selectedCategory = 'all';
        $this->resetPage();
    }
}
