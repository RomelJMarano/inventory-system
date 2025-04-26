1$(document).ready(function () {
  $("#reservationNextBtn").click(function (e) {
    e.preventDefault();
    $(".modal-overlay").css("display", "flex");
  });
  $(".close-modal, .ri-close-circle-line").click(function (e) {
    e.preventDefault();

    $(".modal-overlay").css("display", "none");
  });
  $("#backToLanding").on("click", function () {
    window.location.href = "../index.html";
  });
});
