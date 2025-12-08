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
                        <h2  class=" text-base60 hover:text-bas30 ml-1 md:ml-2 text-sm font-medium ">Servicios</h2>
                    </div>
                    </li>
                </ol>
            </nav>
        </div>

    <section class="pt-8">
        <div class="w-full bg-cover bg-center bg-no-repeat h-[40rem] flex items-end justify-center" style="background-image: url('{{ asset('images/servicios-criadero.webp') }}')">
            
            <h1 class=" text-white sm:text-1xl md:text-3xl lg:text-6xl text-center pb-20 font-libre">
                Criar con amor, responsabilidad y respeto… porque cada cachorro merece un comienzo extraordinario.
            </h1>

        </div>
    </section>

<div class="wrapper -centrado pb-4">

            <div class="py-4 text-center "><h1 class="text-base10">SALUD, BIENESTAR Y GARANTÍAS</h1></div>

            <div class="col-span-2">
                <img src='{{ asset('images/servicios.webp') }}' class="w-1/2 float-right pt-2">
                <P>El bienestar es nuestra prioridad. Todos nuestros cachorros se entregan con:</P>
                <P>En Romcy Pets creemos que cada cachorro merece un cuidado completo, amoroso y adaptado a sus necesidades. Por eso, nuestros cachorros se entregan con todo lo necesario para que inicien su vida en un entorno seguro, equilibrado y lleno de amor:</P>
                <ul class="-lista">
                    <li><p>Vacunación y desparasitación al día, con garantía de salud.</p></li>
                    <li><p>Guía personalizada de cuidados, incluyendo recomendaciones de alimentación, tipo de bebederos, cepillos y productos específicos según la raza.</p></li>
                    <li><p>Porción inicial de alimento que el cachorro ya está acostumbrado a comer, para facilitar la adaptación.</p></li>
                    <li><p>Seguimiento personalizado durante los siete días posteriores a la entrega, asegurando que tanto la familia como el cachorro se adapten de manera armoniosa.</p></li>
                    <li><p>Acompañamiento continuo en todas las etapas de crecimiento, incluyendo:</p></li>
                    <li><p>Muda y cuidado del pelaje</p></li>
                    <li><p>Tips de comportamiento y socialización</p></li>
                    <li><p>Recomendaciones de alimentación</p></li>
                    <li><p>Consejos de estética y grooming</p></li>
                </ul>

                <p>Cada familia que adquiere un cachorro de Romcy Pets recibe nuestro apoyo constante, porque nuestro compromiso no termina con la entrega: queremos que cada perro crezca sano, feliz y equilibrado, y que su nueva familia se sienta segura y acompañada en cada paso del camino.</p>

                <br>
                <h2>CONFIANZA, COMPROMISO Y CERCANÍA</h2>
                <P>En Romcy Pets creemos en las relaciones honestas y duraderas.</P>
                <P>Cada familia que adquiere un cachorro se convierte en parte de nuestra historia. Por eso, ofrecemos trato directo, comunicación constante y transparencia total durante todo el proceso.</P>
                <P>Nuestro compromiso es entregar no solo un cachorro hermoso y saludable, sino un compañero de vida equilibrado, feliz y lleno de amor.</P>
            </div>
                
</div>




    
@endsection



