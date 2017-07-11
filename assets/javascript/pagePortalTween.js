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
    const activeLeft = 0
    const activeTop = 0
    const activeZindex = 2
    const activeOpacity = 1

    // inactive tween properties :
    const inactiveMarginBottomStart = '-3rem'
    const inactiveMarginTopEnd = '1rem'
    const inactiveLeft = '-10rem'
    const inactiveTop = '-5rem'
    const inactiveZindex = 1
    const inactiveOpacity = 0.5

    // set initial active page portal:
    var activePagePortal = elements[0]

    // declare timeline :
    const pageportaltimeline = new TimelineMax()

    // active textmodule tween :
    pageportaltimeline.fromTo(elements[0], duration, {
      marginTop: '-3rem'
    }, {
      marginTop: '10rem',
      opacity: 1,
      zIndex: 2,
      ease: easing
    })

    // active label :
    const activelabel = document.querySelector('.pageportal.active .label')

    pageportaltimeline.fromTo(activelabel, duration, {
      bottom: '-8rem'
    }, {
      bottom: 0,
      opacity: 1,
      ease: easing
    })

    // inactive textmodule tweens :

    for (var i = 0; i < elements[1].length; i++) {

      // inactive textmodule tween :
      pageportaltimeline.fromTo(elements[1][i], duration, {
        left: 0,
        opacity: 0,
        top: '-5rem'
      }, {
        left: '-10rem',
        opacity: 0.5,
        ease: easing,
        delay: delay
      })
    }

    // set active page portal controller :
    const PagePortalController = new ScrollMagic.Controller();

    // set active page portal scene :
    const PagePortalScene = new ScrollMagic.Scene({
      triggerElement: elements
    })

    PagePortalScene.setTween(pageportaltimeline)

    // add scene to controller :
    PagePortalScene.addTo(PagePortalController)

    PagePortalScene.on('leave', function (e) {
      const nextPortal = activePagePortal.nextElementSibling
      pageportaltimeline.to(nextPortal, duration, {
        zIndex: 2,
        opacity: 1,
        ease: easing,
        onComplete: function () {
          pageportaltimeline.to(activePagePortal, duration, {
            opacity: 0.5,
            zIndex: 1,
            delay: delay,
            ease: easing,
            onComplete: function () {
              // remove active class from previous active portal :
              activePagePortal.classList.remove('active')
              activePagePortal.classList.remove('inactive')
            }
          })
          // remove inactive class from current active portal :
          nextPortal.classList.remove('inactive')
          nextPortal.classList.add('active')

          // set current active portal :
          activePagePortal = nextPortal
        }
      })
    })

  }
});
