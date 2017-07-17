// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax', './ScrollMagicIndicators'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, ScrollMagicIndicators, TweenMax) {
  return function (elements) {

    // global tween properties :
    const easing = 'Power2.easeOut'
    const duration = '0.5'
    const delay = '0.05'

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
      pageportaltimeline.to(elements[1][i], duration, {
        left: 0,
        opacity: 0,
        top: '-5rem',
        zIndex: 2
      })
    }

    // set active page portal controller :
    const PagePortalController = new ScrollMagic.Controller();

    // set active page portal scene :
    const PagePortalScene = new ScrollMagic.Scene({
        triggerElement: document.querySelector('body')
      })
      .addIndicators()

    // add timeline to scene :
    PagePortalScene.setTween(pageportaltimeline)

    // add scene to controller :
    PagePortalScene.addTo(PagePortalController)

    // get next page portal :
    function getPortal(nextPortal) {

      pageportaltimeline.to(activePagePortal, duration, {
        opacity: 0.5,
        zIndex: 1,
        delay: delay,
        ease: easing,
        onComplete: function () {
          // remove active class from previous active portal :
          activePagePortal.classList.remove('active')
          activePagePortal.classList.remove('inactive')

          // remove inactive class from current active portal :
          nextPortal.classList.remove('inactive')
          nextPortal.classList.add('active')

          // set current active portal :
          activePagePortal = nextPortal
          PagePortalScene.triggerElement(activePagePortal)

          console.log(PagePortalScene.triggerElement())

          pageportaltimeline.pause()

        }
      })

    }

    // on progress
    PagePortalScene.on('update', function (e) {

      // store scroll direction :
      var scrollDirection = PagePortalController.info('scrollDirection')

      const nextPortal = activePagePortal.nextElementSibling

      console.log(scrollDirection)

      if (scrollDirection == 'FORWARD') {

        // display (next) active page portal :
        pageportaltimeline.to(nextPortal, duration, {
          left: '-20rem',
          opacity: 1,
          ease: easing
        })

        // get next portal :
        getPortal(nextPortal)

      }

    })
  }
});
