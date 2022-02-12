<x-app-layout>
    @if (session('status'))
        <div class="bg-rose-900 text-center py-4 lg:px-4" x-data="{open:true}" x-show="open">
            <div class="p-2 bg-rose-800 items-center text-rose-100 leading-none lg:rounded-full flex lg:inline-flex"
                role="alert">
                <span class="flex rounded-full bg-rose-500 uppercase px-2 py-1 text-xs font-bold mr-3">Atención!</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{ session('status') }}</span>
                <svg @click="open = false" class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                </svg>
            </div>
        </div>
    @endif

    <header class="w-full relative h-auto overflow-hidden">
        @livewire('navigation-menu')
        <div class="max-w-5xl mx-auto relative z-20 select-none">
            <div class="py-52 ">
                <h1 class="uppercase ml-5 lg:ml-0 lg:mr-40 mb-6 text-5xl lg:text-6xl font-redHat text-white">Alcanza tus
                    objetivos en la cocina.</h1>
                <p class="text-white text-2xl ml-5 lg:ml-0 lg:mr-40 mb-6">Rápido y efectivo</p>
                <a href="{{ route('plans') }}"
                    class="ml-5 lg:ml-0 px-6 py-2 rounded uppercase text-sm text-white bg-lime-600 leading-5">Empezar</a>
            </div>
        </div>
        <div>
            <video class="absolute top-0 left-0 w-full h-full object-cover" muted autoplay loop>
                <source src="{{ asset('resources/video.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute top-0 left-0 bg-black h-full w-full z-10 opacity-50 "></div>
        </div>
    </header>

    <section class="bg-red-600 text-center">
        <div class="text-white py-10">
            <h1 id="letra" class="text-lg lg:text-2xl transition-all duration-1000 ease-in-out opacity-0">"SIEMPRE
                PARECE IMPOSIBLE HASTA QUE SE HACE"</h1>
        </div>
    </section>


    <section id="acerca" class="">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <img class="w-full object-cover" src="{{ asset('resources/banner.jpg') }}" alt="">
            </div>
            <div class="bg-black">
                <div class="ml-20 mr-10 lg:mr-52 mt-24 lg:mt-40">
                    <h1 id="letra"
                        class="text-4xl uppercase text-white font-redHat transition-all delay-150 duration-1000 ease-in-out opacity-0">
                        Kits de comida ajustados
                        perfectamente a tus requerimientos</h1>
                    <p id="letra" class="text-white my-12 transition-all delay-150 duration-1000 ease-in-out opacity-0">
                        Déjanos la chamba difícil, aprende a cocinar y a comer
                        balanceado tal y como tu cuerpo lo
                        necesita. Recibe tus compras y las recetas ajustadas a tus requerimientos. Olvídate de
                        preocuparte por la dieta y disfruta de la parte divertida.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="funciona" class="w-full relative h-auto overflow-hidden">
        <div class="max-w-5xl mx-auto relative py-24 z-50">
            <h1 class="text-center font-redHat text-4xl py-14 text-white">EL PROCESO</h1>
            <p class="text-white text-lg text-center py-10">Nuestra inteligencia escogerá un plan perfecto para tí en
                base a tus preferencias</p>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 py-14 select-none">
                <div class="text-center">
                    <label class="text-rose-800 font-redHat font-black text-9xl" for="">1</label>
                    <p class="text-white font-redHat text-xl uppercase lg:-mt-24">Ingresa tus medidas corporales</p>
                </div>
                <div class="text-center">
                    <label class="text-rose-800 font-redHat font-black text-9xl" for="">2</label>
                    <p class="text-white font-redHat text-xl uppercase lg:-mt-20">Escoge tus preferencias</p>
                </div>
                <div class="text-center">
                    <label class="text-rose-800 font-redHat font-black text-9xl" for="">3</label>
                    <p class="text-white font-redHat text-xl uppercase lg:-mt-20">Recibe tus compras</p>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:py-14 lg:mt-10 select-none">
                <div class="text-center">
                    <label class="text-rose-800 font-redHat font-black text-9xl" for="">4</label>
                    <p class="text-white font-redHat text-xl uppercase lg:-mt-20">¡Cocina!</p>
                </div>
                <div class="text-center">
                    <label class="text-rose-800 font-redHat font-black text-9xl" for="">5</label>
                    <p class="text-white font-redHat text-xl uppercase lg:-mt-20">Ejercítate</p>
                </div>
            </div>
            <div class="py-14 text-center">
                <a href="{{ route('plans') }}"
                    class="px-3 py-5 rounded text-white bg-rose-800 hover:bg-rose-900 hover:font-bold transition">Inicia
                    tu experiencia</a>
            </div>
        </div>
        <div>
            <img src="{{ asset('resources/banner2.jpg') }}"
                class="absolute top-0 left-0 w-full h-full object-cover" />
            <div class="absolute top-0 left-0 bg-black h-full w-full z-10 opacity-50 "></div>
        </div>

    </section>

    <section id="planes" class="md:bg-gradient-to-b md:from-black md:via-slate-800 md:to-black py-8">
        <h1 class="text-center text-white font-extrabold text-4xl py-5">LOS PLANES</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto text-white">
            <div class="bg-slate-900 px-3 py-4 shadow-lg lg:shadow-gray-200/50">
                <h1 class="text-center texte-3xl font-bold pt-3 pb-10">PLANEO PROVINCIA</h1>
                <p class="text-center font-extrabold text-4xl pb-7">S/49.90</p>
                <p class="text-sm text-center">Facturado mensual</p>
                <div class="border-b-4 border-white mx-6 mt-12"></div>
                <ul class="mt-9 text-center space-y-10">
                    <li>Plan de comida semanal ajustado a los macronutrientes del usuario</li>
                    <li>Lista de compras</li>
                    <li>Línea de soporte de dudas</li>
                    <li>-</li>
                    <li>-</li>
                    <li>-</li>
                </ul>
            </div>
            <div class="bg-slate-900 px-3 py-4 shadow-lg lg:shadow-gray-200/50">
                <h1 class="text-center texte-3xl font-bold pt-3 pb-10">PLANEO BASIC LIMA</h1>
                <p class="text-center font-extrabold text-4xl pb-7">S/89.90</p>
                <p class="text-sm text-center">Facturado mensual</p>
                <div class="border-b-4 border-white mx-6 mt-12"></div>
                <ul class="mt-9 text-center space-y-10">
                    <li>Plan de comida semanal ajustado a los macronutrientes del usuario</li>
                    <li>Lista de compras</li>
                    <li>Línea de soporte de dudas</li>
                    <li>Descuentos exclusivos en compras</li>
                    <li>Tarifa de servicio por compras</li>
                    <li>-</li>
                </ul>
            </div>
            <div class="bg-slate-900 px-3 py-4 shadow-lg lg:shadow-gray-200/50">
                <h1 class="text-center texte-3xl font-bold pt-3 pb-10">PLANEO PRO LIMA</h1>
                <p class="text-center font-extrabold text-4xl pb-7">S/109.90</p>
                <p class="text-sm text-center">Facturado mensual</p>
                <div class="border-b-4 border-white mx-6 mt-12"></div>
                <ul class="mt-9 text-center space-y-10">
                    <li>Plan de comida semanal ajustado a los macronutrientes del usuario</li>
                    <li>Lista de compras</li>
                    <li>Línea de soporte de dudas</li>
                    <li>Descuentos exclusivos en compras</li>
                    <li>Tarifa de servicio por compras</li>
                    <li>Envíos gratis</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="contacto" class="bg-black text-white">
        <div class="max-w-3xl mx-auto ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 py-20">
                <div class="ml-5">
                    <h1 class="uppercase text-3xl font-redHat mb-3">Planeo</h1>
                    <h2 class="uppercase text-xl font-bold">FITNESS FOODTECH</h2>
                    <p class="my-8 text-sm">Lima, Perú</p>
                    <p class="text-sm">+51 983 827 213</p>
                    <p class="text-sm">planeoperu@gmail.com</p>
                    <div class="flex items-center space-x-6 my-8">
                        <i class="text-4xl fab fa-whatsapp"></i>
                        <i class="text-3xl fab fa-facebook-f"></i>
                        <i class="text-4xl fab fa-instagram"></i>
                        <i class="text-4xl fab fa-youtube"></i>
                    </div>
                </div>
                <div class="ml-5 mr-8">
                    <h1 class="uppercase text-3xl font-redHat">Contáctanos</h1>
                    <form action="{{route('forms.contact')}}" method="post" class="mt-10">
                        @csrf
                        <div class="mb-2">
                            <label for="name">Nombre *</label>
                            <input type="text" name="name"
                                class="block py-1 w-full bg-black border-2 border-white focus:outline-none focus:border-red-600 focus:ring-red-500">
                        </div>
                        <div class="mb-2">
                            <label for="lastname">Apellidos *</label>
                            <input type="text" name="lastname"
                                class="block py-1 w-full bg-black border-2 border-white focus:outline-none focus:border-red-600 focus:ring-red-500">
                        </div>
                        <div class="mb-2">
                            <label for="email">Email *</label>
                            <input type="text" name="email"
                                class="block py-1 w-full bg-black border-2 border-white focus:outline-none focus:border-red-600 focus:ring-red-500">
                        </div>
                        <div class="mb-2">
                            <label for="phone">Celular *</label>
                            <input type="text" name="phone"
                                class="block py-1 w-full bg-black border-2 border-white focus:outline-none focus:border-red-600 focus:ring-red-500">
                        </div>
                        <div class="mb-2">
                            <label for="description">Mensaje *</label>
                            <textarea name="description"
                                class="block py-1 w-full bg-black border-2 border-white focus:outline-none focus:border-red-600 focus:ring-red-500"></textarea>
                        </div>
                        <div class="mb-2 flex justify-end">
                            <button class="rounded block bg-rose-700 hover:bg-rose-800 px-4 py-2"
                                type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        let letra = document.querySelectorAll("#letra");

        function mostrarScroll() {
            let scrollTop = document.documentElement.scrollTop;
            for (var i = 0; i < letra.length; i++) {
                let alt = letra[i].offsetTop;
                if (alt - 750 < scrollTop) {
                    letra[i].style.opacity = 1;
                }
            }
        }

        window.addEventListener('scroll', mostrarScroll);
    </script>
</x-app-layout>
