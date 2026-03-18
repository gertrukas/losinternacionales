
<footer class="bg-gray-800 text-white mt-10">
  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Columna 1 -->
      <div class="col-span-1">
        <a href="/" class=" bg-base30"><img src="{{ asset('images/los-internacionales.webp') }}" alt="Los Internacionales" class="" ></a>
		<p class="text-gray-400 text-sm mt-4">Con más de 5 décadas de experiencia y bajo la dirección de Elsa Urbina y marcada por una trayectoria de éxito, seguimos brindando las mejores experiencias y los mejores servicios a nuestros clientes.</p>
        
      </div>

      <!-- Columna 2 -->
      <div class="col-span-1">
        
        <nav class="">
			<h2 class="text-white pb-4">Descubre</h2>
				<ul class="text-sm ">
					<li><a href="/quienes-somos" class="hover:text-base30 transition-colors duration-300 text-white">Somos</a></li>
					<li><a href="/trayectoria" class="hover:text-base30 transition-colors duration-300 text-white">Trayectoria</a></li>
					<li><a href="/servicios" class="hover:text-base30 transition-colors duration-300 text-white">Servicios</a></li>
					<li><a href="/contacto" class="hover:text-base30 transition-colors duration-300 text-white">Contacto</a></li>
					
				</ul>
			</nav>
      </div>

      <!-- Columna 3 -->
      <div class="col-span-1">
        
    	<h2 class="text-white">Servicios</h2>
		<ul class="text-sm">
			<li><p class="text-gray-400 text-sm">Corporativos</p></li>
			<li><span class="text-gray-400 text-sm">Sociales</span></li>
			<li><span class="text-gray-400 text-sm">Equipo</span></li>
			<li><span class="text-gray-400 text-sm">Personal</span></li>
		
		</ul>
      </div>

      <!-- Columna 4 -->
      <div class="col-span-1">
        <h3 class="text-lg font-semibold mb-4">Información de contacto</h3>

		<div class="max-w-sm w-full lg:max-w-full lg:flex pb-3">
			<div class="flex text-base30">
				<i class="fa-solid fa-location-dot"></i>
			</div>
			<div class="text-gray-400 text-sm ml-2">
				Campo Samaria 29. 
				<br>Petrolera Taxqueña.
				<br>Coyoacán, 04410 
				<br>Ciudad de México, CDMX
				
			</div>
		</div>

		<div class="max-w-sm w-full lg:max-w-full lg:flex pb-3">
			<div class="flex text-base30">
				 <i class="fa-solid fa-phone"></i>   
			</div>
			<div class="text-gray-400 text-sm ml-2">
				<a href="tel:+525585809927">+52 (55)8580 9927</a>
			</div>
		</div>

		<div class="max-w-sm w-full lg:max-w-full lg:flex pb-3">
			<div class="flex text-base30">
				 <i class="fa-regular fa-envelope"></i>
			</div>
			<div class="text-gray-400 text-sm ml-2">
				<a href="mailto:info@losinternacionales.com">info@losinternacionales.com</a>	
				
			</div>
		</div>
        
		
      </div>
    </div>

    <!-- Sección de derechos de autor -->
    <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400 text-sm ml-2">
	  Copyright {{ date('Y') }} - <a href="/aviso-de-privacidad" class="text-grey-400 hover:text-white">Aviso de privacidad</a>
    </div>
  </div>
</footer>


