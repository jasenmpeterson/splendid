// AJAX Services AJAX Loading

define(['./axios', './TweenMax'], function (axios, TweenMax) {

  return function (elements, url) {

    const ajaxContent = document.querySelector('.services.ajaxcontent');
    const ajaxloader = document.querySelector('.services.ajaxloader');

    for (var i = 0; i < elements.length; i++) {

      elements[i].addEventListener('click', function () {
        const dataID = this.getAttribute('data-id')
        getDentistInfo(dataID)
        document.querySelector('.ajaxbutton.active')
          .classList.remove('active')
        this.classList.add('active')
      })
    }

    function getDentistInfo(dataID) {

      axios.interceptors.request.use(function (config) {
        TweenLite.to(ajaxContent, 0.5, {
          opacity: 1,
          ease: Power2.easeOut,
          zIndex: 30
        })
        TweenLite.to(ajaxloader, 0.5, {
          opacity: 1,
          ease: Power2.easeOut
        })
        // Do something before request is sent
        return config;
      }, function (error) {
        // Do something with request error
        return Promise.reject(error);
      })

      axios.interceptors.response.use(function (response) {
        return response;
      }, function (error) {
        // Do something with response error
        return Promise.reject(error);
      });

      axios.get(url + '/wp-json/wp/v2/dental_services/' + dataID)
        .then(function (response) {
          TweenLite.to(ajaxloader, 0.5, {
            opacity: 0,
            ease: Power2.easeIn
          })
          TweenLite.to(ajaxContent, .2, {
            opacity: 0,
            ease: Power2.easeOut,
            zIndex: -1
          })
          console.log(response)

          const content = response.data.content.rendered
          document.querySelector('.services.FlexContainer .content .service')
            .innerHTML = ''
          document.querySelector('.services.FlexContainer .content .service')
            .innerHTML = content

          const title = response.data.title.rendered
          document.querySelector('.services.FlexContainer .content .serviceTitle')
            .innerHTML = ''
          document.querySelector('.services.FlexContainer .content .serviceTitle')
            .innerHTML = title.replace(' ', '<br/>')

        })
        .catch(function (error) {
          console.log(error);

        })

    }

  }

});
