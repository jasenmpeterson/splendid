// theme javascript :

// Hamburger Menu :

const mobileMenuButton = document.querySelector('.Hamburger');

if (typeof (mobileMenuButton) != 'undefined' && mobileMenuButton != null) {

  const mobileMenu = document.querySelector('.Navigation.Mobile');
  const closeText = document.querySelector('.Navigation.Mobile .close');

  mobileMenuButton.addEventListener('click', function () {
    mobileMenu.classList.toggle('MobileOpen')
  }, false)

  closeText.addEventListener('click', function () {
    mobileMenu.classList.toggle('MobileOpen')
  }, false)

}

require(['pagePortalTween'], function () {
  console.log('wtf')
});
