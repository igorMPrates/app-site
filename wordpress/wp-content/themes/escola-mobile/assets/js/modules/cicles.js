jQuery(document).ready(function ($) {
  $('.play-video-button').on('click', function () {
    $('body').addClass('overflow-hidden')
    $('.show-video').fadeIn()
    $('.video-content').attr('src', $('.video-content').attr('src') + '?autoplay=true')
  })

  $('.close-video').on('click', function () {
    $('body').removeClass('overflow-hidden')
    $('.show-video').fadeOut()
    $('.video-content').attr('src', $('.video-content').attr('src') + '?autoplay=false')
  })

  /**
   * Open card in mobile
   */
  $('.know-more-button').on('click', function () {
    const template = $(this).closest('.extracurricular-card').find('.modal-mobile-content').html()
    $('#mobile-card-wrapper').html(template)
    $('#mobile-card-wrapper').fadeIn()
  })
  $(document).on('click', '.close-mobile-card', function () {
    $('#mobile-card-wrapper').fadeOut()
  })
})
