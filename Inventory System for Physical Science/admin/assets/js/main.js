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

  const ctx = $("#reservationChart")[0].getContext("2d");

  const data = {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
    datasets: [
      {
        label: "Reservations",
        data: [10, 20, 5, 40, 30, 25],
        borderColor: "#05233f",
        backgroundColor: "rgba(5, 35, 63, 0.15)",
        borderWidth: 2,
        pointRadius: 5,
        pointBackgroundColor: "#05233f",
        pointBorderColor: "white",
        pointBorderWidth: 2,
        tension: 0.5,
      },
      {
        label: "Borrowing",
        data: [12, 15, 5, 10, 30, 20],
        borderColor: "#f39c12",
        backgroundColor: "rgba(243, 156, 18, 0.15)",
        borderWidth: 2,
        pointRadius: 5,
        pointBackgroundColor: "#f39c12",
        pointBorderColor: "white",
        pointBorderWidth: 2,
        tension: 0.5,
      },
    ],
  };

  const config = {
    type: "line",
    data: data,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      interaction: {
        mode: "index",
        intersect: false,
      },
      elements: {
        line: {
          borderJoinStyle: "round",
        },
      },
      plugins: {
        tooltip: {
          enabled: true,
          backgroundColor: "#05233f",
          titleFont: { family: "Poppins", size: 14, weight: "600" },
          bodyFont: { family: "Poppins", size: 12 },
          padding: 10,
        },
        legend: {
          display: false,
        },
      },
      scales: {
        x: {
          title: {
            display: false,
          },
          grid: {
            display: false,
          },
          ticks: {
            font: { family: "Poppins", size: 12 },
          },
        },
        y: {
          beginAtZero: true,
          grid: {
            color: "rgba(0, 0, 0, 0.08)",
            lineWidth: 1,
          },
          ticks: {
            font: { family: "Poppins", size: 12 },
            padding: 10,
          },
        },
      },
    },
  };

  new Chart(ctx, config);
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
