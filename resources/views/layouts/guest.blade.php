<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{ config('app.name', 'AIEDU') }}{{ isset($title) ? '-' . $title : '' }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.png') }}">
    @include('layouts.partials.head')
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper login-body">
        {{ $slot }}
    </div>
    <!-- /Main Wrapper -->

    @include('layouts.partials.footer-scripts')
</body>

</html>
