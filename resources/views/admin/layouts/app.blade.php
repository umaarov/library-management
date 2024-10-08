<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Vite - Load CSS from resources/template -->
    @vite([
        'resources/template/plugins/fontawesome-free/css/all.min.css',
        'resources/template/dist/css/adminlte.min.css',
    ])
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    @include('admin.layouts.header')

            <!-- Main Sidebar Container -->
    @include('admin.layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
    @include('admin.layouts.content')

            <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>

    <!-- Main Footer -->
    @include('admin.layouts.footer')
</div>

<!-- Vite - Load JS from resources/template -->
@vite([
    'resources/template/plugins/jquery/jquery.min.js',
    'resources/template/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/template/dist/js/adminlte.min.js',
])
</body>
</html>
