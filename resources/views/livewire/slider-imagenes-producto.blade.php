<div>
    <section class="w-[90%] mx-auto max-w-screen-lg overflow-hidden text-white rounded-lg mt-20 slider relative"
        id="slider">

        @php
            // 1. Filtramos las imágenes que realmente existen físicamente en el storage
            $validImages = collect($product->images)->filter(function ($image) {
                return !empty($image) && Storage::disk('public')->exists($image);
            });

            $placeholder = asset('images/generico.jpeg');
        @endphp

        @if ($validImages->isEmpty())
            {{-- CASO: No hay imágenes o no existen en disco --}}
            <figure class="relative w-full h-full aspect-video slider-childs" data-active>
                <img src="{{ $placeholder }}" class="w-full h-full block object-cover">

                {{-- Badge de aviso --}}
                <div class="absolute inset-0 flex items-center justify-center">
                    <span
                        class="bg-red-600 text-white px-6 py-3 rounded-md font-bold text-xl uppercase shadow-2xl border-2 border-white tracking-widest">
                        Producto Sin Imágenes
                    </span>
                </div>
            </figure>
        @else
            {{-- CASO: Hay imágenes válidas --}}
            @foreach ($validImages as $index => $image)
                <figure class="relative w-full h-full aspect-video slider-childs"
                    {{ $index === 0 ? 'data-active' : '' }}>
                    <img src="{{ asset('storage/' . $image) }}" class="w-full h-full block object-cover">
                </figure>
            @endforeach

            {{-- Controles del slider (solo si hay más de una imagen) --}}
            @if ($validImages->count() > 1)
                <button class="slider-prev bg-white rounded-full ml-4" data-button="prev">
                    <img src="{{ asset('images/slider/prev.svg') }}" class="w-8 aspect-square md:w-12">
                </button>

                <button class="slider-next bg-white rounded-full mr-4" data-button="next">
                    <img src="{{ asset('images/slider/next.svg') }}" class="w-8 aspect-square md:w-12">
                </button>
            @endif
        @endif

    </section>

    {{-- Solo cargamos el script si hay imágenes reales para desplazar --}}
    @if ($validImages->count() > 1)
        <script src="{{ asset('js/slider.js') }}"></script>
    @endif
</div>
