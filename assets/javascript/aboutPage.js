// AJAX Dentist Profile Loading

define(['./TweenMax'], function () {

  return function () {

    var prevFaq = null;
    var currFaq = null;
    var currQuestion = null;

    const faqButton = document.querySelectorAll('.faq-title')

    for (var i = 0; i < faqButton.length; i++) {

      faqButton[i].addEventListener('click', function () {
        const faqID = this.getAttribute('data-faq-name')
        faq(faqID)
      })
    }

    function faq(faqID) {

      prevFaq = document.querySelector('.faq-content.active')

      TweenLite.to(prevFaq, 0.5,{
        height: 0,
        opacity: 0,
        display: 'none',
        onComplete: function() {
          prevFaq.classList.remove('active')
        }
      })

      currQuestion = document.querySelectorAll('[data-faq-name="'+faqID+'"]')
      currQuestion[1].classList.add('active')

      TweenLite.to(currQuestion[1], 0.5, {
        height: 'auto',
        opacity: 1,
        display: 'block'
      })
    }

  }

});
