<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Speedfix Garage</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
    }

    .left {
      flex: 1;
      background: url('garage.jpg') no-repeat center center;
      background-size: cover;
      position: relative;
    }

    .left img.logo {
      position: absolute;
      top: 30px;
      left: 30px;
      width: 120px;
    }

    .right {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
      background-color: #fff;
    }

    .login-form {
      width: 100%;
      max-width: 400px;
    }

    .login-form h2 {
      margin-bottom: 10px;
      font-size: 30px;
    }

    .login-form p {
      font-size: 14px;
      margin-bottom: 20px;
    }

    .login-form p a {
      color: #c0392b;
      text-decoration: none;
      font-weight: bold;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      font-size: 14px;
      margin-bottom: 6px;
      display: block;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: none;
      border-bottom: 2px solid #c0392b;
      font-size: 14px;
      outline: none;
    }

    .options {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
      margin-bottom: 20px;
    }

    .login-btn {
      width: 100%;
      background-color: #c0392b;
      color: white;
      padding: 12px;
      border: none;
      font-size: 16px;
      border-radius: 25px;
      cursor: pointer;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .social-login {
      margin-top: 30px;
      text-align: center;
    }

    .social-login p {
      font-size: 13px;
      margin-bottom: 10px;
    }

    .social-login-icons img {
      width: 30px;
      margin: 0 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="left">
    <img class="logo" src="logo.png" alt="Speedfix Garage Logo" />
  </div>
  <div class="right">
    <form class="login-form" action="dashboard.php" method="post">
      <h2>Sign in</h2>
      <p>If you don't have an account register<br>You can <a href="#">Register here !</a></p>

      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email address" required />
      </div>

      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your Password" required />
      </div>

      <div class="options">
        <label><input type="checkbox" name="remember" /> Remember me</label>
        <a href="#">Forgot Password ?</a>
      </div>

      <button class="login-btn" type="submit">Login</button>

      <div class="social-login">
        <p>or continue with</p>
        <div class="social-login-icons">
          <img src="facebook.png" alt="Facebook" />
          <img src="apple.png" alt="Apple" />
          <img src="google.png" alt="Google" />
        </div>
      </div>
    </form>
  </div>
</body>
</html>
