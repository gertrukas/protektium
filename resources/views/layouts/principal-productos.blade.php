<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.principal-head')
</head>

<body class="font-principal bright-red flex flex-col min-h-screen bg-base60">


    @include('layouts.principal-header')

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
                        <h2  class=" text-white ml-1 md:ml-2 text-sm font-medium ">Productos</h2>
                    </div>
                    </li>
                </ol>
            </nav>
        </div>
        </div>

    <div class="">
        {{ $slot }}

    </div>

    @include('layouts.principal-footer')

</body>

</html>
