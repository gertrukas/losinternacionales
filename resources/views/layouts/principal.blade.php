<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.principal-head')
</head>

<body class="font-principal bright-red flex flex-col min-h-screen bg-black">
    

    @include('layouts.principal-header')

    {{  Breadcrumbs::render('home') }}

      @include('components.home-hero-section')


     <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 pt-4" id="quienes-somos">
        
        <div class="col-span-1 pl-2 text-white">
            <h2 class="text-white">Eventos Corporativos</h2>
            <p  class="text-white">Contamos con un elenco artístico y un grupo de profesionales altamente calificados en su área para alcanzar exitosamente los objetivos de eventos corporativos.</p>       
        </div>
        <div>
            <div class="relative w-full h-[40rem] aspect-video">
                <video
                    src="{{ asset('video/corporativo.mp4') }}"
                     muted loop
                    class="absolute inset-0 h-[40rem] object-cover  aspect-[9/16] mx-auto"
                    controls
                ></video>
            </div>
        </div>
    </div>

    <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 pt-4" id="quienes-somos">
        <div>
            <div class="relative w-full h-[40rem] aspect-video border border-gray-500">
                <video
                    src="{{ asset('video/sociales.mp4') }}"
                    muted loop
                    class="absolute inset-0 h-[40rem] object-cover aspect-[9/16] mx-auto"
                    controls
                ></video>
            </div>
        </div>
        <div class="col-span-1 pl-2 text-white ">
            <h2 class="text-white">Sociales</h2>
            <p  class="text-white">Somos conscientes que una boda, aniversario o evento social es una fecha especial, única y debe ser memorable hasta el último detalle, y el ambiente y la música es parte fundamental de este..</p>       
        </div>
        
    </div>

    <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 pt-4 mb-4" id="quienes-somos">
        
        <div class="col-span-1 pl-2 text-white">
            <h2 class="text-white">Equipo y personal</h2>
            <p  class="text-white">Los eventos son únicos e irrepetibles, por ello contamos con personal técnico altamente capacitado y con los mejores equipos profesionales para cada aplicación de las diferentes áreas de audio, video, iluminación y escenografía.</p>       
        </div>
        <div class="flex justify-center">
            <div class="relative w-full h-[40rem] aspect-video">
                <video
                    src="{{ asset('video/equipo.mp4') }}"
                    muted loop
                    class="absolute inset-0 h-[40rem] object-cover  aspect-[9/16] mx-auto"
                    controls
                ></video>
            </div>
        </div>
    </div>

    {{ $slot }}

   


    @include('layouts.principal-footer')

</body>

</html>
