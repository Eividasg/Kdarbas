<?php
$dsn = "mysql:host=$host; dbname=$db";
$id = $_GET['id'];
$conn = new PDO($dsn, $username, $password);
if ($conn) {
  try {
    $stmt = $conn->query("SELECT * FROM filmudb WHERE id =$id");
    $filmudb= $stmt->fetch();
  } catch (PDOException $e) {
      echo $e->getMessage();
  }
  if (isset($_POST['taip'])) {
  try {
    $conn = new PDO($dsn, $username, $password);
          if ($conn) {
            try {
              $sql = "DELETE FROM filmudb WHERE id=$id";
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              header('location:http://localhost/Eivis1/index.php?page=manage');
          } catch (PDOException $e) {
              echo $e->getMessage();
          }
          }
       }catch (PDOException $e) {
          echo $e->getMessage();
      }
  }
  if (isset($_POST['ne'])) {
    header("location:?page=manage");
  }
}
?>
<form method="post">
    <div class="container text-center">
        <button id="taip" type="submit" class="btn btn-primary mb-4" name="taip"><i class="fas fa-check-circle"></i></button>
        <button id="ne" type="submit" class="btn btn-primary mb-4" name="ne"><i class="fas fa-window-close"></i></button>
    </div>
</form>
