jQuery(document).ready(function ($) {
  if ($("#inscricao").length) {
    const inscricao = {
      step: 0,
      students: 1,
      twoParents: false,
      alunos: {},
      responsaveis: {},
      options: {},
      nextStep() {
        addInfo(this.step);
        if (
          !$(".ingresso-step .form-control").hasClass("error") &&
          !$(".ingresso-step .select-option").hasClass("error")
        ) {
          this.step = this.step < 4 ? this.step + 1 : this.step;
          this.disableStep(this.step);
        }
      },
      prevStep() {
        this.step = this.step > 0 ? this.step - 1 : this.step;
        this.disableStep(this.step);
      },
      disableStep(item) {
        $(".step-description").addClass("hidden");
        $(".ingress-item").removeClass("active");
        $("#ingress-item-" + item).addClass("complete");
        $("#ingress-item-" + (item + 1)).removeClass("complete");
        $("#ingress-item-" + (item + 1)).addClass("active");
        $("#ingress-item-" + (item + 1))
          .next()
          .removeClass("hidden");

        if (item == 0) {
          $("#prev-button").addClass("hidden");
        } else {
          $("#prev-button").removeClass("hidden");
        }
        if (item == 3) {
          $(".bottom-content").removeClass("hidden");
          $("#prev-button").addClass("hidden");
          $("#next-button").addClass("hidden");
          $("#subscription-title").html("Tudo certo!");
          $(".disable-text").addClass("hidden");
        } else {
          $(".bottom-content").addClass("hidden");
          $("#prev-button").removeClass("hidden");
          $("#next-button").removeClass("hidden");
        }
        if (item == 2) {
          $(".next-button-text").html("Finalizar");
        } else {
          $(".next-button-text").html("Continuar");
        }

        window.scrollTo(0, 0);
        $(".ingresso-step").addClass("hidden");
        $("#step-" + (item + 1)).removeClass("hidden");
      },
      newStudent() {
        this.students++;
        $(".estudantes-container").append($("#template-estudante").html());
        if (this.students > 1) {
          $(".only-new").addClass("hidden");
        } else {
          $(".only-new").removeClass("hidden");
        }
      },
      removeStudent(item) {
        this.students--;
        item.closest(".student-wrapper").remove();
        if (this.students > 1) {
          $(".only-new").addClass("hidden");
        } else {
          $(".only-new").removeClass("hidden");
        }
      },
      addParent() {
        $("#add-parent").addClass("hidden");
        $("#second_parent").removeClass("hidden");
        this.twoParents = true;
      },
      removeParent() {
        this.twoParents = false;
        $("#add-parent").removeClass("hidden");
        $("#second_parent").addClass("hidden");
      },
    };

    /*
     * Validade fields
     */
    $(".ingresso-step .form-control").on("focusout", function () {
      $(".error-alert").addClass("hidden");
      $(this).removeClass("error");
    });

    $("#next-button").on("click", function () {
      $(".error-alert").addClass("hidden");
      $(".form-control").removeClass("error");
      if (inscricao.step == 0) {
        $("#step-1")
          .find(".nome-candidato")
          .each(function () {
            if (
              $(this).val().length < 2 ||
              !/^[a-záàâãéèêíïóôõöúçñ ]+$/i.test($(this).val())
            )
              errorSpam($(this), "Insira um nome válido");
          });
        $("#step-1")
          .find(".data-nascimento")
          .each(function () {
            if (!isValidDate($(this).val()))
              errorSpam($(this), "Insira uma data válida");
          });
        $("#step-1")
          .find(".serie")
          .each(function () {
            if ($(this).val() == null)
              errorSpam($(this), "Selecione uma opção");
          });
        $("#step-1")
          .find(".data-parcial")
          .each(function () {
            if ($(this).val() === null && $(".data-integral").val() === null)
              errorSpam($(this), "Selecione uma das opções");
          });
        $("#step-1")
          .find(".data-integral")
          .each(function () {
            if ($(this).val() === null && $(".data-parcial").val() === null)
              errorSpam($(this), "Selecione uma das opções");
          });
      } else if (inscricao.step == 1) {
        if ($(".responsavel-name").val().length < 2)
          errorSpam($(".responsavel-name"), "Insira um nome válido");
        if ($(".responsavel-tel").val().length < 14)
          errorSpam($(".responsavel-tel"), "Insira um telefone válido");
        if (
          !isValidEmail($(".responsavel-email").val()) ||
          $(".responsavel-email").val().length <= 0
        )
          errorSpam($(".responsavel-email"), "Insira um e-mail válido");
        if (inscricao.twoParents == true) {
          if ($(".responsavel-name-2").val().length < 2)
            errorSpam($(".responsavel-name-2"), "Insira um nome válido");
          if ($(".responsavel-tel-2").val().length < 14)
            errorSpam($(".responsavel-tel-2"), "Insira um telefone válido");
          if (
            !isValidEmail($(".responsavel-email-2").val()) ||
            $(".responsavel-email-2").val().length <= 0
          )
            errorSpam($(".responsavel-email-2"), "Insira um e-mail válido");
        }
      } else if (inscricao.step == 2) {
        $(".alert-item").addClass("hidden");
        $("input:checkbox").removeClass("error");
        if (!$(".select-item-1").find("input").is(":checked")) {
          $(".select-item-1").next(".alert-item").removeClass("hidden");
          errorSpam($($(".select-item-1").find("input")));
        }
        if (!$(".select-item-2").find("input").is(":checked")) {
          $(".select-item-2").next(".alert-item").removeClass("hidden");
          errorSpam($($(".select-item-2").find("input")));
        }
        sendData();
      }
    });

    function addInfo(step) {
      /*
       * Add alunos
       */
      const alunos = [];

      $("#step-1")
        .find(".nome-candidato")
        .each(function (index) {
          alunos[index] = {};
          alunos[index].name = $(this).val();
        });
      $("#step-1")
        .find(".the-series")
        .each(function (index) {
          alunos[index].codegrade = $(this).val();
        });

      $("#step-1")
        .find(".the-avaible-parcial")
        .each(function (index) {
          alunos[index].parcial_date = $(this).val();
        });
      $("#step-1")
        .find(".the-avaible-integral")
        .each(function (index) {
          alunos[index].integral_date = $(this).val();
        });

      $("#step-1")
        .find(".data-nascimento")
        .each(function (index) {
          alunos[index].nascimento = $(this).val();
        });
      $("#step-1")
        .find(".serie")
        .each(function (index) {
          const item = {
            name: $(this).find("option:selected").text(),
            value: $(this).val(),
          };
          alunos[index].serie = item;
        });
      $("#step-1")
        .find(".have-brother")
        .each(function (index) {
          alunos[index].brother = $(this).is(":checked");
        });

      $("#step-1")
        .find(".data-parcial")
        .each(function (index) {
          const component = $(this)[0];
          const item = {
            name: $(component).find("option:selected").text(),
            value: $(component).val(),
          };
          alunos[index].parcial = item;
        });

      $("#step-1")
        .find(".data-integral")
        .each(function (index) {
          const component = $(this)[0];
          const item = {
            name: $(component).find("option:selected").text(),
            value: $(component).val(),
          };
          alunos[index].integral = item;
        });

      inscricao.alunos = alunos;
      buildAlunos(alunos);

      /*
       * Add responsavel
       */
      const responsavel = [];
      responsavel[0] = {};
      responsavel[0].name = $(".responsavel-name").val();
      responsavel[0].tel = $(".responsavel-tel").val();
      responsavel[0].email = $(".responsavel-email").val();
      if (inscricao.twoParents) {
        responsavel[1] = {};
        responsavel[1].name = $(".responsavel-name-2").val();
        responsavel[1].tel = $(".responsavel-tel-2").val();
        responsavel[1].email = $(".responsavel-email-2").val();
      }
      inscricao.responsaveis = responsavel;
    }

    function addOptions() {
      const selecteds = {};
      $(".select-option:checked").each(function (index) {
        selecteds[$(this).attr("data-id")] = [];
      });
      $(".select-option:checked").each(function (index) {
        selecteds[$(this).attr("data-id")].push($(this).val());
      });
      return selecteds;
    }

    function buildAlunos(alunos) {
      $("#aluno-wrapper").html("");
      alunos.forEach((aluno, index) => {
        const template = $("#aluno-template");
        template.find(".candidate-name").html(aluno.name);
        template.find(".candidate-serie").html(aluno.serie.name);
        template.find(".periodo-wrapper").html("");
        if (aluno.parcial.value > 0)
          buildPeriodo(
            template.find(".periodo-wrapper"),
            aluno.parcial,
            "PERÍODO PARCIAL"
          );
        if (aluno.integral.value > 0)
          buildPeriodo(
            template.find(".periodo-wrapper"),
            aluno.integral,
            "PERÍODO INTEGRAL"
          );
        if (aluno.parcial.value == "J")
          alreadyParticipated(
            template.find(".periodo-wrapper"),
            aluno.parcial,
            "PERÍODO PARCIAL"
          );
        if (aluno.parcial.value == "I")
          alreadyParticipated(
            template.find(".periodo-wrapper"),
            aluno.parcial,
            "PERÍODO PARCIAL"
          );
        if (aluno.integral.value == "J")
          alreadyParticipated(
            template.find(".periodo-wrapper"),
            aluno.integral,
            "PERÍODO INTEGRAL"
          );
        if (aluno.integral.value == "I")
          alreadyParticipated(
            template.find(".periodo-wrapper"),
            aluno.integral,
            "PERÍODO INTEGRAL"
          );
        $("#aluno-wrapper").append(template.html());
      });
    }

    function buildPeriodo(element, aluno, name) {
      const parcialTemplate = $("#periodo-template");
      const dateItems = aluno.name.split(" - ");
      const formatDate = dateItems[0]
        .replace("/", "-")
        .replace("/", "-")
        .split("-");
      const theDate = formatDate[1] + "-" + formatDate[0] + "-" + formatDate[2];
      const dateObj = new Date(theDate);
      const monthName = dateObj.toLocaleString("pt-BR", { month: "long" });
      parcialTemplate
        .find(".day-date")
        .html(formatDate[0] + " de " + monthName);
      parcialTemplate.find(".periodo-title").html(name);
      parcialTemplate.find(".hour-date").html(aluno.name.split(" - ")[1]);
      if (dateItems[2] == "Virtual") {
        parcialTemplate.find(".is-online").html("Acompanhe online*");
        parcialTemplate.find(".meet-type").html("REMOTAMENTE:");
        parcialTemplate.find(".info-adress").html("");
        parcialTemplate.find(".info-district").html("");
      } else {
        parcialTemplate.find(".meet-type").html("Presencialmente");
        parcialTemplate.find(".is-online").html("");
        parcialTemplate.find(".info-adress").html("R. Araguari, 167");
        parcialTemplate.find(".info-district").html("Bairro Moema");
      }
      element.append(parcialTemplate.html());
    }

    function alreadyParticipated(element, message, name) {
      const parcialTemplate = $("#not-now-template");
      parcialTemplate.find(".periodo-title").html(name);
      parcialTemplate.find(".meet-message").html(message.name);
      element.append(parcialTemplate.html());
    }

    function sendData() {
      const data = {};
      data.candidatos = [];

      inscricao.alunos.forEach((aluno) => {
        const theAluno = {};
        const date = aluno.nascimento.split("/");
        const alunoDates = [];
        theAluno.nome = aluno.name;
        theAluno.dataNascimento = date[2] + "/" + date[1] + "/" + date[0];
        theAluno.anosInteresse = [new Date().getFullYear() + 1];
        theAluno.codgrade = aluno.codegrade;
        if (aluno.parcial_date > 0) {
          alunoDates.push(aluno.parcial_date);
        }
        if (aluno.integral_date > 0) {
          alunoDates.push(aluno.integral_date);
        }
        theAluno.reunioes = alunoDates;
        theAluno.temIrmaoMobile = aluno.brother;
        data.candidatos.push(theAluno);
      });
      data.responsaveis = [];
      inscricao.responsaveis.forEach((responsavel) => {
        const theParent = {};
        theParent.nome = responsavel.name;
        theParent.telefone = responsavel.tel;
        theParent.email = responsavel.email;
        data.responsaveis.push(theParent);
      });

      data.pesquisa = addOptions();

      const settings = {
        url: "https://api.escolamobile.com.br/ingresso/cadastro",
        method: "POST",
        timeout: 0,
        headers: {
          "Content-Type": "application/json",
        },
        data: JSON.stringify(data),
      };
      $.ajax(settings).done(function (response) {});
    }

    function errorSpam(item, message = "") {
      item.addClass("error");
      item.after(
        '<small class="error-alert text-danger">' + message + "</small>"
      );
    }

    function isValidDate(s) {
      const bits = s.split("/");
      const d = new Date(bits[2] + "/" + bits[1] + "/" + bits[0]);
      return !!(
        d &&
        d.getMonth() + 1 == bits[1] &&
        d.getDate() == Number(bits[0])
      );
    }

    function isValidCpf(cpf) {
      cpf = cpf.toString().replace(/[^\d]+/g, "");
      if (cpf == "") return false;
      add = 0;
      for (i = 0; i < 9; i++) {
        add += parseInt(cpf.charAt(i)) * (10 - i);
      }
      rev = 11 - (add % 11);
      if (rev == 10 || rev == 11) {
        rev = 0;
      }
      if (rev != parseInt(cpf.charAt(9))) {
        return false;
      }
      add = 0;
      for (i = 0; i < 10; i++) {
        add += parseInt(cpf.charAt(i)) * (11 - i);
      }
      rev = 11 - (add % 11);
      if (rev == 10 || rev == 11) {
        rev = 0;
      }
      if (rev != parseInt(cpf.charAt(10))) {
        return false;
      }
      return true;
    }

    function isValidEmail(email) {
      const EmailRegex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return EmailRegex.test(email);
    }

    /* Clicks events */
    $("#add-parent").on("click", function () {
      inscricao.addParent();
    });

    $("#remove-parent").on("click", function () {
      inscricao.removeParent();
    });

    $("#next-button").on("click", function () {
      inscricao.nextStep();
    });

    $("#prev-button").on("click", function () {
      inscricao.prevStep();
    });

    // new student
    $(document).on("click", ".new-student", function () {
      inscricao.newStudent();
      $(".date").mask("00/00/0000");
      $(".cpf").mask("000.000.000-00");
      $(".phone").mask("(00)00000-0000");
    });
    $(document).on("click", ".remove-student", function () {
      inscricao.removeStudent($(this));
    });
  }
});
