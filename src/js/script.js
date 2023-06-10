menuBar = document.getElementById("menu-bar");
menuNav = document.getElementById("menu-nav");

// klik hamburger menu
menuBar.addEventListener("click", function () {
  menuNav.classList.toggle("menu-active");
});

// Mengambil semua tautan di dalam menu
var menuLinks = menuNav.getElementsByTagName("a");

// Menambahkan event listener untuk setiap tautan di dalam menu
for (var i = 0; i < menuLinks.length; i++) {
  menuLinks[i].addEventListener("click", function () {
    menuNav.classList.remove("menu-active");
  });
}
