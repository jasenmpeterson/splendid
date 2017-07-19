// PagePortal TweenMax :

define(['./ScrollMagic', './ScrollMagicJQuery', './ScrollMagicAnimation', './TweenMax', './ScrollMagicIndicators'], function (ScrollMagic, ScrollMagicJQuery, ScrollMagicAnimation, ScrollMagicIndicators, TweenMax) {
  return function (elements) {

    // global tween properties :
    const easing = 'Power2.easeOut'
    const duration = '0.8'
    const delay = '0.2'
    const render = false
    var currentLabel = null

    // global inactive tween properties :
    const inactiveEasing = 'Power2.easeIn'

    // global reverse timeline tween properties :
    const reversedelay = '0.5'

    // global vars :
    var prevPagePortal = null
    var currentPagePortalTextModule = document.querySelector('.pageportal.active .textmodule')

    // declare timelines :
    const pageportaltimeline = new TimelineMax({
      data: {
        label: 'pageportaltimeline'
      }
    })
    const pageportaltimelinereverse = new TimelineMax({
      data: {
        label: 'pageportaltimelinereverse'
      }
    })

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
    pageportaltimeline.fromTo(currentPagePortalTextModule, duration, {
      y: '-20rem'
    }, {
      y: 0,
      opacity: 1,
      zIndex: 2,
      delay: delay,
      ease: easing
    }, 'scene1')

    // active label tween :
    const activelabel = document.querySelector('.pageportal.active .label')

    pageportaltimeline.fromTo(activelabel, duration, {
      x: '100rem'
    }, {
      x: 0,
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
        y: '20rem',
        top: '-5rem',
        zIndex: 2
      }, {
        y: 0,
        opacity: 1,
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

      // display info about overwritten tweens :
      TweenLite.onOverwrite = function (overwritten, overwriting, target, props) {
        console.log("tween that was overwritten");
        console.log(overwritten.timeline.data.label);
        console.log(overwritten);

        console.log("tween that did the overwriting")
        console.log(overwriting.timeline.data.label);
        console.log(overwriting);

        console.log("the target of the overwritten tween");
        console.log(target.innerHTML);

        console.log("properties that were overwritten");
        console.log(props);
      }

      // active -> inactive textmodule tween :

      const activeTextModule = currentActivePortal.querySelector('.textmodule')

      pageportaltimelinereverse.fromTo(activeTextModule, duration, {
        zIndex: 2,
        opacity: 1
      }, {
        opacity: 0.5,
        x: '0',
        zIndex: 1,
        delay: delay,
        ease: inactiveEasing
      })

      // active -> inactive label tween :

      const activeLabel = currentActivePortal.querySelector('.label')

      pageportaltimelinereverse.fromTo(activeLabel, duration, {
        x: 0,
        opacity: 1
      }, {
        x: '100rem',
        opacity: 0,
        delay: delay,
        ease: inactiveEasing
      })

      // active -> inactive elements :
      prevPagePortal = currentActivePortal

      var inactiveelements = [
        activeTextModule,
        prevPagePortal,
        activeLabel
      ]

      for (var inactiveCount = 0; inactiveCount < inactiveelements.length; inactiveCount++) {
        inactiveelements[inactiveCount].classList.remove('active')
        inactiveelements[inactiveCount].classList.add('inactive')
      }

      // inactive -> active elements :
      currentActivePortal = portal
      currentActiveTextModule = portal.querySelector('.textmodule')

      var activeelements = [
        currentActivePortal,
        currentActiveTextModule
      ]

      for (var activeCount = 0; activeCount < activeelements.length; activeCount++) {
        activeelements[activeCount].classList.remove('inactive')
        activeelements[activeCount].classList.add('active')
      }

      // set new scroll magic trigger :
      PagePortalScene.triggerElement(currentActivePortal)

    }

    // on update :
    PagePortalScene.on('update', function (e) {

      // get status of timeline :
      var pageportaltimelineStatus = pageportaltimeline.isActive() ? 'isPlaying' : 'isNotPlaying'

      // get current label :
      currentLabel = pageportaltimeline.currentLabel()

      // store scroll direction :
      var scrollDirection = PagePortalController.info('scrollDirection')

      if (scrollDirection == 'FORWARD' && pageportaltimelineStatus == 'isNotPlaying') {

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
