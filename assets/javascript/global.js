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
    ScrollToPlugin: 'ScrollToPlugin',
    ScrollMagic: 'ScrollMagic',
    ScrollMagicJQuery: 'jquery.ScrollMagic',
    ScrollMagicAnimation: 'animation.gsap',
    ScrollMagicIndicators: 'debug.addIndicators',
    pagePortalTween: 'pagePortalTween',
    interiorPageTween: 'interiorPageTween',
    aboutPageTween: 'aboutPageTween',
    shapeTweens: 'shapeTweens',
    dentistAJAX: 'dentistAJAX',
    servicesAJAX: 'servicesAJAX',
    specialOffersAJAX: 'specialOffersAJAX',
    aboutPage: 'aboutPage',
    gmaps: 'gmaps',
    splashPage: 'splashPage',
    mobileMenu: 'mobileMenu',
    axios: pageParams.javascriptDirectory + '/node_modules/axios/dist/axios',
    "ScrollMagic.debug": 'jquery.scrollmagic.debug'
  }
});

// mobile menu :

require(['mobileMenu'], function (mobileMenuButton) {

  // package elements :
  const button = document.querySelector('.HamburgerContainer');
  mobileMenuButton(button)

});

// page portals (homepage) :

require(['pagePortalTween'], function (pagePortalTween) {

  // package elements :
  const pageportals = document.querySelectorAll('.pageportal')
  pagePortalTween(pageportals)

});

// interior page tween

require(['interiorPageTween'], function (interiorPageTweenLabel) {

  // package elements :
  const label = document.querySelectorAll('h4.interior.label')
  interiorPageTweenLabel(label)

});

// about page tween

require(['aboutPageTween'], function (visitSectionItems) {

  // package elements :
  const visitIcons = document.querySelectorAll('.steps .icon svg')
  const visitNumbers = document.querySelectorAll('.stepCount')

  visitSectionItems(visitIcons, visitNumbers)

});

// shape tweens :

require(['shapeTweens'], function (shapeTweens) {

  // wavyline :
  const path = document.querySelectorAll('.wavyline svg path')


  const elements = [
    path[0],
    path[1],
    path[2],
    path[3]
  ]
  shapeTweens(elements)

});

// SITE URL :

const siteURL = pageParams.root

// THEME URL
const themeURL = pageParams.themeDirectory

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

// about AJAX :

require(['aboutPage'], function (aboutPage) {
  aboutPage()
});

// special offers AJAX :

require(['specialOffersAJAX'], function (specialOffersAJAX, ajaxURL) {

    const elements = document.querySelectorAll('.specialoffers')

    specialOffersAJAX(elements, siteURL)

});

// gmaps :

require(['gmaps']);

// splash page :

// require(['splashPage'], function (splashPage) {
//   const element = document.querySelector('.splashpage svg .background')
//   splashPage(element)
// });