<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> <!-- AdminLTE CSS -->
    <!-- Bootstrap or any other dependencies (can include AdminLTE) -->
</head>
<body>
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.layouts.navbar')

            <!-- Sidebar -->
    @include('admin.layouts.sidebar')

            <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('admin.layouts.footer')
</div>

<!-- Scripts -->
<script src="{{ asset('js/admin.js') }}"></script> <!-- AdminLTE JS -->
</body>
</html>
