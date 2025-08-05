<!DOCTYPE html>
<!-- Coding by CodingLab || www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk dan Registrasi Formulir Dengan Website</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  </head>
  <body>
    <!-- Header -->
    <header class="header">
      <nav class="nav">
        <a href="#" class="nav_logo">Website Buah</a>

       

        <button class="button" id="form-open">Masuk</button>
      </nav>
    </header>

    <!-- Home -->
    <section class="home">
      <div class="form_container">
        <i class="uil uil-times form_close"></i>
        <!-- Login From -->
        <div class="form login_form">
          <form action="ceklogin.php" method="post">
            <h2>Masuk</h2>

            <div class="input_box">
              <input type="txt" name="username" placeholder="Masukan username " required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" name="password" placeholder="Masukkan password " required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <div class="option_field">
              <span class="checkbox">
                <input type="checkbox" id="check" />
                <label for="check">Ingatkan Aku</label>
              </span>
              <a href="#" class="forgot_pw">Lupa Password?</a>
            </div>

            <button class="button">Masuk sekarang</button>

            <div class="login_signup">Tidak punya akun? <a href="#" id="signup">Daftar</a></div>
          </form>
        </div>

        <!-- Signup From -->
        <div class="form signup_form">
          <form action="#">
            <h2>Daftar</h2>

            <div class="input_box">
              <input type="email" placeholder="Enter your email" required />
              <i class="uil uil-envelope-alt email"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Create password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>
            <div class="input_box">
              <input type="password" placeholder="Confirm password" required />
              <i class="uil uil-lock password"></i>
              <i class="uil uil-eye-slash pw_hide"></i>
            </div>

            <button class="button">Daftar Sekarang/button>

            <div class="login_signup">Sudah Punya Akun <a href="#" id="login">Masuk</a></div>
          </form>
        </div>
      </div>
    </section>

    <script src="script.js"></script>
  </body>
</html>
