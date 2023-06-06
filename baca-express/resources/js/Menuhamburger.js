const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

const service = document.querySelector("li.menu-service");
const menuservice = document.querySelector(".service-menu");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

service.addEventListener("click", () => {
    menuservice.classList.toggle("hidden");
});