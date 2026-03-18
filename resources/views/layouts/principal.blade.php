<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.principal-head')
</head>

<body class="font-principal bright-red flex flex-col min-h-screen bg-fdo">
    

    @include('layouts.principal-header')

    {{  Breadcrumbs::render('home') }}

      @include('components.home-hero-section')


      <!-- resources/views/components/video-player.blade.php -->



     <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 pt-4" id="quienes-somos">
        
        <div class="col-span-1 pl-2">
            <h2 class="">Eventos Corporativos</h2>
            <h2  class="">Profesionalismo</h2>
            <p>Contamos con un elenco artístico y una producción de profesionales altamente calificados en su área para alcanzar exitosamente los objetivos de eventos corporativos.</p>
            <p>Apoyamos activamente el soporte, realización y apoyo a la coordinación de eventos empresariales (cenas, comidas, cocteles, eventos temáticos, inauguraciones, lanzamiento de producto, etc.).     </p>
        </div>
        <div>
            <div class="relative w-full h-[40rem] aspect-video">
                <video controls  loop
                    src="{{ asset('video/corporativo.mp4') }}"
                    class="scroll-video absolute inset-0 h-[40rem] object-cover aspect-[9/16] mx-auto border-2 border-red-500"
                ></video>
            </div>
        </div>
    </div>

    <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 pt-4" id="quienes-somos">
        <div>
            <div class="relative w-full h-[40rem] aspect-video ">
                <video controls  loop
                    src="{{ asset('video/sociales.mp4') }}"
                    class="scroll-video absolute inset-0 h-[40rem] object-cover aspect-[9/16] mx-auto  border-2 border-red-500"
                    controls
                ></video>
            </div>
        </div>
        <div class="col-span-1 pl-2  ">
            <h2 class="">Sociales</h2>
            <h2  class="">Un evento inolvidable</h2>
            <p>Somos conscientes que una boda, aniversario o evento social es una fecha especial, única y debe ser memorable hasta el último detalle, y el ambiente y la música es parte fundamental de este.</p>
            <p>Por eso, siempre nos esmeramos en que tú y tus invitados tengan la mejor experiencia musical, y sea esta una fecha inolvidable.</p>
              
        </div>
        
    </div>

    <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 pt-4 mb-4" id="quienes-somos">
        
        <div class="col-span-1 pl-2 ">
            <h2 class="">Equipo y personal</h2>
            <h2  class="">Vanguardia en tecnología</h2>
            <p>Los eventos son únicos e irrepetibles, por ello contamos con personal técnico altamente capacitado y con los mejores equipos profesionales para cada aplicación de las diferentes áreas de audio, video, iluminación y escenografía.</p>
            <p>Con esto garantizamos el éxito de cada una de nuestras presentaciones.</p>
        </div>
        <div class="flex justify-center">
            <div class="relative w-full h-[40rem] aspect-video">
                <video controls  loop
                    src="{{ asset('video/equipo.mp4') }}"
                    class="scroll-video absolute inset-0 h-[40rem] object-cover  aspect-[9/16] mx-auto  border-2 border-red-500"
                    controls
                ></video>
            </div>
        </div>
    </div>

    {{ $slot }}

   


    @include('layouts.principal-footer')

</body>

</html>
