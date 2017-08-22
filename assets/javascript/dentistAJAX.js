// AJAX Dentist Profile Loading

define(['./axios', './TweenMax'], function (axios, TweenMax) {

  return function (elements, url) {

    const ajaxContent = document.querySelector('.dentists.ajaxcontent')
    const ajaxloader = document.querySelector('.dentists.ajaxcontent .ajaxloader')
    const dentistAJAXCloseButton = document.querySelector('.dentists.ajaxcontent .ajax-close-button')
    var content = null;
    var dentistCopy = null;
    var title = null;
    var dentist_name = null;

    for (var i = 0; i < elements.length; i++) {

      elements[i].addEventListener('click', function () {
        const dataID = this.getAttribute('data-id')
        getDentistInfo(dataID)
      })
    }

    function getDentistInfo(dataID) {

      axios.interceptors.request.use(function (config) {
        TweenLite.to(ajaxContent, 0.5, {
          opacity: 1,
          ease: Power2.easeOut,
          zIndex: 3000
        })
        TweenLite.to(ajaxloader, 0.5, {
          opacity: 1,
          display: 'block',
          ease: Power2.easeOut
        })
        // Do something before request is sent
        return config;
      }, function (error) {
        // Do something with request error
        return Promise.reject(error);
      })

      axios.interceptors.response.use(function (response) {
        // Do something with response data
        return response;
      }, function (error) {
        // Do something with response error
        return Promise.reject(error);
      });

      axios.get(url + '/wp-json/wp/v2/dentist/' + dataID)
        .then(function (response) {
          TweenLite.to(ajaxloader, 0.1, {
            opacity: 0,
            display: 'none'
          })
          TweenLite.to(ajaxContent, .2, {
            opacity: 1,
            ease: Power2.easeOut
          })
          content = response.data.content.rendered
          dentistCopy = document.querySelector('.dentists.ajaxcontent .description')

          dentistCopy.innerHTML = ''

          dentistCopy.innerHTML = content

          title = response.data.title.rendered
          dentist_name = document.querySelector('.dentists.ajaxcontent .dentist-name')

          dentist_name.innerHTML = ''

          dentist_name.innerHTML = title

          TweenLite.fromTo(dentist_name, 0.5, {
            opacity: 0,
            y: '20rem'
          }, {
            opacity: 1,
            delay: 0.5,
            y: '0',
            ease: CustomEase.create('wavyline', 'M0,0 C0.25,0.46 0.45,0.94 1,1')
          })

          TweenLite.fromTo(dentistCopy, 0.5, {
            opacity: 0,
            y: '40rem'
          }, {
            opacity: 1,
            y: '0',
            delay: 1,
            ease: CustomEase.create('wavyline', 'M0,0 C0.25,0.46 0.45,0.94 1,1')
          })

          TweenLite.fromTo(dentistAJAXCloseButton, 0.5, {
            opacity: 0,
            y: '40rem'
          }, {
            opacity: 1,
            y: '0',
            delay: 1.5,
            ease: CustomEase.create('wavyline', 'M0,0 C0.25,0.46 0.45,0.94 1,1')
          })

        })
        .catch(function (error) {
          console.log(error);

        })

      dentistAJAXCloseButton.addEventListener('click', function () {
        TweenLite.to(ajaxContent, 0.1, {
          opacity: 0,
          ease: Power4.easeIn,
          zIndex: -1
        })
        TweenLite.to(dentist_name, 0.1, {
          opacity: 0,
          ease: Power4.easeIn
        })
        TweenLite.to(dentistCopy, 0.1, {
          opacity: 0,
          ease: Power4.easeIn
        })
        TweenLite.to(dentistAJAXCloseButton, 0.1, {
          opacity: 0,
          ease: Power4.easeIn
        })
      })

    }

  }

});
