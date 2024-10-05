<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Panel</title>
</head>
<body>
<div class="wrapper">
    @include('admin.layouts.navbar')

    @include('admin.layouts.sidebar')

    <div class="content-wrapper">
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    @include('admin.layouts.footer')
</div>

</body>
</html>
