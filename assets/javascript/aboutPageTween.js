// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax', './ScrollMagicIndicators', './CustomEase'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, ScrollMagicIndicators, TweenMax, CustomEase) {
  return function (icons, steps) {

    if (document.getElementsByTagName('body')[0]
      .classList.contains('page-id-10')) {
      visitSectionTween()
    }

    // label tweens:
    function visitSectionTween() {

      // global vars
      var scene = null;

      // tweenmax vars

      const tl = new TimelineMax()
      const stepsTimeline = new TimelineMax()
      const iconsTimeline = new TimelineMax()
      CustomEase.create('custom', 'M0,0 C0.25,0.46 0.45,0.94 1,1')

      tl.add([stepsTimeline, iconsTimeline])

      stepsTimeline.staggerFromTo(steps, 0.5, {
        opacity: 0
      }, {
        opacity: 1,
        ease: 'custom'
      }, 1)

      iconsTimeline.staggerFromTo(icons, 0.5, {
        opacity: 0,
        scale: 0
      }, {
        opacity: 1,
        scale: 1,
        ease: 'custom',
        delay: 1
      }, 1)

      // scrollmagic vars :
      const sceneController = new ScrollMagic.Controller({
        addIndicators: true,
        globalSceneOptions: {
          duration: 300
        }
      })

      // scenes :
      scene = new ScrollMagic.Scene({
          triggerElement: document.querySelector('.steps')
        })
        .setTween(tl)
        .offset('-300')
        .on('start end', function (e) {
          // destroy the scene once its reaches it's conclusion :
          if (e.type == 'end') {
            sceneController.destroy()
            scene = null
          }
        })
        .addTo(sceneController)

    }
  }
});
