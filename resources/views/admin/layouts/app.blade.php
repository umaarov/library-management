<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    @vite([
        'resources/template/plugins/fontawesome-free/css/all.min.css',
        'resources/template/dist/css/adminlte.min.css',
    ])
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    @include('admin.layouts.content')

    <aside class="control-sidebar control-sidebar-dark">
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>

    @include('admin.layouts.footer')
</div>

@vite([
    'resources/template/plugins/jquery/jquery.min.js',
    'resources/template/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'resources/template/dist/js/adminlte.min.js',
])
</body>
</html>
