<!DOCTYPE html>

<head>
  @include('layouts.principal-head')
</head>

<body class="font-principal bright-red flex flex-col min-h-screen bg-base60">
    
    @include('layouts.principal-header')

    @yield('content')

    @include('layouts.principal-footer')
</body>

</html>
