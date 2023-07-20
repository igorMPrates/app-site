jQuery(document).ready(function ($) {
  $('.cep').on('focusout', function () {
    $.ajax({
      url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/',
      context: document.body
    }).done(function (response) {
      $('.logradouro').val(response.logradouro)
      $('.complemento').val(response.complemento)
      $('.bairro').val(response.bairro)
      $('.localidade').val(response.localidade)
      $('.uf').val(response.uf)
    })
  })

  /*
  * Generate map on footer
  */
  $('.open-map').on('click', function () {
    if ((navigator.platform.indexOf('iPhone') != -1) ||
      (navigator.platform.indexOf('iPod') != -1) ||
      (navigator.platform.indexOf('iPad') != -1)) { window.open('https://goo.gl/maps/f2oUTrw7ZnVRjn5o6') } else { window.open('https://goo.gl/maps/f2oUTrw7ZnVRjn5o6') }
  })
})
