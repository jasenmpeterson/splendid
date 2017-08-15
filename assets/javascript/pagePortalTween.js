// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax', './ScrollMagicIndicators'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, ScrollMagicIndicators, TweenMax) {
  return function (elements) {

    if (document.getElementsByTagName('body')[0]
      .classList.contains('home')) {

      createTweens()
    }

    // create tweens:
    function createTweens() {

      // global vars
      var scene = null;

      // scrollmagic vars :
      const sceneController = new ScrollMagic.Controller({
        //addIndicators: true,
        globalSceneOptions: {
          duration: 355
        }
      })


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

  }
});
