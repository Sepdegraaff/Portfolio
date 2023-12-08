
document.addEventListener("DOMContentLoaded", () => {
    const detector = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting)
            {
                entry.target.classList.add('show-animation');
            }
            else
            {
                entry.target.classList.remove('show-animation');
            }
        });
    });

    const animationObjects = document.querySelectorAll('.hidden-animation');
    animationObjects.forEach((el) => detector.observe(el));
});



