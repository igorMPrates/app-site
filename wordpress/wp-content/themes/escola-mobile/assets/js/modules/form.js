jQuery(document).ready(function ($) {
  const url_string = window.location.href;
  const url = new URL(url_string);
  const form = url.searchParams.get("form");
  const isFromScheduleVisit = url.href.includes("fromScheduleVisit");

  if (form != null) {
    $(".select-subject").val("form");
  }

  $($("#wpcf7-f291-o1").find("select[name=assunto]").find("option")[0]).attr(
    "disabled",
    true
  );

  if (isFromScheduleVisit) {
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#contact-form").offset().top,
      },
      1000
    );
    $("#wpcf7-f291-o1")
      .find("select[name=assunto]")
      .find('option[value="Agende uma Visita"]')
      .attr("selected", true);
  }
});
