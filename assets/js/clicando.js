document.addEventListener("DOMContentLoaded", function () {
    const sidebarLinks = document.querySelectorAll(".profile-sidebar a");
    const pages = document.querySelectorAll(".page");

    sidebarLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const targetPageId = link.getAttribute("href").substring(1);

            pages.forEach((page) => {
                if (page.id === targetPageId) {
                    page.classList.add("active");
                } else {
                    page.classList.remove("active");
                }
            });

            // Remova a classe 'active-link' de todos os links do sidebar
            sidebarLinks.forEach((sidebarLink) => {
                sidebarLink.classList.remove("active-link");
            });

            // Adicione a classe 'active-link' ao link clicado
            link.classList.add("active-link");
        });
    });
});



