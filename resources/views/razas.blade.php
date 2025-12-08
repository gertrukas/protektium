@extends('layouts.app')



@section('content')
<div class="div wrapper">
        <nav class="flex bg-base30 text-white border border-gray-200 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                <a href="/" class="text-sm text-base60 hover:text-base10 inline-flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Inicio
                </a>
                </li>
                <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <h2  class=" text-base60 hover:text-bas30 ml-1 md:ml-2 text-sm font-medium ">Razas</h2>
                </div>
                </li>
            </ol>
        </nav>
    </div>

    <section class="container grid grid-cols-1 md:grid-cols-2 gap-8 p-0 my-6 -centrado">
        
        <!-- Left column -->
        <div class="pt-5">
            <img src='{{ asset('images/shih-tzu-raza.webp') }}' class="w-full">
            
        </div>

        <!-- Right column -->
        <div class="p-0 pb-0">
            
                <p>En Romcy Pets creemos que cada cachorro merece un cuidado completo, amoroso y adaptado a sus necesidades. Por eso, nuestros cachorros se entregan con todo lo necesario para que inicien su vida en un entorno seguro, equilibrado y lleno de amor:</p>

                <p>En Romcy Pets damos un cuidado completo, amoroso y adaptado a las necesidadews de cada cachorro y se entregan con todo lo necesario para que inicien su vida en un entorno seguro, equilibrado y lleno de amor:</p>

                <p>Las razas que criamos son:</p>
                <p> Pomerania,<br> 
                    Shih Tzu <br>
                    y <br>
                    Yorkie
                </p>
      
            
        </div>

    </section>

    <section class="container grid grid-cols-1 md:grid-cols-2 gap-8 p-0 my-6 -centrado">
        
        <!-- Left column -->
        <div class="pt-0">
            
            <img src='{{ asset('images/yorkie.webp') }}' class="w-full">
        </div>

        <!-- Right column -->
        <div class="p-0 pb-0">
            
            <div class="m-0 p-0">       
            
                <img src='{{ asset('images/pomeranian.webp') }}' class="w-full">

            </div>
    
            
        </div>

    </section>
 
 
    
@endsection



