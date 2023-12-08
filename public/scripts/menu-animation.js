
document.addEventListener("DOMContentLoaded", () => {
    const MenuDetector = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting)
            {
                entry.target.classList.add('show-animation');
            }
        });
    });

    const menu = document.querySelectorAll('.menu');

    menu.forEach((el) => MenuDetector.observe(el));

    const menuOpen = document.getElementById("menuOpen");
    const menuLinks = document.querySelectorAll('.menuLink');
    const menuId = document.getElementById("menu");

    function toggleMenu() {
        menuOpen.classList.toggle("flex");
        menuOpen.classList.toggle("hidden");

        menuId.classList.toggle("hidden");
        menuId.classList.toggle("flex");
    }

    menuOpen.addEventListener("click", toggleMenu);

    menuLinks.forEach((el) => {
        el.addEventListener("click", toggleMenu);
    });
});
