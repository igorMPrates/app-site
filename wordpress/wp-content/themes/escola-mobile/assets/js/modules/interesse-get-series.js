jQuery(document).ready(function ($) {
  $(document).on("focusout", ".the-birthdate", function () {
    $item = $(this).closest(".student-wrapper");
    $item.find(".the-series").val(null);
    $item.find(".the-avaible-parcial").val(null);
    $item.find(".the-avaible-integral").val(null);
    const dia = $(this).val().split("/")[0];
    const mes = $(this).val().split("/")[1];
    const ano = $(this).val().split("/")[2];
    mydate = mes + "/" + dia + "/" + ano;
    $.ajax({
      url:
        "https://api.escolamobile.com.br/ingresso/series/nascimento?anoLetivo=" +
        (new Date().getFullYear() + 1) +
        "&dataNascimento=" +
        mydate,
      context: document.body,
    }).done(function (response) {
      $item.find(".the-series").empty();
      for (let i = 0; i < response.length; i++) {
        $item.find(".the-series").append(
          $("<option>", {
            value: response[i].codgrade,
            text: response[i].serie,
          })
        );
        $(".the-series").val(0);
      }
    });
  });

  $(document).on("change", ".change-serie", function () {
    $item = $(this).closest(".student-wrapper");
    $.ajax({
      url:
        "https://api.escolamobile.com.br/ingresso/reunioes?anoLetivo=2023&codGrade=" +
        $(this).val(),
      context: document.body,
    }).done(function (response) {
      $item.find(".the-avaible-parcial").empty();
      $item.find(".the-avaible-integral").empty();
      $item.find(".the-avaible-parcial").append(`
          <option selected disabled value="0">Selecione a opção de sua preferência</option>
          <option value="J">Já participei de uma reunião pedagógica</option>
          <option value="X">Não tenho interesse no período Parcial </option>
        `);
      $item.find(".the-avaible-integral").append(`
          <option selected disabled value="0">Selecione a opção de sua preferência</option>
          <option value="J">Já participei de uma reunião pedagógica</option>
          <option value="X">Não tenho interesse no período Integral</option>
        `);
      for (parcialMeeting of response.periodoParcial) {
        $item.find(".the-avaible-parcial").append(
          $("<option>", {
            value: parcialMeeting.id,
            text:
              parcialMeeting.data +
              " - " +
              parcialMeeting.horario +
              " - " +
              parcialMeeting.tipo,
          })
        );
      }

      for (integralMeeting of response.periodoIntegral) {
        $item.find(".the-avaible-integral").append(
          $("<option>", {
            value: integralMeeting.id,
            text:
              integralMeeting.data +
              " - " +
              integralMeeting.horario +
              " - " +
              integralMeeting.tipo,
          })
        );
      }
    });
    $item.find(".the-avaible-parcial").val(0);
    $item.find(".the-avaible-integral").val(0);
  });
});
