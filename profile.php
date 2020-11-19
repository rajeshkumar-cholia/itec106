<?php
  include_once 'header.php';
?>

<?php
if (isset($_SESSION["useruid"])) {
  echo "<p>this is profile page of " . $_SESSION["useruid"] . ". </p>";
}
else {
  header("location:index.php");
}

?>
<?php
  include_once 'footer.php';
?>
