<div class="container mx-auto p-4 bg-gray-100">

    <header class="flex justify-between items-center mb-8 bg-white p-4 rounded-lg shadow-sm">
        <h1 class="text-2xl font-bold">Catálogo de Productos</h1>

    </header>

    {{-- Filtros --}}

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        {{-- Selector de Categorías --}}
        <div class="flex flex-col">
            <div class="flex justify-between items-center mb-2">
                <label class="block text-sm font-bold text-gray-700">Categorías</label>
                @if (count($selectedCategories) > 0)
                    <button wire:click="clearCategoryFilters"
                        class="text-[10px] text-red-500 hover:underline font-bold uppercase">
                        Limpiar ({{ count($selectedCategories) }})
                    </button>
                @endif
            </div>

            <div
                class="w-full border border-gray-300 rounded-lg shadow-sm bg-white p-3 h-32 overflow-y-auto custom-scrollbar">
                @foreach ($categories as $category)
                    <div class="flex items-center mb-1 last:mb-0">
                        <input type="checkbox" id="cat-{{ $category->id }}" value="{{ $category->id }}"
                            wire:model.live="selectedCategories"
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <label for="cat-{{ $category->id }}"
                            class="ml-2 text-sm text-gray-700 cursor-pointer select-none">
                            {{ $category->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Selector de Marcas --}}
        <div class="flex flex-col">
            <div class="flex justify-between items-center mb-2">
                <label class="block text-sm font-bold text-gray-700">Marcas</label>
                @if (count($selectedBrands) > 0)
                    <button wire:click="clearBrandFilters"
                        class="text-[10px] text-red-500 hover:underline font-bold uppercase">
                        Limpiar ({{ count($selectedBrands) }})
                    </button>
                @endif
            </div>

            <div
                class="w-full border border-gray-300 rounded-lg shadow-sm bg-white p-3 h-32 overflow-y-auto custom-scrollbar">
                @foreach ($brands as $brand)
                    <div class="flex items-center mb-1 last:mb-0">
                        <input type="checkbox" id="brand-{{ $brand->id }}" value="{{ $brand->id }}"
                            wire:model.live="selectedBrands"
                            class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                        <label for="brand-{{ $brand->id }}"
                            class="ml-2 text-sm text-gray-700 cursor-pointer select-none">
                            {{ $brand->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Nombre del producto --}}
        <div class="relative">
            <label class="block text-sm font-bold text-gray-700 mb-2">Nombre del Producto</label>

            <input wire:model.live="searchQuery" type="text" placeholder="Buscar por nombre..."
                class="w-full border-gray-300 rounded-lg pl-10 focus:ring-blue-500">
            <span> <i class="fa-solid fa-magnifying-glass absolute left-3 top-3 text-gray-400"></i></span>

        </div>
    </div>

    <hr class="mb-4">

    {{-- Cantidad de registros a mostrar y paginación de ser necesario --}}
    <div class="flex justify-between items-center mb-4">
        {{-- Cantidad de registros a mostrar --}}
        <div class="flex items-center space-x-2">
            <label for="perPage" class="text-sm text-gray-700 font-medium">Mostrar:</label>
            <select wire:model.live="perPage" id="perPage"
                class="border border-gray-300 rounded-md shadow-sm py-1.5 pl-3 pr-8 focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm appearance-none bg-white">
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="48">48</option>
                <option value="96">96</option>
                <option value="todos">Todos</option>
            </select>
        </div>

        {{-- Paginación de ser Necesario --}}
        @if ($products->count())
            <div class="mt-8">
                {{ $products->links() }}
            </div>
        @endif
    </div>

    {{-- Contenido Principal: Tarjeta con Productos --}}
    <main class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @forelse ($products as $product)
            <!--- Card de Producto --->
            <div class="-tarjeta-pdcto">
                <div class="h-48 p-2">
                    @php
                        $imageExists = false;
                        $imagePath = '';
                        if (!empty($product->images) && is_array($product->images) && count($product->images) > 0) {
                            $imagePath = $product->images[0];
                            $imageExists = Storage::disk('public')->exists($imagePath);
                        }
                    @endphp

                    @if ($imageExists)
                        <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                            <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover rounded-xl">
                        </a>
                    @else
                        <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                            <img src="{{ asset('images/generico.jpeg') }}" alt="Imagen genérica"
                                class="w-full h-full object-cover rounded-xl">
                        </a>
                    @endif
                </div>
                <div class="p-4 flex-col h-full">
                    <h3 class="font-bold text-2xl mb-2">{{ $product->name }}</h3>

                    <p class="text-sm font-semibold text-blue-600 mb-1">
                        Marca: {{ $product->brand->name ?? 'Sin marca' }}
                    </p>

                    <div class="flex flex-wrap gap-1 mb-2">
                        <span class="text-sm text-gray-500 mr-1">Categorías:</span>
                        @forelse ($product->categories as $category)
                            <span class="text-xs bg-gray-200 text-gray-700 px-2 py-0.5 rounded-full">
                                {{ $category->name }}
                            </span>
                        @empty
                            <span class="text-xs text-gray-400 italic">Sin categorías</span>
                        @endforelse
                    </div>

                    <div class="max-h-[96px] overflow-hidden line-clamp-3">
                        <div class="text-sm text-gray-600">
                            {!! $product->description ?? 'Descripción no disponible' !!}
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                        <button class="-ver-mas">Ver mas</button>
                    </a>
                </div>
            </div>


        @empty
            <h1 class="col-span-full text-center text-2xl font-bold text-gray-700">NO HAY PRODUCTOS DISPONIBLES.
            </h1>
        @endforelse
    </main>

    {{-- Paginación de ser Necesario --}}

    <div class="mt-8 border-t pt-6">
        @if ($products->hasPages())
            {{-- Si hay más de una página, muestra los controles de paginación estándar --}}
            {{ $products->links() }}
        @elseif($products->count() < $perpage)
            {{-- Si hay productos pero no alcanzan para una segunda página --}}
            <div class="flex justify-center items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
                <span class="text-gray-500 font-medium italic">
                    {{ '< 1 >' }}
                </span>
            </div>
        @elseif($products->count() > 0)
            {{-- Si hay productos pero no alcanzan para una segunda página --}}
            <div class="flex justify-center items-center p-4 bg-white rounded-lg border border-gray-200 shadow-sm">
                <span class="text-gray-500 font-medium italic">
                    {{ '< 1 >' }}
                </span>
            </div>
        @else
            {{-- Si no hay ningún registro (después de filtrar o búsqueda vacía) --}}
            <div class="flex justify-center items-center p-4 bg-red-50 rounded-lg border border-red-100 shadow-sm">
                <span class="text-red-500 font-bold uppercase tracking-wider">
                    <i class="fa-solid fa-triangle-exclamation mr-2"></i> No se encontraron productos con estos
                    criterios
                </span>
            </div>
        @endif
    </div>
</div>
