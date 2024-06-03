document.addEventListener("DOMContentLoaded", function () {
    var divisionMenu = document.querySelector(".division-menu");
    var dropdownContent = divisionMenu.querySelector(".dropdown-content");
    var icon = divisionMenu.querySelector("i");

    divisionMenu.addEventListener("click", function (event) {
        event.stopPropagation();
        if (dropdownContent.style.display === "flex") {
            dropdownContent.style.display = "none";
            icon.classList.remove("bi-caret-down");
            icon.classList.add("bi-caret-right");
        } else {
            dropdownContent.style.display = "flex";
            icon.classList.remove("bi-caret-right");
            icon.classList.add("bi-caret-down");
        }
    });

    // Close the dropdown if the user clicks outside of it
    document.addEventListener("click", function (event) {
        if (!divisionMenu.contains(event.target)) {
            dropdownContent.style.display = "none";
            icon.classList.remove("bi-caret-down");
            icon.classList.add("bi-caret-right");
        }
    });
});

document.addEventListener("scroll", () => {
    const header = document.querySelector(".navbar");
    if (window.scrollY > 0) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
