<nav x-data="{ open: false }" class="bg-transparent sticky top-0 z-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('home') }}">
                    <img class="w-60 h-12 object-contain" src="{{ asset('resources/Logo-blanco.png') }}" alt="">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-white">
                <a href="#acerca" class="text-sm lg:text-base">Acerca de</a>
                <a href="#funciona" class="text-sm lg:text-base">¿Cómo funciona?</a>
                <a href="#planes" class="text-sm lg:text-base">Planes y precios</a>
                <a href="#contacto" class="text-sm lg:text-base">Contacto</a>
                <a href="{{route('login')}}"><i class="fas fa-user"></i></a>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white opacity-80">
        <div class="pt-2 pb-3 space-y-5 font-bold">
            <a href="#acerca" class="block text-sm ml-3">Acerca de</a>
            <a href="#funciona" class="block text-sm ml-3">¿Cómo funciona?</a>
            <a href="#planes" class="block text-sm ml-3">Planes y precios</a>
            <a href="#contacto" class="block text-sm ml-3">Contacto</a>
            <div class="border-t-2 border-black mt-3 py-1">
                <a href="{{route('login')}}" class="ml-3 text-red-500 hover:text-red-600">Iniciar Session</a>
            </div>
        </div>
    </div>
</nav>
