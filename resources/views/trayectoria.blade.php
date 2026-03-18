@extends('layouts.app')



@section('content')
    {{  Breadcrumbs::render('trayectoria') }}
    
    <div class="h-[70vh] -bg" style="background-image: url('{{asset('images/los-internacionales-equipo.webp')}}");">
        
    </div>


    <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2" id="quienes-somos">
        <div class="py-4 text-center sm:col-span-2 md:col-span-2 lg:col-span-2">
            <h1 class="text-3xl font-bold"> Los Internacionales<br> La orquesta con más de 50 años de tradición y excelencia musical</h1>
        </div>
        
    </div>

    

    <div class="wrapper -centrado">
            
            <h1>Nuestra historia</h1>
            <p>Fundada en 1968 por Roberto Casas del Real, Los Internacionales, ahora bajo la dirección de Elsa Urbina, ha sido sinónimo de calidad y elegancia en el mundo de los eventos sociales durante más de cinco décadas. Con el talento y visión de Roberto, un trompetista destacado y crooner de renombre, la orquesta logró posicionarse como una de las más importantes de México, dignificando el nombre de los músicos mexicanos dentro y fuera del país.</p>
            <br>
            <h1>Un legado de excelencia</h1>    
            <p>Los Internacionales alcanzarón niveles de prestigio internacional, participando en los más exclusivos eventos políticos y sociales. En su trayectoria, la orquesta tuvo la oportunidad de actuar en el icónico Caesars Palace en Las Vegas durante más de 18 años, alternando con artistas de talla mundial como Tom Jones, Luis Miguel y José Luis Rodríguez. Su presencia en los escenarios internacionales, además de su participación en la producción de discos icónicos como los LP's de RCA y el Tour Triple de Discos Continental, consolidó a Los Internacionales como una orquesta de renombre.</p>  
            <br>
            <h1>Un legado que perdura</h1>
            <p>En 2021, Elsa Urbina asumió la dirección de Los Internacionales. Elsa, quien previamente había sido cantante y gerente de operaciones, se comprometió a seguir el legado de excelencia y a continuar ofreciendo la mejor calidad musical, adaptando la orquesta a las nuevas demandas del mercado. Con ella, Los Internacionales ha continuado su evolución, ofreciendo una variedad de formatos musicales, desde pequeños tríos hasta formaciones completas de Big Band con secciones rítmicas, cuerdas y múltiples cantantes.
            <br>
            <br>
            <h1>Compromiso con calidad</h1>
            <p>A lo largo de su historia, Los Internacionales, la Orquesta ha sido reconocida con diversos premios y distinciones, ha realizado más de 5000 eventos. Desde bodas y celebraciones privadas hasta eventos corporativos, nuestra misión sigue siendo la misma: ofrecer una experiencia musical única y de alta calidad, adaptada a las necesidades de cada cliente.
            <br>
            <br>
            <h1>Hoy, seguimos siendo la orquesta versátil más cotizada de México</h1>
            <p>Nuestro lema es claro: Máxima calidad musical.</p>
    </div>

    


     

     

    
@endsection
