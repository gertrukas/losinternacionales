<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts.principal-head')
</head>

<body class="font-principal bright-red flex flex-col min-h-screen bg-black">
    

    @include('layouts.principal-header')

    {{  Breadcrumbs::render('home') }}

      @include('components.home-hero-section')


      <!-- resources/views/components/video-player.blade.php -->



     <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 pt-4" id="quienes-somos">
        
        <div class="col-span-1 pl-2">
            <h2 class="">Eventos Corporativos</h2>
            <p  class="">Contamos con un elenco artístico y un grupo de profesionales altamente calificados en su área para
                alcanzar exitosamente los objetivos de eventos corporativos.</p>
            <p class="">    Tenemos la capacidad y trato para trabajar en equipo con coordinador de eventos o wendding
                Planner.</p>       
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
            <p  class="">Con la misión de que tu evento social (aniversario, boda,cumpleaños, etc.) sea memorable cuidando
                hasta el último detalle donde la música es el alma de la fiesta y con un ambiente sofisticado.</p>
            <p class="">Logrando que sea una experiencia musical y que sea una fecha inolvidable</p>       
        </div>
        
    </div>

    <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2 pt-4 mb-4" id="quienes-somos">
        
        <div class="col-span-1 pl-2 ">
            <h2 class="">Equipo y personal</h2>
            <p  class="">Vanguardia en tecnología con personal técnico altamente capacitado y con los mejores equipos
profesionales para cada aplicación de las diferentes áreas de audio, video, iluminación y
escenografía.</p>       
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
