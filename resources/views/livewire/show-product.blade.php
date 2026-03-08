<div class="w-full">

    {{ Breadcrumbs::render('producto', $product->name) }}

    <div class="container mx-auto p-4">

        <div class="mt-4">

            @include('livewire.slider-imagenes-producto')

            <h1 class="text-4xl font-bold text-left mt-6">{{ $product->name }}</h1>
            <div class="text-gray-700 text-lg mt-2">{!! $product->description !!}</div>

        </div>

        <div class="flex justify-end mt-4 pb-8">
            <a href="/"
                class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded
               transition-colors duration-300 shadow-lg">
                &larr; REGRESAR
            </a>
        </div>
    </div>

</div>
