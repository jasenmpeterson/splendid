define(['./TweenMax', './DrawSVGPlugin', './CustomEase'], function (TweenMax, DrawSVGPlugin, CustomEase) {
  return function (element) {

    const tl = new TimelineMax()

    tl.staggerFromTo(element, 1, {
      drawSVG: '0%'
    }, {
      drawSVG: '100%',
      opacity: 1,
      delay: 1,
      ease: CustomEase.create('wavyline', 'M0,0 C0.25,0.46 0.45,0.94 1,1')
    }, 1)
  }
});
