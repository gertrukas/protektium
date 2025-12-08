    {{-- <div class="grid grid-cols-1 md:grid-cols-[25%_75%] gap-0">
        <div class="p-4 text-right leading-none">
            <h1 class="font-libre">Comunicados</h1>
            <br>
            <a href="{{ route('blogs.index') }}">
                VER TODOS ->
            </a>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                @forelse ($blogs as $blog)
                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="h-full">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden h-full">
                            @include('livewire.imagen-blog')

                            <div class="p-4">

                                <h3 class="text-base10 text-2xl font-bold mb-2 ">{{ $blog->title }}</h3>

                                <p class="text-base10 text-base">{!! $blog->description !!}</p>

                            </div>
                        </div>
                    </a>

                @empty
                    <h1 class="col-span-full text-center text-2xl font-bold text-gray-700">
                        NO HAY COMUNICADOS PUBLICADOS.
                    </h1>
                @endforelse

            </div>

        </div>
    </div> --}}
