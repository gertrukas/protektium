<div>

    {{ Breadcrumbs::render('blogs') }}

    <main class="container mx-auto p-4">

        <div class="mb-4">
            <div class="relative flex items-center">
                <input wire:model.live="search" type="text" placeholder="Buscar por título..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm">
                <span class="absolute inset-y-0 right-4 flex items-center pr-3">
                    <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                </span>
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-8">
            @forelse ($blogs as $blog)
                <div class="grid grid-rows-subgrid row-span-4 bg-white p-2 gap-1 -tarjeta-pdcto">
                    
                </div>


                <div
                    class="bg-white rounded-lg shadow-xl overflow-hidden h-full transform hover:scale-[1.02] transition duration-300">

                    @include('livewire.imagen-blog')

                    <div class="p-2">
                        <h3 class="font-bold text-xl mb-2">{{ $blog->title }}</h3>
                        <p class="text-lg">
                            {!! $blog->description !!}
                        </p>
                    </div>
                    <div class="text-end">
                        <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="h-full">
                            <button class="-ver-mas">Ver mas</button>
                        </a>
                    </div>

                </div>

            @empty
                <h1 class="col-span-full text-center text-2xl font-bold text-gray-700">
                    NO HAY COMUNICADOS DISPONIBLES.
                </h1>
            @endforelse
        </div>

        {{-- Enlaces de paginación --}}
        <div class="mt-8 mb-8">
            {{ $blogs->links() }}
        </div>

        <div class="flex justify-end">
            <a href="/"
                class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded
               transition-colors duration-300 shadow-lg">
                &larr; REGRESAR
            </a>
        </div>

    </main>
</div>
