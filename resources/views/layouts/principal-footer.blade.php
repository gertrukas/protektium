<footer class="container px-0 divide-y bg-base10">

	<div class="flex flex-col justify-between py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">

		<div class="lg:w-1/3 flex items-start ml-4">
            <a href="/" class=" bg-base30"><img src='{{ asset('images/romcypets.webp') }}' alt="RomcyPets" class=" p-4" ></a>
		</div>

		<div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-4 px-4">
			<div class="space-y-3">
				<h3 class="text-xl font-semibold mb-2 border-b-2 border-orange-500 pb-1 inline-block text-white">Descubre</h3>
                <nav>
                    <ul class="text-sm space-y-1">
                        <li><a href="/quienes-somos" class="hover:text-orange-500 transition-colors duration-300 text-white">Somos</a></li>
                        <li><a href="/servicios" class="hover:text-orange-500 transition-colors duration-300 text-white">Servicios</a></li>
                        <li><a href="/contacto" class="hover:text-orange-500 transition-colors duration-300 text-white">Contacto</a></li>
                        
                    </ul>
                </nav>
			</div>
			<div class="space-y-3">
				
			</div>
			<div class="space-y-3">
				
			</div>
			<div class="space-y-3 mr-4">
                <img src='{{ asset('images/feliz-navidad.webp') }}' alt="RomcyPets" class="h-auto w-auto mr-4">

				<div class="uppercase text-white">Redes Sociales</div>
				<div class="flex justify-start space-x-3">
					
					<a href="https://www.facebook.com/Romcy.pets.qro">
					<button id="facebook" class="w-6 h-6 flex items-center justify-center relative overflow-hidden rounded-full bg-white shadow-md shadow-gray-200 group transition-all duration-300">
						<svg class="relative z-10 fill-gray-900 transition-all duration-300  xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72" fill="none">
						<path
							d="M46.4927 38.6403L47.7973 30.3588H39.7611V24.9759C39.7611 22.7114 40.883 20.4987 44.4706 20.4987H48.1756V13.4465C46.018 13.1028 43.8378 12.9168 41.6527 12.8901C35.0385 12.8901 30.7204 16.8626 30.7204 24.0442V30.3588H23.3887V38.6403H30.7204V58.671H39.7611V38.6403H46.4927Z"
							fill="" />
						</svg>
					
					</button>
					</a>

					<a href="https://www.instagram.com/romcy.pets">
					<button id="instagram" class="w-6 h-6 flex items-center justify-center rounded-full relative overflow-hidden bg-white shadow-md shadow-gray-200 group transition-all duration-500">
						<svg class="fill-gray-900 relative z-10 transition-all duration-500 xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 51 51" fill="none">
							<path
	
						</svg>
						
					</button>
					</a>

					<a href="https://www.tiktok.com/@pets.martell">
					<button id="tiktok" class="w-6 h-6 flex items-center justify-center relative overflow-hidden rounded-full bg-white shadow-md
					 shadow-gray-200 ">
						<svg class="fill-base10 relative z-10 " xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 42 47" fill="none">
						
						
						<path fill-rule="evenodd" clip-rule="evenodd"
						d="M28.4589 15.5892C31.5241 17.7857 35.2019 18.9638 38.9729 18.9571V13.0166C36.8243 12.5623 34.8726 11.4452 33.3927 9.82262C32.1372 9.04144 31.0601 8.00479 30.2315 6.78004C29.4029 5.5553 28.8412 4.16989 28.5831 2.71387H23.09V32.8018C23.0849 34.1336 22.6629 35.4304 21.8831 36.51C21.1034 37.5897 20.0051 38.3981 18.7425 38.8217C17.4798 39.2453 16.1162 39.2629 14.8431 38.872C13.57 38.4811 12.4512 37.7012 11.6439 36.642C10.3645 35.9965 9.3399 34.9387 8.7354 33.6394C8.1309 32.3401 7.98177 30.875 8.31208 29.4805C8.64239 28.0861 9.43286 26.8435 10.556 25.9535C11.6791 25.0634 13.0693 24.5776 14.5023 24.5745C15.1599 24.5766 15.8134 24.6772 16.4411 24.8728V18.8826C13.7288 18.9477 11.0946 19.8033 8.86172 21.3444C6.62887 22.8855 4.89458 25.0451 3.87175 27.5579C2.84892 30.0708 2.58205 32.8276 3.10392 35.49C3.62579 38.1524 4.91367 40.6045 6.80948 42.5453C8.90731 43.9459 11.3458 44.7512 13.8651 44.8755C16.3845 44.9997 18.8904 44.4383 21.1158 43.2509C23.3413 42.0636 25.2031 40.2948 26.5027 38.133C27.8024 35.9712 28.4913 33.4973 28.4962 30.9749L28.4589 15.5892Z"
						fill="" />
						
						<path fill-rule="evenodd" clip-rule="evenodd"
						d="M38.9736 13.0161V11.4129C37.0005 11.4213 35.0655 10.8696 33.3934 9.82211C34.8695 11.4493 36.8229 12.5674 38.9736 13.0161ZM28.5838 2.71335C28.5838 2.42751 28.4968 2.12924 28.4596 1.8434V0.874023H20.8785V30.9744C20.872 32.6598 20.197 34.2738 19.0017 35.4621C17.8064 36.6504 16.1885 37.3159 14.503 37.3126C13.5106 37.3176 12.5311 37.0876 11.6446 36.6415C12.4519 37.7007 13.5707 38.4805 14.8438 38.8715C16.1169 39.2624 17.4805 39.2448 18.7432 38.8212C20.0058 38.3976 21.1041 37.5892 21.8838 36.5095C22.6636 35.4298 23.0856 34.1331 23.0907 32.8013V2.71335H28.5838ZM16.4418 18.8696V17.167C13.3222 16.7432 10.1511 17.3885 7.44529 18.9977C4.73944 20.6069 2.65839 23.0851 1.54131 26.0284C0.424223 28.9718 0.336969 32.2067 1.29377 35.206C2.25057 38.2053 4.195 40.792 6.81017 42.5448C4.92871 40.5995 3.65455 38.1484 3.14333 35.4908C2.63212 32.8333 2.906 30.0844 3.9315 27.5799C4.957 25.0755 6.68974 22.924 8.91801 21.3882C11.1463 19.8524 13.7736 18.9988 16.4791 18.9318L16.4418 18.8696Z"
						fill="" />
						</svg>
					</button>
					</a>
					
				</div>
			</div>
		</div>
	</div>
	<div class="text-base10 text-sm mt-2 text-center bg-base60 py-2 mb-0">
            Copyright {{ date('Y') }} - <a href="/aviso-de-privacidad">Aviso de privacidad</a>
        </div>
</footer>

