document.addEventListener("DOMContentLoaded", function () {
    const projects = document.querySelectorAll(".project");

    function showProjectsOnScroll() {
        const triggerBottom = window.innerHeight * 0.85; 

        projects.forEach((project) => {
            const projectTop = project.getBoundingClientRect().top;

            if (projectTop < triggerBottom) {
                project.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", showProjectsOnScroll);
    showProjectsOnScroll();
});
