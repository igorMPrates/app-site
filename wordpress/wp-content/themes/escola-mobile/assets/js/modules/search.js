jQuery(document).ready(function ($) {
  if ($('#search-results').length > 0) {
    $('body').css('overflow', 'hidden')
    window.scrollTo(0, 0)
  }

  const width = $('body').width()

  if (width <= 1279) {
    $('.search-area').on('click', function (e) {
      $('.search-item').css('width', '200px')
      if (!$('.search-item').hasClass('avaible')) {
        e.preventDefault()
      }
      $('.search-item').addClass('avaible')
      $('.main-logo').css('opacity', '0')
      $('.mobile-menu-button').addClass('hidden')
      $('.close-first-search').removeClass('hidden')
    })

    $('.close-first-search').on('click', function () {
      $('.search-item').removeClass('avaible')
      $('.search-item').css('width', '0px')
      $('.close-search').css('opacity', '1')
      $('.mobile-menu-button').removeClass('hidden')
      $('.close-first-search').addClass('hidden')
    })
  }

  if (width > 1279) {
    $('.search-area').on('mouseover', function () {
      $('.menu-options').css('display', 'none')
      $('.search-item').css('width', '200px')
      $('.close-search').css('opacity', '0')
    })

    $('.search-area').on('mouseleave', function () {
      if ($('.search-item').val() == '') {
        setTimeout(function () {
          $('.menu-options').css('display', 'flex')
        }, 300)
        $('.search-item').css('width', '0px')
        $('.close-search').css('opacity', '1')
      }
    })
  }
})
