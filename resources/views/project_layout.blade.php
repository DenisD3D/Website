<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>DenisD3D</title>
    @include('include.head')
    <link rel="stylesheet" href="{{ asset('css/project_template.css') }}">
</head>
<body>
@include('include.navbar')
    <div class="project-page">
        @yield('description')
    </div>
@include('include.footer')
</body>
</html>
