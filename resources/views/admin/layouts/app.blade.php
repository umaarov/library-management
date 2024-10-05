<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">Library Admin</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="{{ route('books.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Books</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('loans.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-book-reader"></i>
                            <p>Loans</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <footer class="main-footer">
        <strong>Library Management Admin Panel</strong>
    </footer>
</div>

<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/adminlte.min.js') }}"></script>
</body>
</html>
