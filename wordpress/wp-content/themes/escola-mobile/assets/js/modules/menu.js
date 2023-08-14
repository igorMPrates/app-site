jQuery(document).ready(
  function ($) {
    let mobileStatus = true
    $('.mobile-menu-button').on('click', function () {
      if (mobileStatus) {
        $(this).addClass('opened')

        $('.mobile-menu').css('margin-left', '0')
        $('body').css('overflow', 'hidden')
        mobileStatus = false
      } else {
        $(this).removeClass('opened')

        $('.mobile-menu').css('margin-left', '-100vw')
        $('body').css('overflow', 'auto')
        mobileStatus = true
      }
    }
    )

    $('#toTop').on('click', function () {
      fullpage_api.moveTo(1)
    })

    $(window).scroll(function () {
      const scroll = window.pageYOffset || document.documentElement.scrollTop
      if (scroll > 0) {
        $('.header-wrapper').css('height', '64px')
        $('.main-logo img').removeClass('lg:h-64')
      } else {
        $('.header-wrapper').css('height', '136px')
        $('.main-logo img').addClass('lg:h-64')
      }
    })

    $('.mobile-menu .menu-item-has-children').on('click', function () {
      $(this).toggleClass('active')
      $(this).find('.sub-menu').slideToggle()
    })

    /*
    * Upload file
    */
    const file = $('.file.form-control')
    file.on('change', function (e) {
      const [file] = e.target.files
      const { name: fileName, size } = file
      const fileSize = (size / 1000).toFixed(2)
      const fileNameAndSize = `${fileName} - ${fileSize}KB`
      $(this).prev().find('.item-text').html(fileNameAndSize.substring(0, 20) + '...')
    })

    /*
    * Masks
    */
    $('.date').mask('00/00/0000')
    $('.cpf').mask('000.000.000-00')
    $('.phone').mask('(00)00000-0000')

    /*
    * One checkbox in form
    */
    $('#contact-form input:checkbox').on('click', function () {
      if ($(this).is(':checked')) {
        const group = "input:checkbox[name='" + $(this).attr('name') + "']"
        $(group).prop('checked', false)
        $(this).prop('checked', true)
      } else {
        $(this).prop('checked', false)
      }
    })
  })
