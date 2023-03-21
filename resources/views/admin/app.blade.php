<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @vite(['resources/css/app.css', 'resources/backend/css/main.css', 'resources/backend/css/font-awesome/4.7.0/css/font-awesome.min.css', 'resources/js/app.js', 'resources/backend/js/jquery-3.2.1.min.js', 'resources/backend/js/popper.min.js', 'resources/backend/js/bootstrap.min.js', 'resources/backend/js/main.js', 'resources/backend/js/plugins/pace.min.js'])
</head>
<body class="app sidebar-mini rtl">
    @include('admin.partials.header')
    @include('admin.partials.sidebar')
    <main class="app-content">
        @yield('content')
    </main>
</body>
</html>