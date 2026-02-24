



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Los Internacionales' }}</title>

    <link rel="canonical" href="https://losinternacionales.com{{ $canonical ?? '' }}" />

    <meta name="description" content="{{ $_descripcion ?? 'Contamos con un elenco artístico y un grupo de profesionales altamente calificados en su área para alcanzar exitosamente los objetivos de eventos corporativos.' }}">
    
    <meta name="keywords" content="Big Band, orquesta internacional, los internacionales, eventos sociales, eventos corporativos, equipo de sonido, iluminación, escenografía, música en vivo, entretenimiento, bodas, aniversarios, fiestas privadas, conciertos, festivales, eventos empresariales, eventos culturales, eventos al aire libre, eventos temáticos">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="googlebot-image" content="index, follow">
    <meta name="googlebot-news-image" content="index, follow">

    
   

    <link rel="icon" href="{{ asset('images/los-internacionales.ico') }}" sizes="any">
    <!-- Fonts -->
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">    
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])