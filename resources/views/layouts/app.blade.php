<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    {{-- Viewport --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Page Title --}}
    <title>{{ config('app.name', 'Laravel') }} - {{ $title ?? 'Page Title' }}</title>

    {{-- SEO Meta Tags --}}
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="min-h-screen bg-gradient-to-b from-primary/8 to-base-200 lg:px-2 px-1 overflow-hidden">

    {{-- App Preloader Partial --}}
    @livewire('partials.preloader')

    {{-- App Header Partial --}}
    @livewire('partials.header')

    <main class="flex gap-2">

        {{-- App Sidebar Partial --}}
        @livewire('partials.sidebar')

        {{-- App Mobile-Nav Partial --}}
        @livewire('partials.mobile-nav')

        <div data-page-section class="page-section scrollable">
            {{-- Dynamic Page Content --}}
            <div class="flex-1">
                {{ $slot }}
            </div>

            {{-- App Footer Partial --}}
            @livewire('partials.footer')
        </div>

    </main>

    {{-- App Dock Partial --}}
    @livewire('partials.dock')

</body>

</html>