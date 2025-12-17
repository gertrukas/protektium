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
                    <h2  class=" text-base60 hover:text-bas30 ml-1 md:ml-2 text-sm font-medium ">Quienes somos</h2>
                </div>
                </li>
            </ol>
        </nav>
    </div>

    


    
    <div class="wrapper -centrado grid grid-cols-1 md:grid-cols-2 gap-2">
        <div class="py-4 text-center col-span-2"><h1 class="text-base10">Criadero responsable, regulado y con amor</h1></div>
        <div>
            <h2>quienes somos</h2>
            <p>Antes conocidos como Pets Martel, desde 2024 evolucionamos a Romcy Pets, un criadero familiar que nació del amor, la dedicación y el respeto hacia los perros.</p>
            <p>Con más de 10 años de experiencia, criamos con responsabilidad y ética las razas Pomeranian, Shih Tzu y Yorkshire Terrier, asegurando siempre el bienestar, la salud y el equilibrio emocional de cada cachorro.</p>
        </div>
        <div>
             <img src='{{ asset('images/nancy-romero.webp') }}' class="w-full pt-2" alt="romcy pets Nancy Romero">
        </div>
    </div>


    <div class="wrapper -centrado">
            <p>En Romcy Pets creemos que criar es un acto de amor y compromiso. Cada camada es planeada cuidadosamente, con padres seleccionados por su estructura, temperamento y linaje. Los cachorros crecen en un entorno familiar, rodeados de afecto, socialización y cuidados veterinarios desde sus primeros días de vida.</p>
    </div>

    


     <div class="wrapper -centrado grid grid-cols-1 md:grid-cols-2 gap-2 pt-4">
         <div>
             <img src='{{ asset('images/shih-tzu.webp') }}' class="w-full pt-2" alt="romcy pets Shih Tzu cachorros">
        </div>
        <div class="">
            <h2  class="">Misión </h2>
            <p>En Romcy Pets criamos Pomeranian, Shih Tzu y Yorkies con amor, respeto y responsabilidad, fomentando su bienestar físico, emocional y energético. Acompañamos a cada cachorro y a su familia en un camino de crecimiento, aprendizaje y armonía, creando vínculos auténticos y llenos de amor.</p>            
        </div>
       
    </div>

     <div class="wrapper -centrado grid grid-cols-1 md:grid-cols-2 gap-2 pt-4">
         
        <div class="">
            <h2>Visión </h2>
            <p>Ser un criadero que inspire confianza, respeto y conexión emocional entre personas y perros, reconocido por la dedicación, ética y crianza holística. Queremos que cada cachorro de Romcy Pets sea un reflejo de equilibrio, alegría y amor, transmitiendo a su familia felicidad y bienestar en cada etapa de su vida.</p>
        </div>
        <div>
             <img src='{{ asset('images/nancy-romero-razas.webp') }}' class="w-full pt-2" alt="romcy pets Shih Tzu y Yorkie">
        </div>
       
    </div>


    <div class="wrapper -centrado py-8">
        <div>
            <h2>REGULACIÓN Y RESPALDO</h2>
            <p>Nuestro criadero está regulado por la Federación Canófila Mexicana (FCM) y dado de alta ante Hacienda, operando bajo lineamientos legales y fiscales en regla.</p>
            <div class="p-4 mt-5">
        <img src='{{ asset('images/federacion-canofila-mexicana.png') }}' class="w-full" alt="romcy pets federacion canofila mexicana">
    </div>
            <p>Este respaldo garantiza que nuestros procesos de cría cumplen con los estándares de bienestar, trazabilidad y transparencia establecidos por la FCM.</p>
            <p>Todos nuestros cachorros cuentan con opción a Pedigree o Certificado de Pureza Racial, y pueden ser verificados mediante el número de registro o microchip ante la Federación.</p>
            <p>Además, Romcy Pets formó parte del Calendario Oficial 2024 de la Federación Canófila Mexicana, reconocimiento que avala nuestra trayectoria y compromiso como criadores responsables.</p>
        </div>

    </div>
@endsection
