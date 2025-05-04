<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/reservation.css" />
    <link rel="stylesheet" href="css/remixicon.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css"
      integrity="sha512-6p+GTq7fjTHD/sdFPWHaFoALKeWOU9f9MPBoPnvJEWBkGS4PKVVbCpMps6IXnTiXghFbxlgDE8QRHc3MU91lJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <link rel="website icon" type="png" href="img/logo.png" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Apparatus List</title>
  </head>
  <body>
    <section>
      <div class="col">
        <div class="banner"></div>
        <div class="item__section-wrapper">
          <div class="categories__container">
            <button>All</button>
            <button>Test Tube</button>
            <button>Flask</button>
            <button>Microscope</button>
            <button>Beakers</button>
            <button>Sort by</button>
          </div>
          <h1>Science laboratory <strong> Apparatus List</strong></h1>
          <?php 

            require_once '../classes/dbh.class.php';
            require_once '../classes/equipment.class.php';
            require_once '../classes/equipmentView.class.php';

            $equipmentCard = new EquipmentView(); 
            $equipmentCard->showEquipmemtCards();

          ?>
        </div>
      </div>
      <div class="col item-list">
        <div class="item-list-header">
          <h1>Your Bag</h1>
        </div>
        <div class="item-list-body">
          <div class="item-con">
            <div class="col">
              <div class="img-container-item-bag">
                <img src="" alt="" />
              </div>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="col">
              <p>Lorem ipsum dolor sit.</p>
            </div>
          </div>
        </div>
        <div class="footer__buttons">
          <button class="btn cancel" id="backToLanding">Back</button>
          <button class="btn reset">Reset</button>
          <button class="btn submit" id="reservationNextBtn">Next</button>
        </div>
      </div>
    </section>

    <div class="modal-overlay" id="modalOverlay">
      <div class="modal animate__animated animate__zoomInDown" id="modal">
        <div class="modal-header">
          <h2><strong>Borrower's</strong> Form</h2>
          <i class="ri-close-circle-line"></i>
        </div>
        <div class="modal-content">
          <div class="column1">
            <div class="input__container">
              <label for="">Student's Full Name:</label>
              <input
                type="text"
                class="input__design"
                placeholder="Enter full name"
                id="studentFullName"
              />
            </div>
            <div class="input__container">
              <label for="">Course & Block:</label>
              <input
                type="text"
                class="input__design"
                placeholder="E.g. BSIT 3A"
                id="courseAndBlock"
              />
            </div>
            <div class="input__container">
              <label for="">Professor's or Instructor's Name:</label>
              <input
                type="text"
                class="input__design"
                placeholder="Enter professor's name"
                id="instructorName"
              />
            </div>
            <div class="input__container">
              <label for="">Subject:</label>
              <input
                type="text"
                class="input__design"
                placeholder="Enter subject"
                id="subject"
              />
            </div>
            <div class="input__container">
              <label for="">Email</label>
              <input
                type="text"
                class="input__design"
                placeholder="E.g. 09123456789"
                id="email"
              />
            </div>
            <div class="input__container">
              <label for="">Date of Borrowing:</label>
              <input type="date" class="input__design" id="reservationDate" />
            </div>
            <div class="input__container">
              <label for="">Start Time:</label>
              <input type="time" class="input__design" id="startTime" />
            </div>
            <div class="input__container">
              <label for="">End Time:</label>
              <input type="time" class="input__design" id="endTime"/>
            </div>
          </div>

          <div class="column2">
            <h3 class="apparatus-header">Science Lab Apparatus</h3>
            <div class="apparatus-list">
            <div class="apparatus-item header">
              <span class="name">Apparatus</span>
              <span class="quantity">Qty</span>
            </div>
            <!-- Dynamic items will be inserted here -->
          </div>

          </div>
        </div>

        <div class="modal-footer">
          <button id="cancelModal" class="close-modal">Cancel</button>
          <button id="submitBtn">Submit</button>
        </div>
      </div>
    </div>

    <script src="../assets/scripts/jquery/jquery-3.7.1.min.js"></script>
    <script src="../assets/scripts/reservation.js"></script>
  </body>
</html>
