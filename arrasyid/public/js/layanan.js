document.addEventListener("DOMContentLoaded", function() {
    const currentPath = window.location.pathname;
    const buttons = document.querySelectorAll(".btn-success");

    buttons.forEach(button => {
        if (button.getAttribute("href") === currentPath) {
            button.classList.add("active");
        }
    });
});
