// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax', './ScrollMagicIndicators'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, ScrollMagicIndicators, TweenMax) {
  return function (elements) {

    // global vars
    var scene = null;

    // page portal elements :
    var pagePortalLabel = null

    // scrollmagic vars :
    var triggers = null
    const sceneController = new ScrollMagic.Controller({
      addIndicators: true,
      globalSceneOptions: {
        duration: 355
      }
    })

    // create tweens:
    function createTweens() {

      for (var i = 0; i < elements.length; i++) {

        // current pageportal :
        var pageportal = elements[i]
        var pageportalClassName = elements[i].classList[2]

        // scenes :
        scene = new ScrollMagic.Scene({
            triggerElement: pageportal
          })
          .addTo(sceneController)

        scene.setClassToggle('.' + pageportalClassName, 'active')

      }

    }

    createTweens()

  }
});
