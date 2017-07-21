define(['./TweenMax', './CustomEase'], function (TweenMax, CustomEase) {
  return function (element) {

    // credit goes to: https://codepen.io/kjbrum/pen/wBBLXx

    function positionAwareButton() {
      element.forEach(currElement => {
        let handler = () => hoverEffect(currElement);
        ['mouseover', 'mouseout'].forEach(event => currElement.addEventListener(event, handler))
      })
    }

    function hoverEffect(button) {
      const parentOffset = button.getBoundingClientRect()
      const relX = event.pageX - parentOffset.left
      const relY = event.pageY - parentOffset.top
      const buttonSpan = button.getElementsByTagName('span')
      buttonSpan[0].style.top = relY + 'px'
      buttonSpan[0].style.left = relX + 'px'
    }

    positionAwareButton()

  }
});
