<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <link rel="stylesheet" href="assets/css/inventory.css" />
    <link rel="stylesheet" href="assets/css/sidepanel.css">
    <style>
 .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content {
    background-color: #fefefe;
    margin: 10% auto;
    padding: 20px;
    border: 1px solid #888;
    border-radius: 8px;
    width: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .close-button {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close-button:hover,
  .close-button:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }

  form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
  }

  .form-group {
    display: contents;
  }

  label {
    margin: 10px 0 5px;
  }

  input, select {
    padding: 12px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    width: 100%;
    font-size: 14px;
  }

  input::placeholder {
    color: #999;
  }

  button[type="submit"], #cancelAddEq {
    background: linear-gradient(90deg, #5443ed, #042380);
    color: white;
    padding: 12px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    width: 100%;
    font-size: 14px;
  }

  button[type="submit"]:hover, #cancelAddEq:hover {
    background: linear-gradient(90deg, #302b63, #24243e);
  }

  #cancelAddEq {
    background: linear-gradient(90deg, #E30B5C, #EE4B2B);
  }

  .row {
    display: flex;
    gap: 10px;
  }

  .file-upload-label {
    display: inline-block;
    background-color: #5443ed;
    color: white;
    padding: 12px 20px;
    border-radius: 8px;
    cursor: pointer;
    text-align: center;
    font-size: 14px;
    margin: 25px 0 11px 0;
  }

  .file-upload-label i {
    margin-right: 8px;
  }

  #fileName {
    display: inline-block;
    margin-left: 10px;
    font-size: 14px;
    color: #777;
  }
    </style>
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
            <h2>List of <strong>Equipments</strong> and <strong>Apparatus</strong></h2>
            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id cumque eaque quam sed officia minima dicta.</small>
            </div>
            <div class="btn-container">        
              <!-- Modal Trigger Button -->
              <div id="addItem" class="modal-trigger">
                Add Equipment
              </div>
              <button id="downloadBtn">
                <i class="fa-solid fa-download"></i>
              </button>
            </div>
          </div>
          <div class="table-wrapper">
          <table>
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Category</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#Item2001</td>
                    <td>Microscope</td>
                    <td>Lab Equipment</td>
                    <td>5</td>
                    <td><span class="status available">Available</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>#Item2002</td>
                    <td>Chemical Reagent Set</td>
                    <td>Chemicals</td>
                    <td>12</td>
                    <td><span class="status available">Available</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>#Item2003</td>
                    <td>Graduated Cylinder 250ml</td>
                    <td>Glassware</td>
                    <td>0</td>
                    <td><span class="status out-of-stock">Out of Stock</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>#Item2004</td>
                    <td>Pipette Set</td>
                    <td>Lab Tools</td>
                    <td>8</td>
                    <td><span class="status available">Available</span></td>
                    <td>
                        <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                        <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div> 


    <div id="addEquipmentModal" class="modal" style="display: none;">
      <div class="modal-content">
        <span class="close-button">&times;</span>
        <h2>Add Equipment</h2>
        <form id="addEquipmentForm">
          <div class="col">
            <div class="form-group">
              <label for="itemName">Item Name:</label><br>
              <input type="text" id="equipmentName" name="item_name" placeholder="Enter item name" required><br>
            </div>
            <div class="form-group">
              <label for="category">Category:</label> <br>
              <select id="equipmentCategory" name="item_category" required>
                <option value="Bunsen Burner">Bunsen Burner</option>
                <option value="Flask">Flask</option>
                <option value="Test Tubes">Test Tubes</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label class="file-upload-label" for="fileUpload">
                <i class="ri-upload-cloud-2-line"></i> Choose File
              </label>
              <input type="file" id="fileUpload" name="item_image" required hidden>
              <span id="fileName">No file chosen</span> <br>
            </div>
            <div class="form-group">
              <label for="quantity">Quantity:</label> <br>
              <input type="number" id="equipmentQuantity" name="item_quantity" placeholder="Enter quantity" required> 
            </div>
          </div>
          <div class="row">
            <button type="button" id="cancelAddEq">Cancel</button>
            <button type="submit" id="addEquipmentBtn">Submit</button>
          </div>
        </form>
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
    <script src="assets/js/inventory.js"></script>
  </body>
</html>
