<?php
  include_once 'header.php';
?>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <?php
          if (isset($_SESSION["useruid"])) {
            echo "<h1 class='display-4'>Hello there, " . $_SESSION["useruid"] . ". </p>";
          }
          else {
            echo "<h1 class='display-4'>Welcome to the login system!</p>";
          }
        ?>
        <p class="lead">I hope you like what we have made here.</p>
      </div>
    </div>
  </div>

  <hr>

  <div class="p-3 mb-2 bg-secondary text-white">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <hr>

  <div class="card-deck bg-secondary text-white m-auto p-3">
    <div class="card text-white bg-dark m-3">
        <img class="card-img-top" src="img/cvsu-silang.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Cavite State University, Silang Campus</h5>
        <p class="card-text">The premier University in historic Cavite recognized for excellence in the development of globally competitive and morally upright individuals.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card text-white bg-dark m-3">
        <img class="card-img-top" src="img/cvsu-silang.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Random stuffs</h5>
        <p class="card-text">Cavite State University shall provide excellent, equitable, and relevant educational opportunities in the arts, sciences and technology through quality instruction and responsive research and development activities.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

    <div class="card text-white bg-dark m-3">
        <img class="card-img-top" src="img/cvsu-logo.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
<?php
  include_once 'footer.php';
?>
