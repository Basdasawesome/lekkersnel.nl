document.addEventListener('DOMContentLoaded', function() {
    // Your code here
    
    document.getElementById('menu-toggle').addEventListener('click', function () {
        let menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
    
    document.getElementById('profile-btn').addEventListener('click', function (event) {
        event.stopPropagation();
        let dropdown = document.getElementById('profile-dropdown');
        dropdown.classList.toggle('hidden');
    });
    
    document.addEventListener('click', function (event) {
        let dropdown = document.getElementById('profile-dropdown');
        if (!dropdown.classList.contains('hidden') && !event.target.closest('#profile-btn')) {
            dropdown.classList.add('hidden');
        }
    });
});