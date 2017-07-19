// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax', './ScrollMagicIndicators'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, ScrollMagicIndicators, TweenMax) {
  return function (elements) {

    // timeline max properties :
    const duration = 0.5
    const delay = 0.5
    const ease = 'Power2.easeOut'

    // page portal elements :
    var pagePortalLabel = null

    // scrollmagic vars :
    var triggers = null
    const sceneController = new ScrollMagic.Controller()

    // create tweens:
    function createTweens() {
      for (var i = 0; i < elements.length; i++) {

        // tween name :
        var tweenName = 'pagePortalTween' + i

        // current pageportal :
        var pageportal = elements[i]

        // set current pageportal to active :
        elements[i].classList.add('active')

        // properties :
        var zIndex = (pageportal.classList.contains('active')) ? 2 : 1
        var opacity = (pageportal.classList.contains('active')) ? 1 : 0.5

        // current timeline :
        var tl = new TimelineMax()

        // set page portal elements :
        pagePortalLabel = pageportal.querySelector('h4.label')

        // tweens:
        tl.to(pageportal, duration, {
            opacity: opacity,
            zIndex: zIndex,
            ease: ease
          })
          .fromTo(pagePortalLabel, duration, {
            x: '100rem'
          }, {
            x: 0,
            opacity: 1,
            ease: ease
          })

        elements[i].classList.remove('active')

        // scenes :
        new ScrollMagic.Scene({
            triggerElement: pageportal
          })
          .setTween(tl)
          .addTo(sceneController)

      }

    }

    createTweens()

  }
});
