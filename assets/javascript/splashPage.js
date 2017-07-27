// PagePortal TweenMax :

define(['./TweenMax', './MorphSVGPlugin', './CustomEase', './gsapPlayer', './Physics2DPlugin'], function (TweenMax, MorphSVGPlugin, CustomEase, findShapeIndex, gsapPlayer, Physics2DPlugin) {
  return function (element) {

    if (document.getElementsByTagName('body')[0]
      .classList.contains('home')) {
      const morphShape = document.querySelector('.morphCircle path')
      const text = document.querySelector('.splashpage svg .text')
      const splashpage = document.querySelector('.splashpage')

      window.tl = new TimelineMax()
      // window.gsapPlayer();

      // particles :

      const particles = new TimelineMax()
      // particles.pause()
      const particle = document.querySelectorAll('.particle')
      const w = window.innerWidth
      const h = window.innerHeight
      const hi = 300 / particle.length
      const wi = 100 / particle.length

      for (var i = 0; i < particle.length; i++) {
        var _ = particle[i]
        var size = random(5, 50)

        particles.set(_, {
          left: i * wi + 'vw',
          top: '101vh',
          z: random(-100, 100),
          width: size,
          height: size,
          opacity: 1,
          // border: '2px solid #fff'
          border: '2px solid hsl(' + ((i * hi) - 5) + ', 100%, 50%)'
        })

        particles.to(_, random(2, 6), {
          physics2D: {
            velocity: random(100, 300),
            gravity: 100,
            angle: random(-80, -100)
          },
          scale: .1,
          opacity: 0,
          repeat: -1,
          delay: i * -.2
        })
      }

      tl.fromTo(text, 0.8, {
        opacity: 0,
        x: '-600px'
      }, {
        opacity: 1,
        x: 0,
        ease: CustomEase.create('wavyline', 'M0,0 C0.25,0.46 0.45,0.94 1,1'),
        onComplete: function () {
          setTimeout(function () {
            document.querySelector('.splashpage svg .text')
              .classList.add('animate')
          }, 1500)
        }
      })

      tl.to(element, 0.2, {
        morphSVG: {
          shape: morphShape,
          shapeIndex: 1
        },
        delay: 2,
        ease: Power4.easeInOut
      })

      tl.to(splashpage, 0.1, {
        opacity: 0,
        display: 'none',
        immediateRender: false
      })

      // document.querySelector('.splashpage')
      //   .addEventListener('click', function () {
      //     tl.to(text, 0.1, {
      //       opacity: 0
      //     })
      //
      //     tl.to(element, 0.1, {
      //       morphSVG: {
      //         shape: morphShape,
      //         shapeIndex: 1
      //       },
      //       ease: Power4.easeIn
      //     })
      //
      //     tl.to(splashpage, 0.1, {
      //       opacity: 0,
      //       immediateRender: false
      //     })
      //   })

    }

    function random(min, max) {
      return Math.random() * (max - min) + min
    }
  }
});
