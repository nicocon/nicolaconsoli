document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');

    if (!menuToggle || !mainNav) {
        return;
    }

    menuToggle.addEventListener('click', function () {
        menuToggle.classList.toggle('active');
        mainNav.classList.toggle('open');
        document.body.classList.toggle('menu-open');
    });

    const navLinks = mainNav.querySelectorAll('a');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            menuToggle.classList.remove('active');
            mainNav.classList.remove('open');
            document.body.classList.remove('menu-open');
        });
    });
});