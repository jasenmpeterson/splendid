// fixed header :

define(function () {
  return function (element) {

    function shrinkeHeader() {
      window.addEventListener('scroll', function () {
        const height = 50
        var scroll = getCurrentScroll()
        if (scroll >= height) {
          element.classList.add('condense')
        } else {
          element.classList.remove('condense')
        }
      })

      function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
      }
    }
    shrinkeHeader()
  }
});
