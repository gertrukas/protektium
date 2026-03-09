<div class="w-full">
    <link rel="stylesheet" href="{{ asset('css/paginacion_personalizada.css') }}">

    {{ Breadcrumbs::render('productos') }}
    <div class="container mx-auto p-4 mt-4 bg-gray-100">

        {{-- Filtros --}}

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-4">
            <div class="flex flex-col">

                <select id="cat-select" wire:model.live="selectedCategories"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 bg-white">
                    <option value="">Seleccione Categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Selector de Marcas --}}
            <div class="flex flex-col">
                <select id="brand-select" wire:model.live="selectedBrands"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500">
                    <option value="">Seleccione Marca</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Nombre del producto --}}
            <div class="mb-4">
                <div class="relative flex items-center">
                    <input wire:model.live.debounce.500ms="searchQuery" wire:keydown.enter="$refresh" type="text"
                        placeholder="Buscar por nombre..."
                        class="w-full border-gray-300 rounded-lg pr-10 focus:ring-blue-500">

                    <span class="absolute inset-y-0 right-4 flex items-center pr-3 cursor-pointer"
                        wire:click="$refresh">
                        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                    </span>
                </div>
            </div>
        </div>

        <div wire:loading class="flex justify-center items-center py-4">
            <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-500"></div>
            <span class="ml-3 text-blue-500 font-medium">Buscando productos...</span>
        </div>

        {{-- Contenido Principal: Tarjeta con Productos --}}
        <main class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 grid-rows-[auto_1fr_auto] gap-6 w-full">

            @forelse ($products as $product)
                <!--- Card de Producto --->
                <div class="grid grid-rows-subgrid row-span-4 bg-white p-2 gap-1 -tarjeta-pdcto">

                    <div class="">
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
                        {{-- @include('livewire.slider-imagenes-producto') --}}

                    </div>

                    <div class="p-0">
                        <h3 class="font-bold text-2xl mb-2">{{ Str::limit($product->name, 18) }}</h3>
                    </div>

                    <div class="p-0">


                        <p class="text-sm font-semibold text-blue-600 mb-1">
                            Marca: {{ $product->brand->name ?? '' }}
                        </p>

                        <div class=" mb-2">
                            <span class="text-sm text-gray-500 mr-1">Categorías:</span>
                            @forelse ($product->categories as $category)
                                <span class="text-xs bg-gray-200 text-gray-700 px-2 py-0.5 rounded-full">
                                    {{ $category->name }}
                                </span>
                            @empty
                                <span class="text-xs text-gray-400 italic">Sin categorías</span>
                            @endforelse
                        </div>

                        <div class="max-h-[96px] overflow-hidden ">
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
                <div class="flex flex-col items-center justify-center space-y-4">
                    {{-- Primera línea: Los botones de las páginas centrados --}}
                    <div class="flex justify-center w-full pagination-links gap-8">
                        <div class="pagination-links">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            @elseif($products->count() < $perPage)
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
</div>
