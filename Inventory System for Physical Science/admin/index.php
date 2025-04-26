<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatibl  e" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Side: Inventory System</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/sidepanel.css"/>
  </head>
  <body>
    <div class="container">
      <?php
        require_once 'assets/sidepanel/sidepanel.php';
      ?>
      <div class="main">
        <div class="topbar">
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>
          <div class="notification">
            <ion-icon name="notifications-outline" class="notification__btn"></ion-icon>
          </div>
        </div>
        <div class="dashboard__card-container">
          
          <div class="dashboard__card">
            <div class="dashboard__icon"><i class="fas fa-boxes"></i></div>
            <div class="dashboard__content">
              <h3>Total Equipment</h3>
              <p>150 Items</p>
            </div>
          </div>

          <div class="dashboard__card">
            <div class="dashboard__icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <div class="dashboard__content">
              <h3>Available Equipment</h3>
              <p>120 Items</p>
            </div>
          </div>

          <div class="dashboard__card">
            <div class="dashboard__icon">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="dashboard__content">
              <h3>Borrowed Equipment</h3>
              <p>30 Items</p>
            </div>
          </div>

          <div class="dashboard__card">
            <div class="dashboard__icon"><i class="fas fa-clock"></i></div>
            <div class="dashboard__content">
              <h3>Pending Reservations</h3>
              <p>5 Requests</p>
            </div>
          </div>

          <div class="dashboard__card alt-design">
            <div class="dashboard__icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="dashboard__content">
              <h3>Total Reservations</h3>
              <p>10 Reservations</p>
            </div>
          </div>

          <div class="dashboard__card alt-design">
            <div class="dashboard__icon">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="dashboard__content">
              <h3>Overdue Returns</h3>
              <p>3 Items</p>
            </div>
          </div>

          <div class="dashboard__card alt-design">
            <div class="dashboard__icon"><i class="fas fa-tools"></i></div>
            <div class="dashboard__content">
              <h3>Damaged Equipment</h3>
              <p>2 Items</p>
            </div>
          </div>

          <div class="dashboard__card alt-design">
            <div class="dashboard__icon"><i class="fas fa-user"></i></div>
            <div class="dashboard__content">
              <h3>Total Students</h3>
              <p>50 Sucessfull</p>
            </div>
          </div>
        </div>
        <div class="graph__actions-container">
          <div class="graph__container">
            <div class="graph__header">
              <h3>Reservation & Borrowing Trends</h3>
              <div class="right__side">
                <div class="legend">
                  <span class="legend-item">
                    <span class="legend-color reserve"></span> Reservations
                  </span>
                  <span class="legend-item">
                    <span class="legend-color borrow"></span> Borrowing
                  </span>
                </div>
                <select id="yearSelect">
                  <option value="2025" selected>2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                </select>
              </div>
            </div>
            <canvas id="reservationChart"></canvas>
          </div>

          <div class="action__container">
            <div class="action__header">
              <h3>Recent Actions</h3>
              <div class="right__side">
                <p>View All</p>
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
              </div>
            </div>
            <div class="card__body">
              <table>
                <thead>
                  <th>Name</th>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../scripts/jQuery/jquery-3.7.1.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
