<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @fluxAppearance
</head>

<body class="min-h-screen bg-zinc-50">

    <main class="flex min-h-screen items-center justify-center p-6">
        {{ $slot }}
    </main>

    @livewireScripts
    @fluxScripts

</body>

</html>
