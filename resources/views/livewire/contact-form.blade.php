
    <div>
        <div class="wrapper py-12 lg:py-20">
            <div class="max-w-3xl mx-auto">
                @if (session()->has('error'))
                    <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-800 rounded">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium">{{ session('error') }}</span>
                        </div>
                    </div>
                @endif
                <!-- Encabezado -->
                <div class="text-center mb-6">
                    
                    <h2 class="text-lg text-gray-600">
                        Estamos aquí para ayudarte. Completa el formulario y te responderemos pronto.
                    </h2>
                </div>

                <!-- Formulario -->
                <div class="bg-white rounded-lg shadow-xl p-6 lg:p-10 border-t-4 border-black">

                    @if ($successMessage)
                        <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 text-green-800 rounded">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-medium">{{ $successMessage }}</span>
                            </div>
                        </div>
                    @endif

                    <form wire:submit="submit" class="space-y-6">

                        <!-- Nombre -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Nombre completo <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" wire:model="name"
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-azul focus:border-azul transition-all duration-300"
                                placeholder="Ingresa tu nombre completo">
                            @error('name')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Email y Teléfono en dos columnas -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Correo electrónico <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" wire:model="email"
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-azul focus:border-azul transition-all duration-300"
                                    placeholder="tu@email.com">
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            <!-- Teléfono -->
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Teléfono <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="phone" wire:model="phone"
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-azul focus:border-azul transition-all duration-300"
                                    placeholder="+52 123 456 7890">
                                @error('phone')
                                    <p class="mt-2 text-sm text-red-600 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <!-- Comentarios -->
                        <div>
                            <label for="comments" class="block text-sm font-semibold text-gray-700 mb-2">
                                Mensaje <span class="text-red-500">*</span>
                            </label>
                            <textarea id="comments" wire:model="comments" rows="6"
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-azul focus:border-azul transition-all duration-300 resize-none"
                                placeholder="Escribe tu mensaje aquí..."></textarea>
                            @error('comments')
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <!-- Botón Submit -->
                        <div class="pt-0">
                            <button type="submit"
                                class="-btn-negro w-full py-4 rounded-lg transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Información adicional -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-4">

                    <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-phone text-base30"></i>   
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Teléfono</h3>
                        <p class="text-gray-600">Llámanos al</p>
                        <p class="text-azul font-semibold">(442) 491 1549</p>
                    </div>

                    <div
                        class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-regular fa-envelope text-base30"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Email</h3>
                        <p class="text-gray-600">Escríbenos a</p>
                        <p
                            class="text-xs text-azul font-semibold hover:text-orange-500 transition-colors duration-300 hover:underline break-words block">
                            {{ env('MAIL_CONTACT_ADDRESS', 'info@protektium.com') }}</p>

                        <div class="pt-4 text-center">
                            <p class="text-sm text-gray-600 mb-2">¿Prefieres usar Gmail?</p>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@protektium.com&su=Consulta desde el sitio web&body=Hola, me gustaría obtener más información sobre..."
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center text-azul hover:text-orange-500 font-semibold transition-colors duration-300">
                                
                                <i class="fa-regular fa-envelope text-azul pr-2"></i>
                                Abrir Gmail
                            </a>
                        </div>
                    </div>

                    <div
                        class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="w-12 h-12 bg-black rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-regular fa-clock text-base30"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Horario</h3>
                        <p class="text-gray-600">Lun - Vie</p>
                        <p class="text-azul font-semibold">9:00 AM - 6:00 PM</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
