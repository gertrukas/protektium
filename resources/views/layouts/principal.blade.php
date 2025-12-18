<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.principal-head')
</head>

<body class="font-principal bright-red flex flex-col min-h-screen bg-base60">
    

        @include('layouts.principal-header')

        @include('components.home-hero-section')

        @include('components.fcm')

        @include('components.razas')


        <div class="">
            {{-- $slot --}}
        </div>
    
    @include('layouts.principal-footer')

</body>

</html>
