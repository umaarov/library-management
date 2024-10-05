@vite(['resources/css/sidebar.css'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <span class="brand-text font-weight-light">Library Admin</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="fas fa-tachometer-alt icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('books.index') }}" class="nav-link">
                        <i class="fas fa-book icon"></i>
                        <p>Books</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('groups.index') }}" class="nav-link">
                        <i class="fas fa-users icon"></i>
                        <p>Groups</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                        <i class="fas fa-user icon"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                        <i class="fas fa-list icon"></i>
                        <p>Categories</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('loans.index') }}" class="nav-link">
                        <i class="fas fa-handshake icon"></i>
                        <p>Loans</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

