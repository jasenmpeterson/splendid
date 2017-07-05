// theme javascript :

// Hamburger Menu :

const mobileMenuButton = document.querySelector('.Hamburger');
const mobileMenu = document.querySelector('.Navigation.Mobile');
const closeText = document.querySelector('.Navigation.Mobile .close');

mobileMenuButton.addEventListener('click', function () {
  mobileMenu.classList.toggle('MobileOpen')
}, false)

closeText.addEventListener('click', function () {
  mobileMenu.classList.toggle('MobileOpen')
}, false)
