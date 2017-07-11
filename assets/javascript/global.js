// theme javascript :

if (typeof jQuery === 'function') {
  define('jquery', function () {
    return jQuery;
  });
}

require.config({
  baseUrl: pageParams.javascriptDirectory,
  paths: {
    TweenMax: 'TweenMax',
    TimelineLite: 'TweenMax',
    TimelineMax: 'TweenMax',
    ScrollMagic: 'ScrollMagic',
    ScrollMagicJQuery: 'jquery.ScrollMagic',
    ScrollMagicAnimation: 'animation.gsap',
    pagePortalTween: 'pagePortalTween',
    "ScrollMagic.debug": 'jquery.scrollmagic.debug'
  }
});


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

// page portals (homepage) :

require(['pagePortalTween'], function (pagePortalTween) {

  // package elements :
  const activeportal = document.querySelector('.pageportal.active')
  const inactiveportal = document.querySelectorAll('.pageportal.inactive')
  const elements = [
    activeportal,
    inactiveportal
  ]
  pagePortalTween(elements)

});
