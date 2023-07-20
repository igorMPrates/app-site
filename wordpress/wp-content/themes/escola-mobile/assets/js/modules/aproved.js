jQuery(document).ready(function ($) {
  $('select[name="filtroAnoAprovados"]').change(function () {
    const selectedYear = $(this).val();

    window.location.href = `/aprovados/?anoAprovacao=${selectedYear}`;

    console.log(selectedYear);
  });
});
