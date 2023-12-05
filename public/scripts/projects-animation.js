const projectHolders = document.querySelectorAll('.project-holder');

projectHolders.forEach((holder) => {
    const project = holder.querySelector('.project');

    holder.addEventListener('mouseenter', () => {
        project.classList.remove('w-0', 'opacity-0');
        project.classList.add('w-full', 'opacity-95');
    });

    holder.addEventListener('mouseleave', () => {
        project.classList.remove('w-full', 'opacity-95');
        project.classList.add('w-0', 'opacity-0');
    });
});