document.addEventListener("DOMContentLoaded", function () {
    // Agregar efecto de hover a los botones
    let buttons = document.querySelectorAll(".btn");

    buttons.forEach(button => {
        button.addEventListener("mouseover", function () {
            this.style.transform = "scale(1.05)";
        });

        button.addEventListener("mouseout", function () {
            this.style.transform = "scale(1)";
        });
    });

    // Agregar scroll suave a los enlaces
    let links = document.querySelectorAll("a");

    links.forEach(link => {
        link.addEventListener("click", function (event) {
            if (this.getAttribute("href").startsWith("#")) {
                event.preventDefault();
                let target = document.querySelector(this.getAttribute("href"));
                target.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});
