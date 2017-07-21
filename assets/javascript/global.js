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
    TweenLite: 'TweenMax',
    TimelineMax: 'TweenMax',
    DrawSVGPlugin: 'DrawSVGPlugin',
    CustomEase: 'CustomEase',
    ScrollMagic: 'ScrollMagic',
    ScrollMagicJQuery: 'jquery.ScrollMagic',
    ScrollMagicAnimation: 'animation.gsap',
    ScrollMagicIndicators: 'debug.addindicators',
    pagePortalTween: 'pagePortalTween',
    shapeTweens: 'shapeTweens',
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
  const pageportals = document.querySelectorAll('.pageportal')
  pagePortalTween(pageportals)

});


// shape tweens :

require(['shapeTweens'], function (shapeTweens) {

  // wavyline :
  const path = document.querySelectorAll('.wavyline svg path')
  const ellipse = document.querySelectorAll('.wavyline svg ellipse')

  const elements = [
    path[0],
    path[1],
    ellipse[0],
    ellipse[1]
  ]
  shapeTweens(elements)

});
