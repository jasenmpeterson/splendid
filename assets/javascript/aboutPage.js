// AJAX Dentist Profile Loading

define(['./TweenMax'], function () {

  return function () {

    var prevFaq = null;
    var currFaq = null;
    var currQuestion = null;
    var openFAQButton = null;
    const faqpopup = document.querySelector('.faq-pop-up')
    openFAQButton = document.querySelector('[data-id="1"')

    const faqButton = document.querySelectorAll('.faq-title')

    for (var i = 0; i < faqButton.length; i++) {

      faqButton[i].addEventListener('click', function () {
        const faqID = this.getAttribute('data-faq-name')
        currFaq = this
        faq(currFaq,faqID)
      })
    }

    function faq(currFaq, faqID) {
      document.querySelector('.faq-title.active').classList.remove('active')
      currFaq.classList.add('active')

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


    function openFAQ() {
      openFAQButton.addEventListener('click', function () {
        TweenLite.to(faqpopup, 0.5, {
          y: '0',
          opacity: 1,
          ease: Power4.easeIn,
          display: 'block'
        })
      })
    }

    if (typeof(openFAQButton) !== 'undefined' && openFAQButton !== null) {
      openFAQ()
    }

    if (typeof(openFAQButton) !== 'undefined' && openFAQButton !== null) {
      openFAQ()
    }

    function closeFAQ() {
      const button = document.querySelector('.ajax-close-button')
      if (typeof(button) !== 'undefined' && button !== null) {
        button.addEventListener('click', function() {
          TweenLite.to(faqpopup, 0.5,  {
            y: '100px',
            opacity: 0,
            ease: Power4.easeIn,
            display: 'none'
          })
        })
      }

    }

    closeFAQ()

  }

});
