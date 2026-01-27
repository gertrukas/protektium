<div class="container mx-auto p-4">

    <header class="flex justify-between items-center mb-0">
        <div class="text-6xl font-bold text-center pb-2">
            <h1 class="">{{ $title }}</h1>
        </div>
    </header>

    <hr class="mb-8">

    {{-- Contenedor del Grid de Tarjetas --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">

        @forelse ($items as $item)
            <a href="{{ route('blog.show', ['slug' => $item->slug]) }}" class="h-full">

                <div class="-tarjeta-pdcto">

                    <div class="h-48 overflow-hidden flex items-center justify-center">
                        @php
                            $imageExists = false;
                            $imagePath = '';
                            if (!empty($item->image) && is_array($item->imags) && count($item->imags) > 0) {
                                $imagePath = $item->image;
                                $imageExists = Storage::disk('public')->exists($imagePath);
                            }
                        @endphp

                        @if ($imageExists)
                            <img src="{{ asset('storage/' . $item->images) }}" alt="{{ $item->name }}"
                                class="w-full h-full object-cover">
                        @else
                            <img src="{{ asset('images/generico.jpeg') }}" alt="Imagen genérica"
                                class="w-full h-full object-cover">
                        @endif
                    </div>

                    <div class="p-4 flex-col">
                        <h3 class="font-bold text-xl mb-2">{{ $item->title }}</h3>

                        <div class="max-h-[96px] overflow-hidden line-clamp-3">
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
