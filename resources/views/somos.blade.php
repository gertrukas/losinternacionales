@extends('layouts.app')



@section('content')
    {{  Breadcrumbs::render('somos') }}
    
    <div class="wrapper -centrado grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-2" id="quienes-somos">
        <div class="py-4 text-center sm:col-span-2 md:col-span-2 lg:col-span-2"><h1 class="text-base10">ofrecemos soluciones en seguridad industrial</h1></div>
        <div class="col-span-1 pl-2">
            <h2>quienes somos</h2>
            <p>En Los Internacionales ofrecemos soluciones en calzado industrial y accesorios de seguridad, respaldadas por asesoría técnica y enfoque ergonómico, para proteger al trabajador, prevenir riesgos y cumplir con los estándares de seguridad industrial en cada entorno laboral.</p>       
        </div>
        <div>
             <img src='{{ asset('images/quienes-somos.webp') }}' class="w-auto pt-2 m-auto pr-2" alt="Los Internacionales, quienes somos">
        </div>
    </div>

    <div class="container max-w-full bg-black  py-2 my-2">.</div>

    <div class="wrapper -centrado">
        <h1 class="text-base10 text-center">¿Por qué elegir Los Internacionales?</h1>
        <ul class="-lista">
            <li>
                <h2>Asesoría técnica especializada</h2>
                <p>Analizamos el entorno laboral, el tipo de actividad y los riesgos específicos para recomendar el equipo de protección adecuado.</p>
            </li>
            <li>
                <h2>Enfoque en ergonomía y prevención</h2>
                <p>Nuestras soluciones están orientadas a reducir fatiga, lesiones y accidentes derivados de largas jornadas y condiciones exigentes.</p>
            </li>
             <li>
                <h2>Cumplimiento normativo</h2>
                <p>Comercializamos productos alineados a los requerimientos de seguridad industrial y buenas prácticas en salud ocupacional.</p>
            </li>
             <li>
                <h2>Soluciones integrales de protección</h2>
                <p>Calzado industrial y accesorios de seguridad que garantizan estabilidad, confort y protección en cada área de trabajo.</p>
            </li>
             <li>
                <h2>Salud económica para la empresa</h2>
                <p>Invertir en el equipo correcto reduce rotación, incapacidades y costos asociados a incidentes laborales.</p>
            </li>
             <li>
                <h2>Acompañamiento profesional</h2>
                <p>Más que proveedores, somos aliados estratégicos comprometidos con la seguridad y el bienestar del personal.</p>
            </li>
        </ul>
        <p>En Los Internacionales, entendemos que la seguridad industrial requiere soluciones alineadas a la normativa vigente y a las mejores prácticas en salud ocupacional. Por ello, nuestros productos y procesos están orientados al cumplimiento de los lineamientos establecidos por la STPS y las Normas Oficiales Mexicanas (NOM) aplicables al uso de Equipo de Protección Personal (EPP).</p>
        <p>Nuestro enfoque considera la correcta selección de calzado industrial y accesorios de seguridad conforme a:</p>
        <ul class="-lista">
            <li><p>El análisis de riesgos del puesto de trabajo</p></li>
            <li><p>Las condiciones físicas del entorno laboral</p></li>
            <li><p>La duración y exigencia de la jornada</p></li>
            <li><p>Los requerimientos operativos y normativos de cada industria</p></li>
        </ul>

        <p>A través de una asesoría técnica especializada, contribuimos a que las empresas fortalezcan su sistema de seguridad e higiene, prevengan incidentes laborales y promuevan el bienestar del trabajador, asegurando una inversión eficiente y responsable en equipos de protección</p>
        <p>Proteger al trabajador de manera integral mediante soluciones en calzado industrial, accesorios y productos de seguridad, asegurando protección, confort y estabilidad, con el objetivo de promover jornadas laborales más seguras, saludables y equilibradas.</p>

    </div>

    


     <div class="wrapper -centrado grid grid-cols-1 md:grid-cols-2 gap-2 pt-4">
         <div>
             <img src='{{ asset('images/mision.webp') }}' class="m-auto pt-2 content-center" alt="Los Internacionales misión">
        </div>
        <div class="pl-2">
            <h2  class="">Misión </h2>
            <p>Proteger al trabajador de manera integral mediante soluciones en calzado industrial, accesorios y productos de seguridad, asegurando protección, confort y estabilidad, con el objetivo de promover jornadas laborales más seguras, saludables y equilibradas</p>            
        </div>
       
    </div>

     <div class="wrapper -centrado grid grid-cols-1 md:grid-cols-2 gap-2 pt-4">
         
        <div class="pl-2">
            <h2>Visión </h2>
            <p>Ser un aliado estratégico para las empresas, impulsando una cultura de prevención, cuidado del cuerpo y seguridad laboral, donde la protección adecuada se traduzca en bienestar, confianza y mayor rendimiento.</p>
        </div>
        <div>
             <img src='{{ asset('images/vision.webp') }}' class="m-auto pt-2 content-center" alt="Los Internacionales Visión">
        </div>
       
    </div>


    <div class="wrapper -centrado py-8">
        <div>
            <h1 class="text-center">Marcas que Representamos</h1>
            <p>En Los Internacionales trabajamos con marcas líderes en calzado industrial y protección laboral, seleccionadas por su seguridad certificada, ergonomía, durabilidad y desempeño comprobado.</p>
            <div class="py-4 mt-5">
                <img src='{{ asset('images/marcas.webp') }}' class="w-full" alt="Los Internacionales, marcas que representamos">
            </div>
            
        </div>

    </div>
@endsection
