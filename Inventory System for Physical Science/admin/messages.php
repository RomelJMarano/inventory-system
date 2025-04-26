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
    <link rel="stylesheet" href="assets/css/inventory.css"/>
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
            <ion-icon name="notifications-outline"></ion-icon>
          </div>
        </div>
            <div class="banner-container">
          </div>
          <div class="header__">
  <div class="text">
    <h2>User <strong>Messages</strong></h2>
    <small>View and manage messages from users.</small>
  </div>
  <!-- <div class="btn-container">
    <button id="newMessageBtn">
      <i class="fa-solid fa-plus"></i> New Message
    </button>
  </div> -->
</div>
<div class="table-wrapper">
  <table>
    <thead>
      <tr>
        <th>Message ID</th>
        <th>Sender</th>
        <th>Subject</th>
        <th>Status</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>#MSG1001</td>
        <td>John Doe</td>
        <td>Inquiry about equipment</td>
        <td><span class="status unread">Unread</span></td>
        <td>2024-03-10</td>
        <td>
          <button class="view-btn"><i class="fa-solid fa-eye"></i></button>
        </td>
      </tr>
      <tr>
        <td>#MSG1002</td>
        <td>Jane Smith</td>
        <td>Request for assistance</td>
        <td><span class="status read">Read</span></td>
        <td>2024-03-08</td>
        <td>
          <button class="view-btn"><i class="fa-solid fa-eye"></i></button>
        </td>
      </tr>
      <tr>
        <td>#MSG1003</td>
        <td>Michael Johnson</td>
        <td>Feedback on service</td>
        <td><span class="status unread">Unread</span></td>
        <td>2024-02-28</td>
        <td>
          <button class="view-btn"><i class="fa-solid fa-eye"></i></button>
        </td>
      </tr>
      <tr>
        <td>#MSG1004</td>
        <td>Emily Brown</td>
        <td>Follow-up on request</td>
        <td><span class="status read">Read</span></td>
        <td>2024-02-20</td>
        <td>
          <button class="view-btn"><i class="fa-solid fa-eye"></i></button>
        </td>
      </tr>
    </tbody>
  </table>
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
    <script src="assets/js/messages.js"></script>
  </body>
</html>
