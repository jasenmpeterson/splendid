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
    const sceneController = new ScrollMagic.Controller({
      addIndicators: true,
      globalSceneOptions: {
        duration: 300
      }
    })

    // create tweens:
    function createTweens() {
      for (var i = 0; i < elements.length; i++) {

        // current pageportal :
        var pageportal = elements[i]
        var pageportalClassName = elements[i].classList[2]

        // scenes :
        var scene = new ScrollMagic.Scene({
            triggerElement: pageportal
          })
          .addTo(sceneController)

        scene.setClassToggle('.' + pageportalClassName, 'active')

      }

    }

    createTweens()

  }
});
