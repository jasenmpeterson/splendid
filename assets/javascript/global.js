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
    MorphSVGPlugin: 'MorphSVGPlugin',
    Physics2DPlugin: 'Physics2DPlugin',
    gsapPlayer: 'gsapPlayer',
    CustomEase: 'CustomEase',
    ScrollMagic: 'ScrollMagic',
    ScrollMagicJQuery: 'jquery.ScrollMagic',
    ScrollMagicAnimation: 'animation.gsap',
    ScrollMagicIndicators: 'debug.addIndicators',
    pagePortalTween: 'pagePortalTween',
    shapeTweens: 'shapeTweens',
    dentistAJAX: 'dentistAJAX',
    servicesAJAX: 'servicesAJAX',
    fixedHeader: 'fixedHeader',
    gmaps: 'gmaps',
    splashPage: 'splashPage',
    axios: pageParams.javascriptDirectory + '/node_modules/axios/dist/axios',
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

// AJAX URL :

const siteURL = pageParams.root

// dentist AJAX :

require(['dentistAJAX'], function (dentistAJAX, ajaxURL) {

  const elements = document.querySelectorAll('.dentists .ajaxbutton')

  dentistAJAX(elements, siteURL)

});

// dentist AJAX :

require(['servicesAJAX'], function (servicesAJAX, ajaxURL) {

  const elements = document.querySelectorAll('.services .ajaxbutton')

  servicesAJAX(elements, siteURL)

});

// gmaps :

require(['gmaps']);

// dentist AJAX :

require(['fixedHeader'], function (fixedHeader) {

  const element = document.querySelector('header.FlexContainer')

  fixedHeader(element)

});


// splash page :

require(['splashPage'], function (splashPage) {
  const element = document.querySelector('.splashpage svg .background')
  splashPage(element)
});
