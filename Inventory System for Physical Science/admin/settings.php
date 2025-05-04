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
        <div class="banner-container"></div>
        <div class="header__">
        <div class="text">
            <h2><strong>Settings</strong></h2>
            <small>Manage your account preferences and system settings.</small>
        </div>
        </div>
            <div class="settings-container">
            <div class="settings-section">
            <div class="settings-section">
                <h3>Account Settings</h3>
                <div class="setting-item">
                    <label for="changUsername">Change Username</label>
                    <input type="text" id="changUsername" placeholder="Enter new username">
                </div>
                <div class="setting-item">
                    <label for="changePassword">Change Password</label>
                    <input type="password" id="changePassword" placeholder="Enter new password">
                </div>
                <div class="setting-item">
                 <button id="editLogin">Save Changes</button>
                </div>
            </div>

            <div class="settings-section">
                <h3>Maintenance Mode</h3>
                <div class="setting-item">
                    <label for="maintenance">Enable Maintenance Mode</label>
                    <input type="checkbox" id="maintenance">
                </div>
                <div class="setting-item">
                    <label>System Status</label>
                    <span class="status active">Online</span> 
                </div>
            </div>
            </div>
            <div class="btn-container">
                <button class="save-settings-btn">Save Changes</button>
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
    <script src="assets/js/settings.js"></script>
  </body>
</html>
