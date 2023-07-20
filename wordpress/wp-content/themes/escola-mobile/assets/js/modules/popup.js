jQuery(document).ready(function ($) {
    $('#popupCloseBtn').on("click", () => {
        closePopup($);
    });
});

function closePopup($) {
    $('.popup-main').remove();
};