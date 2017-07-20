define(['./TweenMax', './DrawSVGPlugin', './CustomEase'], function (TweenMax, DrawSVGPlugin, CustomEase) {
  return function (element) {

    const tl = new TimelineMax()

    tl.staggerFromTo(element, 0.5, {
        drawSVG: '0%'
      }, {
        drawSVG: '100%',
        opacity: 1,
        delay: 0.5,
        ease: 'Power2.easeOut'
      }, 0.5)
      .fromTo(element[2], 0.5, {
        opacity: 0.5,
        scale: 0.2,
        transformOrigin: 'center center',
        immediateRender: false,
        ease: CustomEase.create('scaleOut', 'M0,0 C0.55,0.085 0.68,0.53 1,1')
      }, {
        scale: 1,
        opacity: 1,
        ease: CustomEase.create('scaleIn', 'M0,0 C0.25,0.46 0.45,0.94 1,1')
      })
  }
});
