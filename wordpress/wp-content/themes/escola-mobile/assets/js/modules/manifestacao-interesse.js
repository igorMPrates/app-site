jQuery(document).ready(function ($) {
  if ($('#manifestacao-interesse').length) {
    const inscricao = {
      step: 0,
      brothers: 0,
      nextStep () {
        if (!$('.ingresso-step .form-control').hasClass('error')) {
          this.step = this.step < 4 ? this.step + 1 : this.step
          this.disableStep(this.step)
        }
      },
      prevStep () {
        this.step = this.step > 0 ? this.step - 1 : this.step
        this.disableStep(this.step)
      },
      disableStep (item) {
        window.scrollTo(0, 0)
        $('.step-description').addClass('hidden')
        $('.ingress-item').removeClass('active')
        $('#ingress-item-' + item).addClass('complete')
        $('#ingress-item-' + (item + 1)).removeClass('complete')
        $('#ingress-item-' + (item + 1)).addClass('active')
        $('#ingress-item-' + (item + 1)).next().removeClass('hidden')

        if (item == 0) {
          $('#prev-button').addClass('hidden')
        } else {
          $('#prev-button').removeClass('hidden')
        }
        if (item == 3) {
          $('.bottom-content').removeClass('hidden')
          $('#prev-button').addClass('hidden')
          $('#next-button').addClass('hidden')
          $('#subscription-title').html('Muito obrigado!')
          $('.disable-text').addClass('hidden')
        } else {
          $('.bottom-content').addClass('hidden')
          $('#prev-button').removeClass('hidden')
          $('#next-button').removeClass('hidden')
        }
        if (item == 2) {
          $('.next-button-text').html('Finalizar')
        } else {
          $('.next-button-text').html('Continuar')
        }
        $('.ingresso-step').addClass('hidden')
        $('#step-' + (item + 1)).removeClass('hidden')
      },
      addBrother () {
        const newItem = $('#new-brother-template')
        newItem.find('#brother').attr('id', 'brother-' + this.brothers)
        newItem.find('.relacao-new-relacao').attr('id', 'relacao-brother-' + this.brothers)
        newItem.find('.brother-new-nome').attr('id', 'nome-brother-' + this.brothers)
        newItem.find('.brother-new-ano').attr('id', 'ano-brother-' + this.brothers)
        newItem.find('.brother-new-serie').attr('id', 'serie-brother-' + this.brothers)
        $('.news-parents').append(newItem.html())
      },
      removeBrother () {
        $('#add-parent').removeClass('hidden')
        $('#second_parent').addClass('hidden')
      }
    }

    /*
    * Validade fields
    */
    $(document).on('focusout', '.ingresso-step .form-control', function () {
      $('.error-alert').addClass('hidden')
      $(this).removeClass('error')
    })

    $('#next-button').on('click', function () {
      $('.error-alert').addClass('hidden')
      $('.form-control').removeClass('error')

      if (inscricao.step == 1) {
        if ($('#step-2 #user_name').val().length < 2 || !/^[a-záàâãéèêíïóôõöúçñ ]+$/i.test($('#user_name').val())) errorSpam($('#user_name'), 'Insira um nome válido')
        if ($('#step-2 #genero').val() == null) errorSpam($('#genero'), 'Selecione uma opção')
        if (!isValidDate($('#step-2 #nascimento').val())) errorSpam($('#nascimento'), 'Insira uma data válida')
        if ($('#step-2 #user_serie').val() == null) errorSpam($('#user_serie'), 'Selecione uma opção')
        if ($('#step-2 #periodo').val() == null) errorSpam($('#periodo'), 'Selecione uma opção')
        if ($('#step-2 #select_op').val() == null) errorSpam($('#select_op'), 'Selecione uma opção')
        $('#step-2 .relacao').each(function (index) {
          if ($(this).val().length < 2 || !/^[a-záàâãéèêíïóôõöúçñ ]+$/i.test($(this).val())) errorSpam($(this), 'Insira uma relação válida')
        })
        $('#step-2 .brother-name').each(function (index) {
          if ($(this).val().length < 2 || !/^[a-záàâãéèêíïóôõöúçñ ]+$/i.test($(this).val())) errorSpam($(this), 'Insira um nome válido')
        })
        $('#step-2 .brother-ano').each(function (index) {
          if ($(this).val().length != 4 || $(this).val() > (new Date()).getFullYear()) errorSpam($(this), 'Insira uma relação válida')
        })
        $('#step-2 .brother-serie').each(function (index) {
          if ($(this).val() == null) errorSpam($(this), 'Selecione uma opção')
        })
      } else if (inscricao.step == 2) {
        $('.quiz-opts').each(function (index) {
          if ($(this).val() == null) errorSpam($(this), 'Selecione uma opção')
        })
      }
    })

    function errorSpam (item, message) {
      window.scrollTo(0, 0)
      item.addClass('error')
      item.after('<small class="error-alert text-danger">' + message + '</small>')
    }

    function isValidDate (s) {
      const bits = s.split('/')
      const d = new Date(bits[2] + '/' + bits[1] + '/' + bits[0])
      return !!(d && (d.getMonth() + 1) == bits[1] && d.getDate() == Number(bits[0]))
    }

    function isValidCpf (cpf) {
      cpf = cpf.toString().replace(/[^\d]+/g, '')
      if (cpf == '') return false
      add = 0
      for (i = 0; i < 9; i++) { add += parseInt(cpf.charAt(i)) * (10 - i) }
      rev = 11 - (add % 11)
      if (rev == 10 || rev == 11) { rev = 0 }
      if (rev != parseInt(cpf.charAt(9))) { return false }
      add = 0
      for (i = 0; i < 10; i++) { add += parseInt(cpf.charAt(i)) * (11 - i) }
      rev = 11 - (add % 11)
      if (rev == 10 || rev == 11) { rev = 0 }
      if (rev != parseInt(cpf.charAt(10))) { return false }
      return true
    }

    function isValidEmail (email) {
      const EmailRegex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/
      return EmailRegex.test(email)
    }

    /* Clicks events */
    $('#add-brother').on('click', function () {
      inscricao.addBrother()
      inscricao.brothers++
    })

    $('#remove-brother').on('click', function () {
      inscricao.removeBrother()
      inscricao.twoParents = false
    })

    $('#next-button').on('click', function () {
      inscricao.nextStep()
    })

    $('#prev-button').on('click', function () {
      inscricao.prevStep()
    })
  }
})
