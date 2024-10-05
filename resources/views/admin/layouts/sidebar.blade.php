@vite(['resources/css/sidebar.css', 'resources/js/sidebar.js'])
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="brand-section">
        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <img src="{{ asset('imgs/library.png') }}" alt="Brand Logo" class="brand-logo">
        </a>
    </div>


    <div class="search-box">
        <input id="menu-search" type="text" placeholder="Search..." />
        <button type="submit">
            <i class="fa fa-search"></i>
        </button>
    </div>


    <div class="sidebar-menu">
        <div class="menu-item">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="fas fa-tachometer-alt icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </div>
        <div class="menu-item">
            <a href="{{ route('books.index') }}" class="menu-link">
                <i class="fas fa-book icon"></i>
                <span class="menu-title">Books</span>
            </a>
        </div>
        <div class="menu-item">
            <a href="{{ route('groups.index') }}" class="menu-link">
                <i class="fas fa-users icon"></i>
                <span class="menu-title">Groups</span>
            </a>
        </div>
        <div class="menu-item">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="fas fa-user icon"></i>
                <span class="menu-title">Users</span>
            </a>
        </div>
        <div class="menu-item">
            <a href="{{ route('categories.index') }}" class="menu-link">
                <i class="fas fa-list icon"></i>
                <span class="menu-title">Categories</span>
            </a>
        </div>
        <div class="menu-item">
            <a href="{{ route('loans.index') }}" class="menu-link">
                <i class="fas fa-handshake icon"></i>
                <span class="menu-title">Loans</span>
            </a>
        </div>
    </div>
</aside>
