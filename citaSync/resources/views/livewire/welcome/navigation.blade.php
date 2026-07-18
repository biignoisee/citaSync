<nav class="mx-auto flex h-16 items-center justify-between px-6">

    <a href="{{ url('/') }}" class="flex items-center gap-3">
        <img src="{{ asset('images/logo.png') }}" alt="CitaSync Logo" class="h-10 w-10">

        <span class="text-xl font-bold tracking-tight">
            CitaSync
        </span>
    </a>

    <div class="flex items-center gap-2">
        @auth
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black transition hover:text-gray-600">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black transition hover:text-gray-600">
                Iniciar sesión
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black transition hover:text-gray-600">
                    Registrarse
                </a>
            @endif
        @endauth
    </div>

</nav>
