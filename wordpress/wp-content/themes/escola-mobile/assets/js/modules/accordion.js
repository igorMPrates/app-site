jQuery(document).ready(function ($) {
  $(".drop-down-text-side").html(
    $(".acordion-wrapper li").find(".drop-down-text-container").html()
  );

  $($(".drop-down-text-container")[0]).slideUp();

  $($(".li-hover")[0])
    .closest(".acordion-wrapper li")
    .find(".drop-down-text-container")
    .slideDown();

  $(".li-hover").on("click", function () {
    $(".acordion-wrapper li .li-hover").removeClass("active");
    if (
      $(this)
        .closest(".acordion-wrapper li")
        .find(".drop-down-text-container")
        .css("display") != "block"
    ) {
      $(".acordion-wrapper").find(".drop-down-text-container").slideUp();
      $(this)
        .closest(".acordion-wrapper li")
        .find(".drop-down-text-container")
        .slideDown();
      $(this).addClass("active");
    } else {
      $(this)
        .closest(".acordion-wrapper li")
        .find(".drop-down-text-container")
        .slideUp();
    }
    const text = $(this)
      .closest(".acordion-wrapper li")
      .find(".drop-down-text-container")
      .html();
    $(".drop-down-text-side").html(text);
  });

  /*
   * Inside accordion
   */
  $(document).on("click", ".li-dropdown", function () {
    if ($(this).find(".li-text").css("display") != "block") {
      $(".li-dropdown").find(".li-text").slideUp();
      $(this).find(".li-text").slideDown();
      $(".li-dropdown").removeClass("active");
      $(this).addClass("active");
    } else {
      $(".li-dropdown").removeClass("active");
      $(this).find(".li-text").slideUp();
    }
  });

  /*
   * Admission accordion
   */
  $(".open-admission-accordion").on("click", function () {
    const admission = $(this).closest(".admission-accordion");
    const subAdmission = $(this).closest(".admission-subAccordion");

    if (admission.hasClass("active")) {
      console.log("Abrindo?");
      $(".admission-accordion").removeClass("active");
      admission.removeClass("active");
      $(".admission-accordion").find(".content").slideUp();
      admission.find(".content").slideUp();
    } else {
      $(".admission-accordion").removeClass("active");
      admission.addClass("active");
      $(".admission-accordion").find(".content").slideUp();
      admission.find(".content").slideDown();

      $(".admission-subAccordion").removeClass("active");
      subAdmission.removeClass("active");
      $(".admission-subAccordion").find(".content").slideUp();
      subAdmission.find(".content").slideUp();
    }
  });

  $(".open-admission-subAccordion").on("click", function () {
    event.stopPropagation();
    const admission = $(this).closest(".admission-subAccordion");
    if (admission.hasClass("active")) {
      $(".admission-subAccordion").removeClass("active");
      admission.removeClass("active");
      $(".admission-subAccordion").find(".content").slideUp();
      admission.find(".content").slideUp();
    } else {
      $(".admission-subAccordion").removeClass("active");
      admission.addClass("active");
      $(".admission-subAccordion").find(".content").slideUp();
      admission.find(".content").slideDown();
    }
  });
});
