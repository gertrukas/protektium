<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D09F0VF7V0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-D09F0VF7V0');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('title', 'Romcy pets') }}</title>

    <link rel="canonical" href="https://romcypets.com/" />
    <meta name="description" content="criadero familiar que nació del amor, dedicación y respeto hacia los perros. Con más de 10 años de experiencia, criamos con responsabilidad y ética las razas Pomeranian, Shih Tzu y Yorkshire Terrier.">
    <meta name="keywords" content="criadero, perros, Pomeranian, Shih Tzu, Yorkshire Terrier, criador, perros, perros de compañía, perros de mascota, criador de perros">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="googlebot-image" content="index, follow">
    <meta name="googlebot-news-image" content="index, follow">

    
   

    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" sizes="any">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])