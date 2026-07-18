<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CitaSync</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<!-- Añadimos overflow-hidden para eliminar scroll no deseado -->

<body class="h-full overflow-hidden bg-gray-50 text-gray-900 antialiased">
    <div class="flex h-screen flex-col">

        <header class="flex shrink-0 items-center justify-between border-b border-gray-200 bg-white px-6 py-4">
            <h1 class="text-xl font-bold tracking-tight text-blue-600">
                CitaSyncsdds
            </h1>

            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                    <livewire:welcome.navigation />
                </nav>
            @endif
        </header>

        <main class="flex flex-1 items-center justify-center p-6">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-5xl font-extrabold tracking-tight text-gray-900 sm:text-6xl">
                    CitaSync
                </h2>
                <p class="mt-6 text-lg text-gray-600">
                    Gestión eficiente de citas médicas. Moderno, rápido y centralizado.
                </p>
                <div class="mt-10">
                    <a href="#"
                        class="rounded-lg bg-blue-600 px-8 py-3 font-semibold text-white transition hover:bg-blue-700">
                        Empezar ahora
                    </a>
                </div>
            </div>
        </main>

    </div>

</body>

</html>
