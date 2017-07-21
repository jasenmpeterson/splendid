define(['./TweenMax', './DrawSVGPlugin', './CustomEase'], function (TweenMax, DrawSVGPlugin, CustomEase) {
  return function (element) {

    const tl = new TimelineMax()

    tl.staggerFromTo(element, 0.5, {
      drawSVG: '0%'
    }, {
      drawSVG: '100%',
      opacity: 1,
      delay: 0.5,
      ease: CustomEase.create('wavyline', 'M0,0 C0.25,0.46 0.45,0.94 1,1')
    }, 0.5)
  }
});
