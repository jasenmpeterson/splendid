// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax', './ScrollMagicIndicators'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, ScrollMagicIndicators, TweenMax) {
  return function (elements) {

    if (document.getElementsByTagName('body')[0]
      .classList.contains('interiorPage')) {
      labelTweens()
    }

    // label tweens:
    function labelTweens() {

      // global vars
      var scene = null;

      // scrollmagic vars :
      const sceneController = new ScrollMagic.Controller({
        globalSceneOptions: {
          duration: 355
        }
      })


      for (var i = 0; i < elements.length; i++) {

        // current pageportal :
        var label = elements[i]
        var labelClassName = elements[i].classList[0]

        // scenes :
        scene = new ScrollMagic.Scene({
            triggerElement: label
          })
          .offset('-150')
          .on('start end', function (e) {
            // destroy the scene once its reaches it's conclusion :
            if (e.type == 'end') {
              sceneController.destroy()
              scene = null
            }
          })
          .addTo(sceneController)

        scene.setClassToggle('.' + labelClassName, 'active')

      }

    }
  }
});
