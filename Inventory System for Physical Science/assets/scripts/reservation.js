$(document).ready(function () {
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

  $(".add-to-bag-btn").on("click", function () {
    const id = $(this).data("id");
    const name = $(this).data("name");
    const img = $(this).data("img");

    $.ajax({
      type: "POST",
      url: "../action/add-to-bag.php",
      data: {
        equipment_id: id,
        equipment_name: name,
        equipment_img: img,
      },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          Swal.fire({
            icon: "success",
            title: "Item Added!",
            text: "Item has been successfully added to your bag.",
          });
          updateBag(); // refresh bag view
        } else {
          Swal.fire({
            icon: "error",
            title: "Failed to Add Item",
            text: "There was an issue adding the item to your bag.",
          });
        }
      },
      error: function () {
        Swal.fire({
          icon: "error",
          title: "Oops!",
          text: "Something went wrong.",
        });
      },
    });
  });

  $(document).on("click", ".delete-item-btn", function () {
    const itemId = $(this).closest(".bag-item").data("id");

    $.ajax({
      type: "POST",
      url: "../action/remove-from-bag.php",
      data: { equipment_id: itemId },
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          updateBag();
        } else {
          Swal.fire({
            icon: "error",
            title: "Failed to Remove Item",
            text: "There was an issue removing the item from your bag.",
          });
        }
      },
      error: function () {
        Swal.fire({
          icon: "error",
          title: "Oops!",
          text: "Something went wrong.",
        });
      },
    });
  });

  function updateBag() {
    $.ajax({
      url: "../action/fetch-bag.php",
      type: "GET",
      dataType: "json",
      success: function (cart) {
        const itemListBody = $(".item-list-body");
        itemListBody.empty();

        if ($.isEmptyObject(cart)) {
          itemListBody.append('<p class="empty-text">Your bag is empty.</p>');
        } else {
          $.each(cart, function (id, item) {
            itemListBody.append(`
              <div class="bag-item" data-id="${id}">
                <div class="bag-item-left">
                  <div class="img-container-item-bag">
                    <img src="${item.img}" alt="${item.name}" />
                  </div>
                  <div class="bag-item-details">
                    <p class="bag-item-name">${item.name}</p>
                    <p class="bag-item-qty">Qty: ${item.quantity}</p>
                  </div>
                </div>
                <div class="bag-item-right">
                  <button class="delete-item-btn">Remove</button>
                </div>
              </div>
            `);
          });
        }

        // 🔥 Also update apparatus list using the SAME cart data
        displaySavedItems(cart);
      },
      error: function () {
        alert("Failed to fetch cart items.");
      },
    });
  }

  function displaySavedItems(cart) {
    const apparatusList = $(".apparatus-list");

    apparatusList.find(".apparatus-item:not(.header)").remove();

    if (!$.isEmptyObject(cart)) {
      $.each(cart, function (id, item) {
        apparatusList.append(`
          <div class="apparatus-item">
            <span class="name">${item.name}</span>
            <span class="quantity">${item.quantity}</span>
          </div>
        `);
      });
    } else {
      apparatusList.append(`
        <div class="apparatus-item">
          <span class="name" style="color: #999;">No items in bag.</span>
          <span class="quantity">0</span>
        </div>
      `);
    }
  }

  updateBag();

  $("#submitBtn").on("click", function (e) {
    e.preventDefault();

    const reservationData = {
      student_name: $("#studentFullName").val(),
      course_block: $("#courseAndBlock").val(),
      professor_name: $("#instructorName").val(),
      subject: $("#subject").val(),
      email: $("#email").val(),
      date_of_borrowing: $("#reservationDate").val(),
      start_time: $("#startTime").val(),
      end_time: $("#endTime").val(),
      equipments: [],
    };

    $(".quantity-input").each(function () {
      const qty = parseInt($(this).val());
      if (qty > 0) {
        reservationData.equipments.push({
          equipment_id: $(this).data("id"),
          equipment_name: $(this).data("name"),
          quantity: qty,
        });
      }
    });

    $.ajax({
      type: "POST",
      url: "../includes/reservation.inc.php",
      data: JSON.stringify(reservationData),
      contentType: "application/json",
      success: function (response) {
        console.log(response);
        Swal.fire("Success", "Reservation submitted!", "success");
      },
      error: function (xhr, error, status) {
        console.log("XHR Response:", xhr.responseText);
        console.log("Error:", error);
        console.log("Status:", status);
        Swal.fire("Error", "Submission failed.", "error");
      },
    });
  });
});
