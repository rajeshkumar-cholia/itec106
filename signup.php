<?php
  include_once 'header.php';
?>
  </div>
    <section class="login-form" >

      <form action="includes/signup.inc.php" method="post">
        <h2 class="text-center">Sign up</h2><hr>

        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p class='alert alert-danger'><strong>Fill all fields!</strong></p>";
            }
            else if ($_GET["error"] == "invaliduid") {
              echo "<p class='alert alert-danger'><strong>Invalid username.</strong> Please choose proper username!</p>";
            }
            else if ($_GET["error"] == "invalidemail") {
              echo "<p class='alert alert-danger'><strong>Invalid email.</strong> Please choose proper email!</p>";
            }
            else if ($_GET["error"] == "passworddontmatch") {
              echo "<p class='alert alert-danger'><strong>Password didn't match.</strong> Please try again.</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
              echo "<p class='alert alert-danger'><strong>Something went wrong.</strong> Please try again!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
              echo "<p class='alert alert-danger'><strong>Username already taken!</strong> Please choose new one.</p>";
            }
            else if ($_GET["error"] == "none") {
              echo "<p class='alert alert-success'><strong>Success!</strong> Your request has been granted.</p>";
            }
          }
        ?>

        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Full name" required="required">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="email" placeholder="Email Address" required="required">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="uid" placeholder="Username" required="required">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="pwdrepeat" placeholder="Repeat password" required="required">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
        </div>
      </form>
      <p class="text-center">Already have an account? <a href="login.php">Login here!</a></p>

    </section>

<?php
  include_once 'footer.php';
?>
