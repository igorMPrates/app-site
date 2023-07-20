
jQuery(document).ready(function ($) {
  let loadWorks = 0
  const step = 10

  showMoreItems()
  $('.load-more-works').on('click', function () {
    showMoreItems()
  })

  function showMoreItems () {
    let count = 0
    while (count < loadWorks || count < step) {
      count++
      $('.list-works-' + (count)).removeClass('hidden')
    }
    loadWorks = loadWorks == 0 ? loadWorks + (step * 2) : loadWorks + step
    if ((loadWorks - step) >= $('.works-items').length) {
      $('.load-more-works').addClass('hidden')
    }
  };

})