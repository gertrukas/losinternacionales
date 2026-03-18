@extends('layouts.app')



@section('content')
    {{  Breadcrumbs::render('somos') }}

      <div class="h-[70vh] -bg" style="background-image: url('{{asset('images/orquesta-los-internacionales.webp')}}");">
        
    </div>


    <div class="wrapper -centrado" id="quienes-somos">
        <div>
            <div class="py-4 text-center"><h1 class="">La orquesta más internacional de México</h1></div>
        </div>    

        <div class="pt-4">
            <h1>Quienes somos</h1>
            <p>Desde su fundación, Los Internacionales, la orquesta ha sido sinónimo de elegancia, calidad y distinción en el mundo de los eventos sociales y hemos acompañado a cientos de parejas, aniversarios, cumpleaños y empresas en sus momentos más especiales, creando atmósferas únicas y memorables.</p>
            <p>Bajo la dirección de Elsa Urbina, la orquesta continúa su legado, ofreciendo una fusión perfecta de clásicos y propuestas modernas, adaptadas a cada ocasión. Nos especializamos en bodas, eventos corporativos y celebraciones sociales, brindando una experiencia musical exclusiva que resalta la importancia de cada instante.</p>
        </div>
        
    </div>

    <div class="container max-w-full bg-black  py-2 my-2">.</div>

    <div class="wrapper -centrado">
        <h1 class="text-center">Un toque musical único para tu evento.</h1>
        <ul class="-lista">
            <li>
                <h2>Elegancia, calidad y distinción.</h2>
            </li>
            <li>
                <h2>Bodas, aniversarios, cumpleaños y empresas.</h2>
            </li>
             <li>
                <h2>Atmósferas únicas y memorables.</h2>
            </li>
        </ul>
        

    </div>

@endsection
