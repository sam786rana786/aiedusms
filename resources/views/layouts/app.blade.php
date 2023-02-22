<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} {{ isset($title) ? '- ' . $title : '' }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    @include('layouts.partials.head')
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.partials.header')
        @include('layouts.partials.nav')

        <div class="page-wrapper">
            <div class="content container-fluid">
                {{ $slot }}
            </div>
            @include('layouts.partials.footer')
        </div>
    </div>
    @include('layouts.partials.footer-scripts')
    @if (isset($script))
        {{ $script }}
    @endif
</body>

</html>
