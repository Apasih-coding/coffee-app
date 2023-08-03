// select komponen button
const navbarNav = document.querySelector(".navbar-nav");
const hamburger = document.querySelector("#hamburger-menu");
const searchBar = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");
const searchBtn = document.querySelector("#search-btn");
const cartBtn = document.querySelector("#shopping-cart");
const cartBar = document.querySelector(".shopping-cart");
const modalDetailBtn = document.querySelectorAll(".btn-detail");
const modalItems = document.querySelector("#items-detail-product");
const modalClose = document.querySelector(".modal-close");

// Add class active navbar
document.querySelector("#hamburger-menu").onclick = (e) => {
    navbarNav.classList.toggle("active");
    e.preventDefault();
};
// Add class active search bar
document.querySelector("#search-btn").onclick = (e) => {
    searchBar.classList.toggle("active");
    searchBox.focus();
    e.preventDefault();
};
// Add class active shopping-cart
document.querySelector("#shopping-cart").onclick = (e) => {
    cartBar.classList.toggle("active");
    e.preventDefault();
};

// klik diluar tutup bar
document.addEventListener("click", function (e) {
    // For menu bar
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("active");
    }
    // For search bar
    if (!searchBtn.contains(e.target) && !searchBar.contains(e.target)) {
        searchBar.classList.remove("active");
    }
    // For cart bar
    if (!cartBar.contains(e.target) && !cartBtn.contains(e.target)) {
        cartBar.classList.remove("active");
    }
});

// Modal detail
modalDetailBtn.forEach((btn) => {
    btn.onclick = (e) => {
        modalItems.style.display = "flex";
        e.preventDefault();
    };
});
// Modal close
modalClose.onclick = (e) => {
    modalItems.style.display = "none";
    e.preventDefault();
};

window.onclick = (e) => {
    if (e.target === modalItems) {
        modalItems.style.display = "none";
    }
};
