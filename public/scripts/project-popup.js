document.addEventListener("DOMContentLoaded", () => {
    const projectPopUp = document.getElementById("project-popup");
    const popUpOpeners = document.querySelectorAll('.pop-up-opener');
    const popUpCloser = document.getElementById("closePopup");

    popUpCloser?.addEventListener("click", () => {
        projectPopUp.classList.remove("translate-x-0");
        projectPopUp.classList.add("translate-x-[-100%]");
    });

    popUpOpeners.forEach((el) => el.addEventListener("click", () => {
        projectPopUp.classList.remove("translate-x-[-100%]");
        projectPopUp.classList.add("translate-x-0");

        const projectId = el.getAttribute('data-project-id');
        loadData(projectId);
    }));

});

const loadData = (projectId) => {
    const project = document.getElementById("project");

    if (project) {
        fetch("resources/views/popups/project?projectId=" + projectId)
            .then(response => {
                if (response.ok) {
                    return response.text();
                }
                throw new Error("Failed to respond to server");
            })
            .then(projectHTML => {
                project.innerHTML = projectHTML;
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    } else {
        console.error('Element with ID "project" not found.');
    }
};
