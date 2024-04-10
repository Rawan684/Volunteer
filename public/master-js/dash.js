
function setActiveNavLink() {
    const currentUrl = window.location.href;
    const navLinks = document.querySelectorAll(".links ul li a");
    navLinks.forEach((link) => {
        if (link.href === currentUrl) {
            link.classList.add("active");
        } else {
            link.classList.remove("active");
        }
    });
}

window.onload = setActiveNavLink;