// AJAX Dentist Profile Loading

define(['./axios', './TweenMax'], function (axios, TweenMax) {

  return function (elements, url) {

    const ajaxContent = document.querySelector('.dentists.ajaxcontent');
    const ajaxloader = document.querySelector('.dentists.ajaxcontent .ajaxloader');

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
          zIndex: 99
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
        // Do something with response data
        console.log(response)
        return response;
      }, function (error) {
        // Do something with response error
        return Promise.reject(error);
      });

      axios.get(url + '/wp-json/wp/v2/dentist/' + dataID)
        .then(function (response) {
          TweenLite.to(ajaxloader, 0.5, {
            opacity: 0,
            ease: Power2.easeIn
          })
          TweenLite.to(ajaxContent, .2, {
            opacity: 1,
            ease: Power2.easeOut
          })
        })
        .catch(function (error) {
          console.log(error);

        })

    }

  }

});
