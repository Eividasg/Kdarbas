<?php
$dsn = "mysql:host=$host; dbname=$db";
$id = $_GET['id'];
$conn = new PDO($dsn, $username, $password);
if ($conn) {
  try {
    $stmt = $conn->query("SELECT * FROM filmudb WHERE id =$id");
    $filmudb= $stmt->fetch();
    $stmt = $conn->query("SELECT * FROM zanrai");
 $zanrai = $stmt->fetchAll();
} catch (PDOException $e) {
    echo $e->getMessage();
}
if (isset($_POST['save'])) {
try {
  $conn = new PDO($dsn, $username, $password);
        if ($conn) {
          try {
$sql = "UPDATE filmudb SET pavadinimas='$_POST[pavadinimas]', rezisierius='$_POST[rezisierius]', metai='$_POST[metai]', reitingas='$_POST[reitingas]', aprasimas='$_POST[aprasimas]', zanrai='$_POST[zanrai]'  WHERE id=$id";
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
}
?>
<center><h2>Filmo korekcija</h2></center>
<form method="post">
    <div class="container text-center">
        <div class="form-group mb-4 mt-3">
            <input type="text" class="form-control" id="pavadinimas" name="pavadinimas" placeholder="<?=$filmudb['pavadinimas']?>">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="rezisierius" name="rezisierius" placeholder="<?=$filmudb['rezisierius']?>">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="metai" name="metai" placeholder="<?=$filmudb['metai']?>">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="reitingas" name="reitingas" placeholder="<?=$filmudb['reitingas']?>">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="aprasimas" name="aprasimas" placeholder="<?=$filmudb['aprasimas']?>">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="zanrai" name="zanrai" placeholder="<?=$filmudb['zanrai']?>">
        </div>
        <button id="save" type="submit" class="btn btn-primary mb-4" name="save"><i class="fas fa-cloud-upload-alt fa-lg"></i></button>
    </div>
</form>