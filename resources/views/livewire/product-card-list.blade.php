<div class="container mx-auto p-4 bg-gray-100">



    <header class="flex justify-between items-center mb-0">
        <h1 class="-titulo-area">{{ $title }}</h1>
    </header>




    {{-- Contenedor del Grid de Tarjetas --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 grid-rows-[auto_1fr_auto] gap-6 w-full">

        @forelse ($items as $item)
            <!--- Card de Producto --->

            <div class="grid grid-rows-subgrid row-span-3 bg-white p-2 gap-1 -tarjeta-pdcto">

                <div class="h-48 p-2">
                    
                    @php
                        
                        $imageExists = false;
                        $imagePath = '';
                        if (!empty($item->images) && is_array($item->images) && count($item->images) > 0) {
                            $imagePath = $item->images[0];
                            $imageExists = Storage::disk('public')->exists($imagePath);
                        }
                    @endphp

                    @if ($imageExists)
                        <a href="{{ route('product.show', ['slug' => $item->slug]) }}" class="h-full">
                            <img src="{{ asset('storage/' . $item->images[0]) }}" alt="{{ $item->name }}"
                                class="w-full h-full object-cover rounded-xl">
                        </a>
                    @else
                        <a href="{{ route('product.show', ['slug' => $item->slug]) }}" class="h-full">
                            <img src="{{ asset('images/generico.jpeg') }}" alt="Imagen genérica"
                                class="w-full h-full object-cover rounded-xl">
                        </a>
                    @endif
                </div>

                <div class="p-4 flex-col h-full">
                    <p class="-titulo-card">{{ Str::limit($item->name, 18) }}</p>

                    <div class="max-h-[96px] overflow-hidden line-clamp-3">
                        <div class="text-sm text-gray-600">
                            {!! $item->short_description !!}
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <a href="{{ route('product.show', ['slug' => $item->slug]) }}" class="h-full">
                        <button class="-ver-mas">Ver mas</button>
                    </a>
                </div>
            </div>


        @empty
            <h1 class="col-span-full text-center text-2xl font-bold text-gray-700">
                NO HAY {{ $title }} DISPONIBLES.
            </h1>
        @endforelse

    </div>

    <div class="flex justify-end mt-4 pb-8">
        {{-- Usamos la ruta 'products.index' y le pasamos el valor de $destacadoValue --}}
        <a href="/productos" class="-btn-negro">
            VER TODOS
        </a>
    </div>
</div>
