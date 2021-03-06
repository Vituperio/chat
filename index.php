<?php
  include('config.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8' />
    <!-- Style -->
    <link href="css/login.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="login_wrapper">
      <div class="pannello">
        <center>
          <form name="login-form" method="POST" action="elab_login.php">
            <div class="input_wrap">
              <label>Username:</label><br>
              <input type="text" name="user" id="user" placeholder="Username" maxlength="80" required>
            </div>
            <div class="input_wrap">
              <label>Password:</label><br>
              <input type="password" name="pass" id="pass" placeholder="Password" maxlength="80" required>
            </div>
            <br>
            <input type="submit" id="login" value="Login"> <input type="reset" id="reset" value="Reset">
          </form>
        </center>
      </div>
    </div>
  
    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
