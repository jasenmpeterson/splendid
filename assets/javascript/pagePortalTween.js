// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, TweenMax) {
  return function (elements) {

    // global tween properties :
    const easing = 'Power2.easeOut'
    const duration = '0.5'
    const delay = '0.05'

    // active tween properties:
    const activeMarginTopStart = '-3rem'
    const activeMarginTopEnd = '6rem'
    const activeLabelEnd = '-8rem'

    // inactive tween properties :
    const inactiveMarginTopStart = '-3rem'
    const inactiveMarginTopEnd = '1rem'

    // declare timeline :
    const pageportaltimeline = new TimelineMax()

    // active textmodule tween :
    pageportaltimeline.fromTo(elements[0], duration, {
      marginTop: activeMarginTopStart
    }, {
      marginTop: activeMarginTopEnd,
      opacity: 1,
      ease: easing
    })

    // active label :
    const activelabel = document.querySelector('.pageportal.active .label')

    pageportaltimeline.fromTo(activelabel, duration, {
      bottom: activeLabelEnd
    }, {
      bottom: 0,
      opacity: 1,
      ease: easing
    })

    // inactive textmodule tweens :

    for (var i = 0; i < elements[1].length; i++) {

      // inactive textmodule tween :
      console.log(elements[1][i])

      pageportaltimeline.fromTo(elements[1][i], duration, {
        marginTop: inactiveMarginTopStart
      }, {
        marginTop: inactiveMarginTopEnd,
        opacity: 0.5,
        ease: easing,
        delay: delay
      })
    }

    // set controller :
    const controller = new ScrollMagic.Controller();

    // set scene :
    const scene = new ScrollMagic.Scene({
      triggerElement: elements
    })

    scene.setTween(pageportaltimeline)

    // add scene to controller :
    scene.addTo(controller)

  }
});
