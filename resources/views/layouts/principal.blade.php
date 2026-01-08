<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.principal-head')
</head>

<body class="font-principal bright-red flex flex-col min-h-screen bg-base60">


    @include('layouts.principal-header')

    @include('components.home-hero-section')


    <div class="">
        @livewire('product-card-list', ['title' => 'PRODUCTOS', 'destacadoValue' => 0, 'limit' => 6])
    </div>

    @include('layouts.principal-footer')

</body>

</html>
