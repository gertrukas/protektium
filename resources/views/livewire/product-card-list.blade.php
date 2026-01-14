<div class="container mx-auto p-4 bg-gray-100">

    <header class="flex justify-between items-center mb-0">
        <div class="text-6xl font-bold text-center pb-2">
            <h1 class="">{{ $title }}</h1>
        </div>
    </header>

   

    {{-- Contenedor del Grid de Tarjetas --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">

        @forelse ($items as $item)
            

                <div class="bg-white rounded-xl shadow-xl overflow-hidden h-full flex flex-col">

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
                        <h3 class="font-bold text-2xl mb-2">{{ $item->name }}</h3>

                        <div class="max-h-[96px] overflow-hidden line-clamp-3">
                             <div class="text-sm text-gray-600">
                                {!! $item->description !!}
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
        <a href="/productos"
            class="-btn-negro">
            VER TODOS
        </a>
    </div>
</div>
