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

  $("#addItem").click(function () {
    $("#addEquipmentModal").show();
  });

  $(".close-button, #cancelAddEq").click(function () {
    $("#addEquipmentModal").hide();
  });

  $(window).click(function (event) {
    if ($(event.target).is("#addEquipmentModal")) {
      $("#addEquipmentModal").hide();
    }
  });

  $("#fileUpload").on("change", function () {
    const fileName =
      this.files.length > 0 ? this.files[0].name : "No file chosen";
    $("#fileName").text(fileName);
  });

  $("#addEquipmentBtn").on("click", function (e) {
    e.preventDefault();

    let equipmentName = $("#equipmentName").val();
    let equipmentQuantity = $("#equipmentQuantity").val();
    let equipmentCategory = $("#equipmentCategory").val();
    let equipmentImageFile = $("#fileUpload")[0].files[0];

    // console.log(equipmentName, equipmentCategory, equipmentQuantity);

    if (!equipmentImageFile) {
      Swal.fire({
        icon: "error",
        title: "No File Selected",
        text: "Please upload an image file.",
      });
      return;
    }

    let formData = new FormData();
    formData.append("equipmentName", equipmentName);
    formData.append("equipmentQuantity", equipmentQuantity);
    formData.append("equipmentCategory", equipmentCategory);
    formData.append("equipmentImageFile", equipmentImageFile);

    $.ajax({
      type: "POST",
      url: "../includes/process_item.inc.php",
      data: formData,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          Swal.fire({
            title: "Equipment Added Successfully",
            text: "The new equipment has been added to the inventory.",
            icon: "success",
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            showConfirmButton: false,
            showCloseButton: true,
          }).then(() => {
            location.reload();
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Failed to Add Equipment",
            text: response.message || "Something went wrong.",
          });
        }
      },
      error: function (xhr, status, error) {
        console.log("XHR Response:", xhr);
        console.log("Status:", status);
        console.log("Error:", error);

        Swal.fire({
          icon: "error",
          title: "Server Error",
          text: "Unable to process the request.",
        });
      },
    });
  });
});
