<div class="container mx-auto p-4 bg-gray-100 mt-4">

    <header class="flex justify-between items-center mb-0">
        <div class="text-6xl font-bold text-center pb-2">
            <h1 class="-titulo-area">{{ $title }}</h1>
        </div>
    </header>


    {{-- Contenedor del Grid de Tarjetas --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 grid-rows-[auto_1fr_auto] gap-6 w-full">

        @forelse ($items as $item)
            <a href="{{ route('blog.show', ['slug' => $item->slug]) }}" class="h-full">

                <div class="grid grid-rows-subgrid row-span-3 bg-white p-2 gap-1 -tarjeta-pdcto">

                    <div class="flex items-center justify-center">
                    
                        @php

                            $imageExists = false;
                            $imagePath = '';

                            if (!empty($item->image) && is_array($item->imags) && count($item->imags) > 0) {
                                $imagePath = $item->image;
                                $imageExists = Storage::disk('public')->exists($imagePath);
                                
                            }
                        @endphp
            <p>
                        @if ($imageExists)
                            <img src="{{ asset('storage/' . $item->images) }}" alt="{{ $item->name }}"
                                class="w-full h-full object-cover rounded-xl">
                        @else
                            <img src="{{ asset('images/generico.jpeg') }}" alt="Imagen genérica"
                                class="w-full h-full object-cover rounded-xl">
                        @endif
                    </div>

                    <div class="p-2">
                        <h3 class="font-bold text-xl mb-2">{{ $item->title }}</h3>

                        <div class="overflow-hidden line-clamp-3">
                            <div class="text-gray-700 text-base">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button class="-ver-mas">Ver mas</button>
                    </div>
                </div>
            </a>

        @empty
            <h1 class="col-span-full text-center text-2xl font-bold text-gray-700">
                NO HAY {{ $title }} DISPONIBLES.
            </h1>
        @endforelse

    </div>

    <div class="flex justify-end mt-4 pb-8">
        <a href="{{ route('blogs.index') }}"
            class="-btn-negro">
            VER TODOS
        </a>
    </div>
</div>
