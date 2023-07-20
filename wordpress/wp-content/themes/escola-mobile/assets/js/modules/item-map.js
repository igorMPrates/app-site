jQuery(document).ready(function ($) {
  $('.item-map-icon').on('mouseenter', function () {
    $(this).next('.item-map-text').fadeIn()
  })

  $('.item-map').on('mouseleave', function () {
    $('.item-map-text').fadeOut()
  })

  $('input[type=radio]').on('change', function () {
    $('input[type=radio]:checked').each(function (index) {
      $(this).parent().parent().addClass('active')
    })
    $('input[type=radio]:not(:checked)').each(function (index) {
      $(this).parent().parent().removeClass('active')
    })
  })

  /*
  * Read more
  */
  $('.read-more').html('Ver Mais')
  $('.read-more').addClass('font-semibold')
  $('.read-more').addClass('underline')

  /*
  * Before button
  */
  $('.before-button').on('click', function () {
    window.history.back()
  })

  /**
   * International map items
   */
  $(document).on('click', '.map-location', function () {
    const content = $(this).find('.map-item').html()
    $('.template-map-items').parent().removeClass('hidden')
    $('.template-map-items').html(content)
  })
})
