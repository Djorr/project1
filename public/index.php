<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <form action="action_page.php" method="post">

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <span class="psw"><a href="signup.php">Register</span><br>
        <span class="psw"><a href="lostpsw.php">Forgot password?</a></span>
      </div>
    </form>
  </body>
</html>