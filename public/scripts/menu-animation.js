
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
});
