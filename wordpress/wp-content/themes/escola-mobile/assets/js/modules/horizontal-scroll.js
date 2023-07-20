jQuery(document).ready(function ($) {
  /*
  * Responsive
  */
  const element = $('.horizontal-history').html()
  $(window).resize(function () {
    resizeHistory(element)
  })
  resizeHistory()
  function resizeHistory (element) {
    if ($(window).width() < 1024) {
      $('.horizontal-history').html('')
    } else {
      $('.horizontal-history').html(element)
    }
  }

  /*
  * History hooks
  */
  $('.prev-history').on('click', function () {
    changeHistory('prev')
  })
  $('.next-history').on('click', function () {
    changeHistory('next')
  })
  function changeHistory (event) {
    let atual = parseInt($('#history-active').html())
    if (event == 'next') {
      atual = (atual + 10) > 2020 ? atual : atual + 10
      atual >= 2020 ? $('.next-history').addClass('opacity-0') : $('.next-history').removeClass('opacity-0')
      atual <= 1970 ? $('.prev-history').addClass('opacity-0') : $('.prev-history').removeClass('opacity-0')
      $('#history-active').html(atual)
      $('.history-link').attr('href', '#' + atual)
    } else if (event == 'prev' && atual > 1970) {
      atual = (atual - 10) < 1970 ? atual : atual - 10
      atual >= 2020 ? $('.next-history').addClass('opacity-0') : $('.next-history').removeClass('opacity-0')
      atual <= 1970 ? $('.prev-history').addClass('opacity-0') : $('.prev-history').removeClass('opacity-0')
      $('#history-active').html(atual)
      $('.history-link').attr('href', '#' + atual)
    }
    switch (atual) {
      case 1970:
        $('#history-color').css('background-color', '#EE4266')
        break
      case 1980:
        $('#history-color').css('background-color', '#FFD200')
        break
      case 1990:
        $('#history-color').css('background-color', '#0EAD69')
        break
      case 2000:
        $('#history-color').css('background-color', '#F5F5F1')
        break
      case 2010:
        $('#history-color').css('background-color', '#0B65DA')
        break
      case 2020:
        $('#history-color').css('background-color', '#FF8600')
        break
    }
  }

  /*
  * Desktop hooks
  */
  $('#to-1970').on('click', function () {
    window.scrollTo(0, 500)
  })
  $('#to-1980').on('click', function () {
    window.scrollTo(0, 2500)
  })
  $('#to-1990').on('click', function () {
    window.scrollTo(0, 4800)
  })
  $('#to-2000').on('click', function () {
    window.scrollTo(0, 7500)
  })
  $('#to-2010').on('click', function () {
    window.scrollTo(0, 11400)
  })
  $('#to-2020').on('click', function () {
    window.scrollTo(0, 14400)
  })

  /*
  * Horizontal scroll
  */
  $('.priodo-parcial').on('click', function () {
    horizontalScroll(1)
    horizontalScroll(2)
  })

  $('.priodo-parcial-footer').on('click', function () {
    horizontalScroll(1)
    horizontalScroll(2)
  })

  $('.priodo-integral-footer').on('click', function () {
    horizontalScroll(1)
    horizontalScroll(2)
  })

  $('.priodo-integral').on('click', function () {
    horizontalScroll(1)
    horizontalScroll(2)
  })
  $(window).resize(function () {
    horizontalScroll(1)
    horizontalScroll(2)
  })
  horizontalScroll(1)
  horizontalScroll(2)
  function horizontalScroll (index) {
    if ($('.horizontal-scrolling-' + index + '.active').length > 0) {
      const theWidth = ($('.horizontal-scrolling-' + index + '.active').find('.item:last-child').offset().left + $('.horizontal-scrolling-' + index + '.active').find('.item:last-child').width()) * 0.7
      const item = $('.horizontal-scrolling-' + index + '.active').find('.item:last-child')
      const maxLeft = item.offset().left + item.width() + 80
      $('.horizontal-scrolling-' + index + '.active').css('height', Math.round(theWidth + 300) + 'px')

      $(window).on('scroll', function () {
        const windowOffset = $(window).scrollTop()
        const Elementoffset = $('.horizontal-scrolling-' + index + '.active').offset().top
        const ElementHeight = $('.horizontal-scrolling-' + index + '.active').height()
        if (windowOffset > Elementoffset && windowOffset < (Elementoffset + (ElementHeight - $(window).height()))) {
          const atualHeight = windowOffset - $('.horizontal-scrolling-' + index + '.active').offset().top
          const scrollPercent = (atualHeight * 100) / (ElementHeight - $(window).height())
          const useSize = (scrollPercent * (maxLeft - ($(window).width()) + 100)) / 100
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').css('margin-left', `calc(-${useSize}px)`)
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').removeClass('absolute')
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').addClass('fixed')
        } else if (windowOffset > (Elementoffset + (ElementHeight - $(window).height()))) {
          const maxSize = maxLeft - ($(window).width()) + 100
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').css('margin-left', `calc(-${maxSize}px)`)
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').removeClass('fixed')
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').addClass('absolute')
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').removeClass('top-0')
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').addClass('bottom-0')
        } else {
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').css('margin-left', '0')
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').removeClass('fixed')
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').addClass('absolute')
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').addClass('top-0')
          $('.horizontal-scrolling-' + index + '.active .horizontal-container').removeClass('bottom-0')
        }
      })
    }
  }
})
