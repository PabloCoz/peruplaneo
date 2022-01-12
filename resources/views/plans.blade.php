<x-app-layout>
    <div class="w-full relative h-auto overflow-hidden">
        <div>
            <img src="{{ asset('resources/Fondo.jpg') }}" class="absolute top-0 left-0 w-full h-full object-cover" />
            <div class="absolute top-0 left-0 bg-black h-full w-full z-10 opacity-70 "></div>
        </div>
        @livewire('navigation-menu')
        <section class="max-w-5xl mx-auto py-20 relative z-50">
            <div class="bg-black py-28">
                <h1 class="uppercase text-4xl lg:text-8xl font-redHat text-center text-white mx-5">tus objetivos</h1>
                <p class="text-lg text-white mx-20 mt-10">Primero definamos bien a donde quieres llegar con tu proceso
                    para poder elaborar un plan. No olvides
                    que si tienes alguna enfermedad crónica de fondo debes visitar a un profesional de la salud.</p>
            </div>
        </section>

        <section class="max-w-5xl mx-auto relative z-50">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-white">
                <div class="mx-5 mb-10 col-span-1 order-2 lg:order-1">
                    <img class="rounded object-cover h-72" src="{{ asset('resources/img1.jpg') }}" alt="">
                </div>
                <div class="mx-5 mb-10 col-span-1 order-1 lg:order-2">
                    <h1 class="text-3xl my-8">01 Disminuir grasa corporal</h1>
                    <p class="mb-8 text-xl">Disminuye tus niveles de grasa corporal comiendo rico y saludable, ¡saca a
                        la luz esos músculos
                        que llevas dentro!</p>
                    <a href="#form" class="p-3 bg-lime-600 rounded font-bold">Continuar</a>
                </div>

                <div class="mx-5 mb-10 col-span-1 order-3">
                    <h1 class="text-3xl my-8">02 Aumentar masa muscular</h1>
                    <p class="mb-8 text-xl">La grandiosa fase de volumen que te hará crecer.</p>
                    <a href="#form" class="p-3 bg-lime-600 rounded font-bold">Continuar</a>
                </div>
                <div class="mx-5 mb-10 col-span-1 order-4">
                    <img class="rounded object-cover h-72" src="{{ asset('resources/img3.jpg') }}" alt="">
                </div>

                <div class="mx-5 mb-10 col-span-1 order-6 lg:order-5">
                    <img class="rounded object-cover h-72" src="{{ asset('resources/img2.jpg') }}" alt="">
                </div>
                <div class="mx-5 mb-10 col-span-1 order-5 lg:order-6">
                    <h1 class="text-3xl my-8">03 Alimentación Saludable</h1>
                    <p class="mb-8 text-xl">Si quieres aprender a comer saludable manteniendo tu peso, esta opción es
                        para tí.</p>
                    <a href="#form" class="p-3 bg-lime-600 rounded font-bold">Continuar</a>
                </div>

                <div class="mx-5 mb-10 col-span-1 order-7">
                    <h1 class="text-3xl my-8">04 Consulta con un nutricionista del equipo</h1>
                    <p class="mb-8 text-xl">Esta opción es perfecta para tí si tienes alguna patología o enfermedad
                        crónica de fondo que quieras solucionar con tu alimentación.</p>
                    <a href="#form" class="p-3 bg-lime-600 rounded font-bold">Continuar</a>
                </div>
                <div class="mx-5 mb-10 col-span-1 order-8">
                    <img class="rounded object-cover h-72" src="{{ asset('resources/img4.jpg') }}" alt="">
                </div>
            </div>
        </section>

        <section id="form" class="max-w-5xl mx-auto relative z-50 border-t-2 border-gray-300">
            <div class="text-white mx-5">
                <h1 class="mt-5 font-redHat text-3xl">Estas a un paso de transformar tu vida</h1>
                <p class="text-xl">¡Necesitamos unos cuantos datos más para poder lograrlo!</p>
            </div>
            <div class="mx-1 my-16">
                <form action="{{route('form.plans')}}" method="POST">
                    @csrf
                    <div class="mb-4 block lg:flex justify-between mx-3 lg:space-x-10">
                        <div>
                            <label for="name" class="text-sm font-bold mb-2 text-white">Nombres</label>
                            <input name="name"
                                class="appearance-none border w-full rounded text-gray-700 focus:outline-none focus:border-red-500 focus:ring-red-500"
                                type="text" placeholder="Nombres" required>
                        </div>

                        <div>
                            <label for="lastname" class="text-sm font-bold mb-2 text-white">Apellidos</label>
                            <input name="lastname"
                                class="appearance-none border w-full rounded text-gray-700 focus:outline-none focus:border-red-500 focus:ring-red-500"
                                type="text" placeholder="Apellidos" required>
                        </div>

                        <div>
                            <label for="email" class="text-sm font-bold mb-2 text-white">Correo Electronico</label>
                            <input name="email"
                                class="appearance-none border w-full rounded text-gray-700 focus:outline-none focus:border-red-500 focus:ring-red-500"
                                type="email" placeholder="Email" required>
                        </div>

                    </div>
                    <h1 class="text-white text-3xl font-redHat mx-5">Medidas</h1>
                    <div class="my-4 block lg:flex justify-between mx-3 lg:space-x-10">
                        <div>
                            <label for="weight" class="text-sm font-bold mb-2 text-white">Peso (kg)</label>
                            <input name="weight"
                                class="appearance-none border w-full rounded text-gray-700 focus:outline-none focus:border-red-500 focus:ring-red-500"
                                type="text" placeholder="Peso" required>
                        </div>

                        <div>
                            <label for="height" class="text-sm font-bold mb-2 text-white">Talla (en metros)</label>
                            <input name="height"
                                class="appearance-none border w-full rounded text-gray-700 focus:outline-none focus:border-red-500 focus:ring-red-500"
                                type="text" placeholder="Talla" required>
                        </div>

                        <div>
                            <label for="age" class="text-sm font-bold mb-2 text-white">Edad</label>
                            <input name="age"
                                class="appearance-none border w-full rounded text-gray-700 focus:outline-none focus:border-red-500 focus:ring-red-500"
                                type="text" placeholder="Edad" required>
                        </div>

                    </div>

                    <div class="my-5 text-white space-y-4">
                        <h1 class="mx-3 font-redHat text-xl">Nivel de actividad</h1>
                        <label for="" class="block">
                            <input type="radio" name="type"
                                class="focus:outline-none focus:border-red-600 focus:ring-red-500 appearance-none checked:bg-red-500"
                                value="1">
                            1. Sedentario (Ningún tipo de actividad física)
                        </label>

                        <label for="" class="block">
                            <input type="radio" name="type"
                                class="focus:outline-none focus:border-red-600 focus:ring-red-500 appearance-none checked:bg-red-500"
                                value="2">
                            2. Casi sedentario (1 a 3 días de actividad física)
                        </label>
                        <label for="" class="block">
                            <input type="radio" name="type"
                                class="focus:outline-none focus:border-red-600 focus:ring-red-500 appearance-none checked:bg-red-500"
                                value="3">
                            3. Ligeramente (3 a 5 días de actividad física)
                        </label>
                        <label for="" class="block">
                            <input type="radio" name="type"
                                class="focus:outline-none focus:border-red-600 focus:ring-red-500 appearance-none checked:bg-red-500"
                                value="4">
                            4. Muy activo (5 o más días de actividad física)
                        </label>


                    </div>

                    <div class="flex justify-center my-5">
                        <button type="submit"
                            class="py-3 px-10 bg-rose-600 rounded-full text-white text-center font-bold hover:bg-transparent border-4 border-white">Enviar</button>
                    </div>
                </form>
            </div>

        </section>
    </div>
</x-app-layout>
