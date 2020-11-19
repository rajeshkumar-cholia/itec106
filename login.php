<?php
  include_once 'header.php';
?>

<style>

</style>

  <div class="login-form">
    <section>

      <form action="includes/login.inc.php" method="post">
        <h2 class="text-center">Log in</h2><hr>
        <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p class='alert alert-danger'><strong>Fill all fields!</strong></p>";
            }
            else if ($_GET["error"] == "wronglogin") {
              echo "<p class='alert alert-danger'><strong>Incorrect!</strong> Please check your username or password!</p>";
            }
          }
        ?>
        <div class="form-group">
          <input type="text" name="uid" class="form-control" placeholder="Username/Email" required="required">
        </div>
        <div class="form-group">
          <input type="password" name="pwd" class="form-control" placeholder="Password" required="required">
        </div>

            <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
      </form>
      <p class="text-center">Don't have an account? <a href="signup.php">Click here!</a></p>


    </section>
  </div>

<?php
  include_once 'footer.php';
?>
