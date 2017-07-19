// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax', './ScrollMagicIndicators'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, ScrollMagicIndicators, TweenMax) {
  return function (elements) {

    // global tween properties :
    const easing = 'Power2.easeOut'
    const duration = '0.8'
    const delay = '0.2'
    const render = false

    // global vars :
    var prevPagePortal = null
    var currentPagePortalContent = document.querySelector('.pageportal.active .textmodule')

    // declare timelines :
    const pageportaltimeline = new TimelineMax()
    const pageportaltimelinereverse = new TimelineMax()

    // add reversee timeline to primary timeline :
    pageportaltimeline.add(pageportaltimelinereverse, 'reverseTimeline')

    // active pageportal content tween :
    if (document.querySelector('.pageportal.active .pageportalcontent')) {
      const activepageportalcontent = document.querySelector('.pageportal.active .pageportalcontent')
      pageportaltimeline.fromTo(activepageportalcontent, duration, {
        y: '-20rem'
      }, {
        y: 0,
        opacity: 1,
        ease: easing
      }, 'scene1')
    }

    // active textmodule tween :
    pageportaltimeline.fromTo(currentPagePortalContent, duration, {
      y: '10rem'
    }, {
      y: '0',
      opacity: 1,
      zIndex: 2,
      delay: delay,
      ease: easing
    }, 'scene1')

    // active label tween :
    const activelabel = document.querySelector('.pageportal.active .label')

    pageportaltimeline.fromTo(activelabel, duration, {
      bottom: '-8rem'
    }, {
      bottom: 0,
      opacity: 1,
      delay: delay,
      ease: easing
    }, 'scene1')

    // inactive textmodule tweens :

    // count scenes :
    var sceneCount = 2

    // loop through each inactive page portal and set initial tween :
    for (var i = 0; i < elements[1].length; i++) {
      pageportaltimeline.fromTo(elements[1][i], duration, {
        left: 0,
        top: '-5rem',
        color: 'red',
        zIndex: 2
      }, {
        left: '-20rem',
        opacity: 1,
        color: 'blue',
        ease: easing
      }, 'scene' + sceneCount++)
    }

    // pause immediately after scene1 completes :
    pageportaltimeline.addPause(pageportaltimeline.getLabelAfter())

    // set active page portal controller :
    const PagePortalController = new ScrollMagic.Controller();

    // current active textmodule :
    var currentActivePortal = document.querySelector('.pageportal.active')

    // set active page portal scene :
    const PagePortalScene = new ScrollMagic.Scene({
        triggerElement: currentActivePortal,
        triggerHook: 'onEnter',
        reverse: false
      })
      .addIndicators()

    // add timeline to scene :
    PagePortalScene.setTween(pageportaltimeline)

    // add scene to controller :
    PagePortalScene.addTo(PagePortalController)

    // get next page portal :
    function getPortal(portal) {

      console.log(portal)

      // 'disable' current active portal and add it to 'pageportaltimelinereverse' :

      // inactive textmodule tween :

      const currentActiveTextModule = currentActivePortal.querySelector('.textmodule')

      pageportaltimelinereverse.to(currentActiveTextModule, duration, {
        opacity: 0.5,
        zIndex: 1,
        ease: easing
      })
      currentActiveTextModule.classList.remove('active')
      currentActiveTextModule.classList.add('inactive')

      // set prevPagePortal to inactive :
      prevPagePortal = currentActivePortal
      prevPagePortal.classList.remove('active')
      prevPagePortal.classList.add('inactive')

      // assign new active portal :
      currentActivePortal = portal
      currentActivePortal.classList.remove('inactive')
      currentActivePortal.classList.add('active')

      // set new scroll magic trigger :
      PagePortalScene.triggerElement(currentActivePortal)

    }

    // on update :
    PagePortalScene.on('update', function (e) {

      // get play head status :
      var playHeadStatus = pageportaltimeline.isActive() ? 'isPlaying' : 'isNotPlaying'

      // get current label :
      var currentLabel = pageportaltimeline.currentLabel()

      // store scroll direction :
      var scrollDirection = PagePortalController.info('scrollDirection')

      if (scrollDirection == 'FORWARD' && currentLabel !== 'scene1' && playHeadStatus == 'isNotPlaying') {

        pageportaltimeline.play(currentLabel)
          .addPause(pageportaltimeline.getLabelAfter())

        // get next active portal :
        const nextPortal = currentActivePortal.nextElementSibling
        if (nextPortal.classList.contains('pageportal')) {
          getPortal(nextPortal)
        }
      }

    })
  }
});
