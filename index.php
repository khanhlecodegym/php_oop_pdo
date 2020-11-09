<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
  <div class="container">
    <!-- Login Form -->
    <div class="row justify-content-center wrapper" id="login-box">
      <div class="col-lg-10 my-auto">
        <div class="card-group myShadow">
          <div class="card rounded-left p-4" style="flex-grow: 1.4">
            <h1 class="text-center font-weight-bold text-primary">Sign Account</h1>
            <hr class="my-3">
            <form action="#" method="post" class="px-3">
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-envelope fa-lg"></i>
                  </span>
                </div>
                <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="Input Email" required>
              </div>
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key fa-lg"></i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Input Password" required>
              </div>
              <div class="form-group">
                <div class="custom-control custom-checkbox float-left">
                  <input type="checkbox" name="remember" id="customCheck" class="custom-control-input">
                  <label for="customCheck" class="custom-control-label">Remember me</label>
                </div>
                <div class="forgot float-right">
                  <a href="#" id="forgot-link">Forgot Password?</a>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="form-group">
                <input type="submit" value="Sign In" id="login-btn" class="btn btn-primary btn-lg btn-block myBtn">
              </div>
            </form>
          </div>
          <div class="card justify-content-center rounded-right myColor p-4">
            <h1 class="text-center font-weight-bolder text-white">Hello Guest!</h1>
            <hr class="my-3 bg-light myHr">
            <p class="text-center font-weight-bolder text-light lead">Enter your personal details and start your journey with us!</p>
            <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="register-link">Sign Up!</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Login Form -->

    <!-- Register Form -->
    <div class="row justify-content-center wrapper" id="register-box" style="display: none;">
      <div class="col-lg-10 my-auto">
        <div class="card-group myShadow">
          <div class="card justify-content-center rounded-left myColor p-4">
            <h1 class="text-center font-weight-bolder text-white">Welcome Back!</h1>
            <hr class="my-3 bg-light myHr">
            <p class="text-center font-weight-bolder text-light lead">To keep connected with us please login your personal info.!</p>
            <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="login-link">Sign In!</button>
          </div>
          <div class="card rounded-right p-4" style="flex-grow: 1.4">
            <h1 class="text-center font-weight-bold text-primary">Create Account</h1>
            <hr class="my-3">
            <form action="#" method="post" class="px-3" id="register-form">
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-user fa-lg"></i>
                  </span>
                </div>
                <input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Input Name" required>
              </div>
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-envelope fa-lg"></i>
                  </span>
                </div>
                <input type="email" name="email" id="remail" class="form-control rounded-0" placeholder="Input Email" required>
              </div>
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key fa-lg"></i>
                  </span>
                </div>
                <input type="password" name="cpassword" id="crpassword" class="form-control rounded-0" placeholder="Input Password" required minlength="6">
              </div>
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-key fa-lg"></i>
                  </span>
                </div>
                <input type="password" name="password" id="rpassword" class="form-control rounded-0" placeholder="Confirm Password" required minlength="6">
              </div>
              <div class="form-group">
                <input type="submit" value="Register" id="register-btn" class="btn btn-primary btn-lg btn-block myBtn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Register Form -->

    <!-- Forgot Password -->
    <div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
      <div class="col-lg-10 my-auto">
        <div class="card-group myShadow">
          <div class="card justify-content-center rounded-left myColor p-4">
            <h1 class="text-center font-weight-bolder text-white">Reset Password!</h1>
            <hr class="my-3 bg-light myHr">
            <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="back-link">Back!</button>
          </div>
          <div class="card rounded-right p-4" style="flex-grow: 1.4">
            <h1 class="text-center font-weight-bold text-primary">Forgot Your Password !!!</h1>
            <hr class="my-3">
            <p class="text-center font-weight-bolder text-primary">To reset your password, enter the registerd email address and we will send you rest instructions on your email</p>
            <form action="#" method="post" class="px-3" id="forgot-form">
              <div class="input-group input-group-lg form-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="far fa-envelope fa-lg"></i>
                  </span>
                </div>
                <input type="email" name="email" id="femail" class="form-control rounded-0" placeholder="Input Email" required>
              </div>
              <div class="form-group">
                <input type="submit" value="Reset Password" id="forgot-btn" class="btn btn-primary btn-lg btn-block myBtn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Forgot Password -->
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha512-iceXjjbmB2rwoX93Ka6HAHP+B76IY1z0o3h+N1PeDtRSsyeetU3/0QKJqGyPJcX63zysNehggFwMC/bi7dvMig==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <script type="text/javascript">
    $(document).ready(() => {
      $('#register-link').click(() => {
        $('#login-box').hide();
        $('#register-box').show();
      });

      $('#login-link').click(() => {
        $('#login-box').show();
        $('#register-box').hide();
      });

      $('#forgot-link').click(() => {
        $('#forgot-box').show();
        $('#login-box').hide();
      });

      $('#back-link').click(() => {
        $('#forgot-box').hide();
        $('#login-box').show();
      });
    });
  </script>
</body>

</html>