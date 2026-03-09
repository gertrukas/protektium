@php
    $validImages = collect($blog->images)
        ->filter(function ($image) {
            return !empty($image) && Storage::disk('public')->exists($image);
        })
        ->values();

    $placeholder = asset('images/generico.jpeg');
@endphp

<div x-data="{
    activeIndex: {{ $activeImageIndex ?? 0 }},
    loaded: [],
    mainLoaded: false,
    init() {
        this.loaded = Array({{ $validImages->count() }}).fill(false);
        // Verificar imágenes ya cacheadas luego de que Alpine termine de renderizar
        this.$nextTick(() => {
            const imgs = this.$el.querySelectorAll('img[data-gallery]');
            imgs.forEach((img, i) => {
                if (img.complete && img.naturalWidth > 0) {
                    this.loaded[i] = true;
                    if (i === this.activeIndex) this.mainLoaded = true;
                }
            });
        });
    },
    setActive(i) {
        this.activeIndex = i;
        this.mainLoaded = this.loaded[i] ?? false;
    },
    prev() {
        this.setActive((this.activeIndex - 1 + {{ max(1, $validImages->count()) }}) % {{ max(1, $validImages->count()) }});
    },
    next() {
        this.setActive((this.activeIndex + 1) % {{ max(1, $validImages->count()) }});
    }
}" class="w-full max-w-4xl mx-auto select-none">
    @if ($validImages->isEmpty())
        {{-- Sin imágenes --}}
        <div
            class="relative w-full aspect-video rounded-xl overflow-hidden bg-gray-100 flex items-center justify-center">
            <img src="{{ $placeholder }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center justify-center bg-black/30">
                <span
                    class="bg-red-600 text-white px-6 py-3 rounded-md font-bold text-lg uppercase tracking-widest shadow-2xl border-2 border-white">
                    Sin Imágenes
                </span>
            </div>
        </div>
    @else
        {{-- IMAGEN PRINCIPAL --}}
        <div class="relative w-full aspect-video rounded-xl overflow-hidden bg-gray-100 shadow-lg mb-3">

            {{-- Loading spinner --}}
            <div x-show="!mainLoaded" x-transition.opacity
                class="absolute inset-0 flex flex-col items-center justify-center bg-gray-100 z-10">
                <svg class="animate-spin h-10 w-10 text-gray-400 mb-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4" />
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z" />
                </svg>
                <span class="text-sm text-gray-400 font-medium tracking-widest uppercase">Cargando...</span>
            </div>

            {{-- Imágenes (todas renderizadas, solo la activa visible) --}}
            @foreach ($validImages as $index => $image)
                <img src="{{ asset('storage/' . $image) }}" alt="Imagen {{ $index + 1 }}" data-gallery
                    data-index="{{ $index }}" x-show="activeIndex === {{ $index }}"
                    x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    @load="
                        loaded[{{ $index }}] = true;
                        if (activeIndex === {{ $index }}) mainLoaded = true;
                    "
                    class="absolute inset-0 w-full h-full object-cover">
            @endforeach

            {{-- Flechas (solo si hay más de una imagen) --}}
            @if ($validImages->count() > 1)
                <button @click="prev()"
                    class="absolute left-3 top-1/2 -translate-y-1/2 z-20 bg-white/80 hover:bg-white text-gray-700 rounded-full w-10 h-10 flex items-center justify-center shadow-md transition-all duration-200 hover:scale-110"
                    aria-label="Anterior">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <button @click="next()"
                    class="absolute right-3 top-1/2 -translate-y-1/2 z-20 bg-white/80 hover:bg-white text-gray-700 rounded-full w-10 h-10 flex items-center justify-center shadow-md transition-all duration-200 hover:scale-110"
                    aria-label="Siguiente">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                {{-- Contador --}}
                <div
                    class="absolute bottom-3 right-3 z-20 bg-black/50 text-white text-xs font-medium px-2.5 py-1 rounded-full">
                    <span x-text="activeIndex + 1"></span> / {{ $validImages->count() }}
                </div>
            @endif
        </div>

        {{-- MINIATURAS --}}
        @if ($validImages->count() > 1)
            <div class="flex gap-2 overflow-x-auto pb-1 scrollbar-thin scrollbar-thumb-gray-300">
                @foreach ($validImages as $index => $image)
                    <button @click="setActive({{ $index }}); mainLoaded = loaded[{{ $index }}] ?? false"
                        class="relative flex-shrink-0 w-20 h-16 rounded-lg overflow-hidden border-2 transition-all duration-200 focus:outline-none"
                        :class="activeIndex === {{ $index }} ?
                            'border-blue-500 shadow-md scale-105' :
                            'border-transparent opacity-60 hover:opacity-90 hover:border-gray-300'"
                        aria-label="Ver imagen {{ $index + 1 }}">
                        <img src="{{ asset('storage/' . $image) }}" alt="Miniatura {{ $index + 1 }}"
                            class="w-full h-full object-cover">
                    </button>
                @endforeach
            </div>
        @endif
    @endif
</div>
