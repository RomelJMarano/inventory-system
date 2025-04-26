<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/remixicon.css" />
    <link rel="stylesheet" href="../assets/css/login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css"
      integrity="sha512-6p+GTq7fjTHD/sdFPWHaFoALKeWOU9f9MPBoPnvJEWBkGS4PKVVbCpMps6IXnTiXghFbxlgDE8QRHc3MU91lJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
    <link rel="website icon" type="png" href="img/logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login Page: Inventory System for Physical Science</title>
  </head>
  <body>
    <section class="login__section">
      <div class="login__card animate__animated animate__fadeInLeftBig">
        <div class="login__card-column column_first">
          <div class="img__container">
            <img src="../assets/images/image-removebg-preview (7).png" alt="" />
          </div>
          <div class="text__container">
            <h1>Login to Your Account</h1>
            <small
              >Enter your credentials to access the system. Only admins and
              faculty members are allowed.</small
            >
          </div>
        </div>
        <form action="" class="login__card-column column_second" id="loginForm">
          <h1>Hello, <strong>Again</strong></h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
          <div class="card__body">
            <div class="input__container">
              <i class="ri-user-fill"></i>
              <label for="">Username</label>
              <input
                type="text"
                name=""
                id="loginUsername"
                class="input__class"
                placeholder="Enter your Username"
              />
            </div>
            <div class="input__container">
              <i class="ri-lock-2-fill"></i>
              <label for=""> Password </label>
              <input
                type="password"
                name=""
                id="loginPassword"
                class="input__class"
                placeholder="Enter your Password"
              />
              <i class="fa-regular fa-eye"></i>
            </div>
          </div>
          <div class="login__btn-container">
            <input type="submit" value="Login" class="login__btn" />
          </div>
        </form>
      </div>
    </section>
    <script src="../assets/scripts/jquery/jquery-3.7.1.min.js"></script>
    <script src="../assets/scripts/auth.js"></script>
  </body>
</html>
