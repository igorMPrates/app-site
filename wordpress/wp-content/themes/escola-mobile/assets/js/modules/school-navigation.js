jQuery(document).ready(function ($) {
  $('.open-school-navigation').on('click', function () {
    $('.the-school-navigation').addClass('hidden')
    const open_item = $(this).attr('data-open')

    $('.the-school-navigation').each(function (index) {
      if (open_item == $(this).attr('data-navigation') || open_item == $(this).attr('data-sub')) {
        $(this).removeClass('hidden')
        return false
      }
    })
  })

  $('.close-school-navigation').on('click', function () {
    $('.the-school-navigation').addClass('hidden')
  })
})
