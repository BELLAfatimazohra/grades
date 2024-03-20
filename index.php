<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="stylesheet" href="loginPage/style.css" />
    <script src="loginPage/script.js"></script>
    <title>ENSAH E-Services</title>
  </head>
  <body>
    <!-- <div class="curved1"></div>
    <div class="curved2"></div>-->
    <div class="curved"></div>
    <main>
      <div class="logoContainer">
        <img class="logo" src="public/images/logo-ensah.png" alt="ensah logo" />
      </div>
      <section class="loginSignup">
        <header class="loginTitle">
          <img
            class="grad-cap"
            src="public/images/grad-cap.svg"
            alt=""
          />e-Services
        </header>
        <form action="#" method="post">
          <div class="form-group">
            <input type="text" id="mail" name="mail" required />
            <label for="mail">E-mail</label>
            <img src="public/images/mail.svg" alt="" class="email" />
          </div>
          <div class="form-group">
            <input type="password" id="password" name="password" required />
            <label for="password">Password</label>
          </div>
          <label for="showPwd" class="checkbox-label">
            <input type="checkbox" id="showPwd" />
            <img src="public/images/visibility.svg" alt="" class="pwd" />
            <img src="public/images/visibilityOff.svg" alt="" class="pwdv" />
          </label>

          <input class="button" type="submit" value="Login" />
          <br /><br />
          <hr />
        </form>

        <p class="forgot">Forget Your Password?</p>
      </section>
    </main>
  </body>
</html>
