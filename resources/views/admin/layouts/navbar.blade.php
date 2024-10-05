@vite(['resources/css/navbar.css'])

<nav class="main-navbar navbar-expand bg-white">
    <div class="navbar-left">
        <button class="sidebar-toggle" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </button>
    </div>


    <div class="navbar-right">
        <div class="user-info">
            <span class="username">Admin Name</span>
            <a href="#" class="nav-link logout-link">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>
</nav>
