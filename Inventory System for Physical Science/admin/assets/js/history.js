$(document).ready(function () {
  $("ul li").click(function (e) {
    e.preventDefault();

    let page = $(this).attr("id");

    switch (page) {
      case "dashboardNav":
        window.location.href = "index.php";
        break;
      case "inventoryNav":
        window.location.href = "inventory.php";
        break;
      case "historyNav":
        window.location.href = "history.php";
        break;
      case "messagesNav":
        window.location.href = "messages.php";
        break;
      case "helpNav":
        window.location.href = "help.php";
        break;
      case "settingsNav":
        window.location.href = "settings.php";
        break;
      default:
        console.log("Navigation item not recognized.");
    }
  });

  let $list = $(".navigation li");

  function activeLink() {
    $list.removeClass("hovered");
    $(this).addClass("hovered");
  }

  $list.on("mouseover", activeLink);

  $(".toggle").on("click", function () {
    $(".navigation, .main").toggleClass("active");
  });

  $(".logoutBtn").on("click", function (e) {
    e.preventDefault();

    Swal.fire({
      title: "Are you sure?",
      text: "You will be logged out of your account.",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, log me out",
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "../includes/process_logout.php";
      }
    });
  });
});
