    <div class="h-60 overflow-hidden flex items-center justify-center">
        @php
            $imageExists = false;
            $imagePath = '';
            if (!empty($blog->images) && is_array($blog->images) && count($blog->images) > 0) {
                $imagePath = $blog->images[0];
                $imageExists = Storage::disk('public')->exists($imagePath);
            }
        @endphp

        @if ($imageExists)
            <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="">
                <img src="{{ asset('storage/' . $imagePath) }}" alt="{{ $blog->title }}"
                    class="w-full h-full object-cover">
            </a>

        @else
            <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="">
                    <img src="{{ asset('images/generico.jpeg') }}" alt="Imagen genérica"
                class="w-full h-full object-cover">
            </a>


        @endif
    </div>