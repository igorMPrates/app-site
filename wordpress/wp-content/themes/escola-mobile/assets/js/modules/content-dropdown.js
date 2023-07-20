jQuery(document).ready(function ($) {
  $('.priodo-parcial-content').addClass('hidden')
  $('.priodo-integral-content').addClass('hidden')

  $('.priodo-parcial').on('click', function () {
    openParcial()
  })

  $('.priodo-parcial-footer').on('click', function () {
    openParcial()
  })

  $('.priodo-integral-footer').on('click', function () {
    openIntegral()
  })

  $('.priodo-integral').on('click', function () {
    openIntegral()
  })

  const baseColor = $('.first-color').css('background-color')
  const secondaryColor = $('.second-color').css('background-color')

  function openParcial () {
    scrollTo(0, $('.priodo-integral').offset().top)
    $('.priodo-parcial-content').fadeIn(0)
    $('.priodo-integral-content').fadeOut(0)
    $('#periodos').css(
      {
        'border-bottom-right-radius': 0,
        'border-bottom-left-radius': 0
      }
    )
    $('.priodo-integral').css({ borderRadius: '0 0 0 100px' })
    $('.priodo-parcial').css({ borderRadius: '0 0 0 0' })
    $('#periodos').css('background-color', baseColor)
    $('.priodo-parcial').addClass('active')
    $('.priodo-integral').removeClass('active')
    $('.priodo-parcial').addClass('mobile-active')
    $('.priodo-integral').removeClass('mobile-active')
    $('.priodo-parcial-content').find('.horizontal-scrolling').addClass('active')
    $('.priodo-integral-content').find('.horizontal-scrolling').removeClass('active')

    // Change text
    $('.atual-screen').html($('.school-parts.part-0 .owl-item.active').find('.item').attr('data-item'))
  }

  function openIntegral () {
    scrollTo(0, $('.priodo-parcial').offset().top)
    $('.priodo-parcial-content').fadeOut(0)
    $('.priodo-integral-content').fadeIn(0)
    $('#periodos').css(
      {
        'border-bottom-right-radius': 0,
        'border-bottom-left-radius': 0
      }
    )
    $('.priodo-integral').css({ borderRadius: '0 0 0 0' })
    $('.priodo-parcial').css({ borderRadius: '0 0 100px 0' })
    $('#periodos').css('background-color', secondaryColor)
    $('.priodo-parcial').removeClass('active')
    $('.priodo-integral').addClass('active')
    $('.priodo-parcial').removeClass('mobile-active')
    $('.priodo-integral').addClass('mobile-active')
    $('.priodo-integral-content').find('.horizontal-scrolling').addClass('active')
    $('.priodo-parcial-content').find('.horizontal-scrolling').removeClass('active')

    // change text
    $('.atual-screen').html($('.school-parts.part-1 .owl-item.active').find('.item').attr('data-item'))
  }

  $('.open-content').on('click', function () {
    if ($('body').width() <= 768) {
      $(this).find('svg').toggleClass('transform rotate-180')
      $(this).next().slideToggle()
    }
  })
})
