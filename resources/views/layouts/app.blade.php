<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    >

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Show content if JavaScript is disabled -->
    @include('layouts.partials.noscript')
</head>

<body
    class="font-sans antialiased"
    x-data=""
    x-cloak=""
>
    <div class="flex min-h-screen flex-col bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
        <!-- Page Header -->
        @include('layouts.partials.header')

        <!-- Page Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Page Footer -->
        @include('layouts.partials.footer')
    </div>
</body>

</html>
