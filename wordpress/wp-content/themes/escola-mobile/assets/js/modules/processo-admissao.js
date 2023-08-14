jQuery(document).ready(function ($) {
  const admissao = {
    step: 1,
    nextStep() {
      this.disableStep(this.step);
      this.step === 5 ? (this.step = 1) : this.step++;
      this.enableStep(this.step);
    },
    prevStep() {
      this.disableStep(this.step);
      this.step === 1 ? (this.step = 5) : this.step--;
      this.enableStep(this.step);
    },
    enableStep(stepNumber) {
      console.log(stepNumber);
      $(`#admissao-item-${stepNumber} div`).addClass("active-1");
      $(`#step-${stepNumber}`).removeClass("d-none");
      this.toggleNavButtons(stepNumber);
    },
    disableStep(stepNumber) {
      $(`#admissao-item-${stepNumber} div`).removeClass("active-1");
      $(`#step-${stepNumber}`).addClass("d-none");
      this.toggleNavButtons(stepNumber);
    },
    toggleNavButtons(stepNumber) {
      if (stepNumber === 5) {
        $("#ingresso__prev-button").removeClass("d-none");
        $("#ingresso__next-button").addClass("d-none");
      } else if (stepNumber === 1) {
        $("#ingresso__prev-button").addClass("d-none");
        $("#ingresso__next-button").removeClass("d-none");
      } else {
        $("#ingresso__prev-button").removeClass("d-none");
        $("#ingresso__next-button").removeClass("d-none");
      }
    },
  };
  $("#ingresso__next-button").on("click", function (event) {
    event.preventDefault();
    admissao.nextStep();
  });
  $("#ingresso__prev-button").on("click", function (event) {
    event.preventDefault();
    admissao.prevStep();
  });

  if ($("#effectScroll").length > 0) {
    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $("#effectScroll").offset().top - 100,
      },
      100
    );
  }
});
