@vite(['resources/css/navbar.css'])
<nav class="navbar navbar-expand navbar-light bg-white">
    <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
    </ul>
</nav>
