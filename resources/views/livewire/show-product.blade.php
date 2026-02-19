<div class="container mx-auto p-4">
    @include('layouts.breadcrumb-productos')



    <div class="flex justify-end mt-4 pb-8">

        <div class="container mx-auto p-4 ">

            @include('layouts.breadcrumb-productos')




            <div class="mt-4">

                @include('livewire.slider-imagenes-producto')
                <h1 class="text-4xl font-bold text-left mt-4">{{ $product->name }}</h1>
                <div class="text-gray-700 text-lg">{!! $product->description !!}</div>

            </div>


            <div class="flex justify-end mt-4 pb-8">
                <a href="/"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-3 px-8 rounded
               transition-colors duration-300 shadow-lg">
                    &larr; REGRESAR
                </a>
            </div>
        </div>
