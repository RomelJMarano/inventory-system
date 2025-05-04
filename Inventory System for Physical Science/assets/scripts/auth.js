$(document).ready(function () {
  $("#loginForm").submit(function (e) {
    e.preventDefault();
    var username = $("#loginUsername").val();
    var password = $("#loginPassword").val();

    $.ajax({
      type: "POST",
      url: "../includes/process_login.inc.php",
      data: {
        username: username,
        password: password,
      },
      dataType: "json",
      success: function (response) {
        if (response.status === "success" && response.redirectURL) {
          Swal.fire({
            title: "Login Successful",
            text: "Redirecting to dashboard",
            icon: "success",
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            showConfirmButton: false,
            didOpen: () => {
              Swal.showLoading();
            },
          });

          setTimeout(() => {
            window.location.href = response.redirectURL;
          }, 2000);
        } else {
          var errorMsg = response.error || "An unknown error occurred";
          Swal.fire("Oops!", errorMsg, "error");
        }
      },
      error: function (xhr) {
        console.error("Login failed: " + xhr.responseText);
      },
    });
  });
});
