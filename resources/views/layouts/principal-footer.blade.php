
<footer class="bg-gray-800 text-white mt-10">
  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Columna 1 -->
      <div class="col-span-1">
        <a href="/" class=" bg-base30"><img src='{{ asset('images/protektium.webp') }}' alt="RomcyPets" class="" ></a>
		<p class="text-gray-400 text-sm mt-4">Líderes en equipos de protección industrial comprometidos con la seguridad y bienestar de los trabajadores en todos los sectores industriales.</p>
        
      </div>

      <!-- Columna 2 -->
      <div class="col-span-1">
        
        <nav class="">
			<h2 class="text-white pb-4">Descubre</h2>
				<ul class="text-sm ">
					<li><a href="/quienes-somos" class="hover:text-base30 transition-colors duration-300 text-white">Somos</a></li>
					<li><a href="/productos" class="hover:text-base30 transition-colors duration-300 text-white">productos</a></li>
					<li><a href="/contacto" class="hover:text-base30 transition-colors duration-300 text-white">Contacto</a></li>
					
				</ul>
			</nav>
      </div>

      <!-- Columna 3 -->
      <div class="col-span-1">
        
    	<h2 class="text-white">Servicios</h2>
		<ul class="text-sm">
			<li><p class="text-gray-400 text-sm">Asesoría especializada</p></li>
			<li><span class="text-gray-400 text-sm">Capacitación en seguridad</span></li>
			<li><span class="text-gray-400 text-sm">Mantenimiento de equipos</span></li>
			<li><span class="text-gray-400 text-sm">Certificaciones</span></li>
			<li><span class="text-gray-400 text-sm">Garantía extendida</span></li>
		</ul>
      </div>

      <!-- Columna 4 -->
      <div class="col-span-1">
        <h3 class="text-lg font-semibold mb-4">Información de contacto</h3>

		<div class="max-w-sm w-full lg:max-w-full lg:flex pb-3">
			<div class="flex text-base30">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
					<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
				</svg>
			</div>
			<div class="text-gray-400 text-sm ml-2">
				Mirador de querétaro 13 - 43
				<br>
				Col. Lomas de Casa Blanca
				<br>
				C.P. 76090 Querétaro, Qro.
			</div>
		</div>

		<div class="max-w-sm w-full lg:max-w-full lg:flex pb-3">
			<div class="flex text-base30">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
				</svg>

			</div>
			<div class="text-gray-400 text-sm ml-2">
				442 104 9006	
			</div>
		</div>

		<div class="max-w-sm w-full lg:max-w-full lg:flex pb-3">
			<div class="flex text-base30">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
				</svg>

			</div>
			<div class="text-gray-400 text-sm ml-2">
				info@protektium.com
				
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


