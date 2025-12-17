        <header class="container">
            <nav class="">
                <div class="flex flex-wrap items-center justify-between">

                    <a href="/" class="flex justify-center items-center p-4">
                        <img src='{{ asset('images/romcypets.webp') }}' width="300" height="auto" alt="romcy pets">
                    </a>

                    <button data-collapse-toggle="mobile-menu" type="button"
                        class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Menú principal</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <div class="hidden md:block w-full md:w-auto" id="mobile-menu">

                        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
                            <li>
                                <a href="/quienes-somos" class="-nav-button" aria-current="page">Somos</a>
                            </li>
                            <li>
                                <a href="/servicios" class="-nav-button">Servicios</a>
                            </li>
                            <li>
                                <a href="/contacto" class="-nav-button">Contacto</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>


            <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

            <div>
                <a href="https://wa.me/524424911549?text='hola%20RomcyPets"  target="_blank"
                class="fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition">
                    <!-- WhatsApp Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.52 3.48A11.78 11.78 0 0 0 12.03 0C5.41 0 .06 5.22.06 11.73c0 2.07.54 4.1 1.59 5.9L0 24l6.5-1.7a12.02 12.02 0 0 0 5.53 1.35h.01c6.62 0 12.03-5.22 12.03-11.73 0-3.13-1.23-6.07-3.55-8.37zM12.03 21.3c-1.7 0-3.36-.45-4.82-1.3l-.35-.2-3.86 1.03 1.03-3.74-.23-.38a9.66 9.66 0 0 1-1.48-5.16c0-5.33 4.36-9.67 9.71-9.67 2.6 0 5.03 1 6.87 2.8a9.52 9.52 0 0 1 2.83 6.87c0 5.33-4.36 9.67-9.7 9.67zm5.24-7.25c-.28-.14-1.65-.82-1.91-.91-.26-.1-.45-.14-.64.14-.19.28-.73.91-.9 1.1-.17.19-.33.21-.6.07-.28-.14-1.18-.44-2.25-1.41-.83-.74-1.39-1.64-1.55-1.91-.16-.28-.02-.43.12-.57.12-.12.28-.33.4-.49.14-.16.19-.28.28-.47.09-.19.05-.35-.02-.49-.07-.14-.64-1.54-.88-2.11-.23-.55-.47-.47-.64-.47h-.55c-.19 0-.49.07-.75.35-.26.28-1 1-1 2.42 0 1.42 1.02 2.79 1.16 2.98.14.19 2 3.16 4.85 4.43.68.29 1.21.46 1.63.59.68.22 1.3.19 1.79.12.55-.08 1.65-.67 1.88-1.33.23-.66.23-1.23.16-1.33-.07-.1-.26-.16-.54-.3z"/>
                    </svg>
                </a>

            </div>

        </header>
