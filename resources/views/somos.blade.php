@extends('layouts.app')



@section('content')

    <div class="container max-w-full bg-black py-2">
        <div class="div wrapper">
            <nav class="flex bborder border-gray-600 bg-gradient-to-r from-slate-500/50 to-slate-800/20 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                    <a href="/" class="text-sm text-white hover:text-base0 inline-flex items-center">
                        <i class="fa-solid fa-house pr-6"></i>
                        Inicio
                    </a>
                    </li>
                    <li>
                    <div class="flex items-center text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <h2  class=" text-white ml-1 md:ml-2 text-sm font-medium ">Quienes somos</h2>
                    </div>
                    </li>
                </ol>
            </nav>
        </div>
        </div>
    


    
    <div class="wrapper -centrado grid grid-cols-1 md:grid-cols-2 gap-2">
        <div class="py-4 text-center col-span-2"><h1 class="text-base10">ofrecemos soluciones en seguridad industrial</h1></div>
        <div class="col-span-1">
            <h2>quienes somos</h2>
            <p>En Protektium ofrecemos soluciones en calzado industrial y accesorios de seguridad, respaldadas por asesoría técnica y enfoque ergonómico, para proteger al trabajador, prevenir riesgos y cumplir con los estándares de seguridad industrial en cada entorno laboral.</p>       
        </div>
        <div>
             <img src='{{ asset('images/quienes-somos.webp') }}' class="w-full pt-2" alt="Protektium, quienes somos">
        </div>
    </div>

    <div class="container max-w-full bg-black  py-2 my-2">.</div>

    <div class="wrapper -centrado">
        <h1 class="text-base10 text-center">¿Por qué elegir Protektium?</h1>
        <ul class="-lista">
            <li>
                <h2>Asesoría técnica especializada</h2>
                <p>Analizamos el entorno laboral, el tipo de actividad y los riesgos específicos para recomendar el equipo de protección adecuado.</p>
            </li>
            <li>
                <h2>Enfoque en ergonomía y prevención</h2>
                <p>Nuestras soluciones están orientadas a reducir fatiga, lesiones y accidentes derivados de largas jornadas y condiciones exigentes.</p>
            </li>
             <li>
                <h2>Cumplimiento normativo</h2>
                <p>Comercializamos productos alineados a los requerimientos de seguridad industrial y buenas prácticas en salud ocupacional.</p>
            </li>
             <li>
                <h2>Soluciones integrales de protección</h2>
                <p>Calzado industrial y accesorios de seguridad que garantizan estabilidad, confort y protección en cada área de trabajo.</p>
            </li>
             <li>
                <h2>Salud económica para la empresa</h2>
                <p>Invertir en el equipo correcto reduce rotación, incapacidades y costos asociados a incidentes laborales.</p>
            </li>
             <li>
                <h2>Acompañamiento profesional</h2>
                <p>Más que proveedores, somos aliados estratégicos comprometidos con la seguridad y el bienestar del personal.</p>
            </li>
        </ul>
        <p>En Protektium, entendemos que la seguridad industrial requiere soluciones alineadas a la normativa vigente y a las mejores prácticas en salud ocupacional. Por ello, nuestros productos y procesos están orientados al cumplimiento de los lineamientos establecidos por la STPS y las Normas Oficiales Mexicanas (NOM) aplicables al uso de Equipo de Protección Personal (EPP).</p>
        <p>Nuestro enfoque considera la correcta selección de calzado industrial y accesorios de seguridad conforme a:</p>
        <ul class="-lista">
            <li><p>El análisis de riesgos del puesto de trabajo</p></li>
            <li><p>Las condiciones físicas del entorno laboral</p></li>
            <li><p>La duración y exigencia de la jornada</p></li>
            <li><p>Los requerimientos operativos y normativos de cada industria</p></li>
        </ul>

        <p>A través de una asesoría técnica especializada, contribuimos a que las empresas fortalezcan su sistema de seguridad e higiene, prevengan incidentes laborales y promuevan el bienestar del trabajador, asegurando una inversión eficiente y responsable en equipos de protección</p>
        <p>Proteger al trabajador de manera integral mediante soluciones en calzado industrial, accesorios y productos de seguridad, asegurando protección, confort y estabilidad, con el objetivo de promover jornadas laborales más seguras, saludables y equilibradas.</p>

    </div>

    


     <div class="wrapper -centrado grid grid-cols-1 md:grid-cols-2 gap-2 pt-4">
         <div>
             <img src='{{ asset('images/mision.webp') }}' class="w-full pt-2" alt="Protektium misión">
        </div>
        <div class="">
            <h2  class="">Misión </h2>
            <p>Proteger al trabajador de manera integral mediante soluciones en calzado industrial, accesorios y productos de seguridad, asegurando protección, confort y estabilidad, con el objetivo de promover jornadas laborales más seguras, saludables y equilibradas</p>            
        </div>
       
    </div>

     <div class="wrapper -centrado grid grid-cols-1 md:grid-cols-2 gap-2 pt-4">
         
        <div class="">
            <h2>Visión </h2>
            <p>Ser un aliado estratégico para las empresas, impulsando una cultura de prevención, cuidado del cuerpo y seguridad laboral, donde la protección adecuada se traduzca en bienestar, confianza y mayor rendimiento.</p>
        </div>
        <div>
             <img src='{{ asset('images/vision.webp') }}' class="w-full pt-2" alt="Protektium Visión">
        </div>
       
    </div>


    <div class="wrapper -centrado py-8">
        <div>
            <h1 class="text-center">Marcas que Representamos</h1>
            <p>En Protektium trabajamos con marcas líderes en calzado industrial y protección laboral, seleccionadas por su seguridad certificada, ergonomía, durabilidad y desempeño comprobado.</p>
            <div class="py-4 mt-5">
                <img src='{{ asset('images/marcas.webp') }}' class="w-full" alt="Protektium, marcas que representamos">
            </div>
            
        </div>

    </div>
@endsection
