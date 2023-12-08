

document.addEventListener("DOMContentLoaded", () => {
    const projectHolders = document.querySelectorAll('.project-holder');

    projectHolders.forEach((holder) => {
        const project = holder.querySelector('.project');

        holder.addEventListener('mouseenter', () => {
            project.classList.remove('w-0');
            project.classList.add('w-full');

            project.classList.remove('opacity-0');
            project.classList.add('opacity-100');

            project.classList.add('bg-[#075985]/80')
        });

        holder.addEventListener('mouseleave', () => {
            project.classList.remove('w-full');
            project.classList.add('w-0');

            project.classList.remove('opacity-100');
            project.classList.add('opacity-0');

            project.classList.remove('bg-[#075985]/80')
        });
    });
});
