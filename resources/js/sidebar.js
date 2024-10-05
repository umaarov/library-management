document.getElementById('menu-search').addEventListener('input', function() {
    const searchQuery = this.value.trim().toLowerCase();
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(item => {
        const title = item.querySelector('.menu-title').textContent.toLowerCase().trim();
    if (title.includes(searchQuery)) {
        item.style.display = 'block';
    } else {
        item.style.display = 'none';
    }
});
});
function toggleSidebar() {
    const sidebar = document.querySelector('.main-sidebar');
    const body = document.querySelector('body');

    sidebar.classList.toggle('sidebar-collapsed');
    body.classList.toggle('sidebar-collapsed');
}
