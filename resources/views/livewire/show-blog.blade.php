<div class="container mx-auto p-4">
    <div class="flex justify-end mt-4 pb-8">
        <a href="/"
            class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded
               transition-colors duration-300 shadow-lg">
            &larr; REGRESAR
        </a>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        <!-- COLUMNA IZQUIERDA: Imagen + autor/fecha -->
        <div class="flex flex-col gap-6">
            <!-- Imagen -->
            @include('livewire.imagen-blog')

            <!-- Autor y fecha en un solo renglón -->
            <div class="flex justify-between items-center text-sm text-gray-600">
                <div class="font-medium text-gray-900">
                    {{ $blog->author->name }}
                </div>
                <div>
                    {{ $blog->published_at->format('d/m/Y') }}
                    <!-- o: {{ $blog->published_at->translatedFormat('j \de F \de Y') }} -->
                </div>
            </div>
        </div>

        <!-- COLUMNA DERECHA: Título, descripción y contenido -->
        <div class="flex flex-col gap-6">
            <h1 class="text-3xl md:text-4xl font-bold text-center md:text-left">
                {{ $blog->title }}
            </h1>

            @if ($blog->description)
                <div class="text-gray-700 text-lg leading-relaxed">
                    {!! $blog->description !!}
                </div>
            @endif

            <div class="prose prose-lg max-w-none text-gray-700">
                {!! $blog->content !!}
            </div>
        </div>
    </div>
</div>
