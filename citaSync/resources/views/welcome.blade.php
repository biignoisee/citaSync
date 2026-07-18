<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CitaSync</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>

<body class="min-h-screen bg-gray-50 text-gray-900">
    <div class="flex min-h-screen flex-col">

        <header class="border-b bg-white">
            @if (Route::has('login'))
                <livewire:welcome.navigation />
            @endif
        </header>

        <main class="flex flex-1 items-center justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-bold">
                    CitaSync
                </h2>

                <p class="mt-4 text-gray-500">
                    Sistema de gestión de citas médicas.
                </p>
            </div>
        </main>
    </div>

    @livewireScripts
    @fluxScripts
</body>

</html>
