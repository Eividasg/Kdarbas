<h2 class="text-center">Prideti filma</h2>
<?php
if (isset($_POST['saugoti'])) {
    $dsn = "mysql:host=$host; dbname=$db";
    $conn = new PDO($dsn, $username, $password);
    if ($conn) {
        try {
            $sql = "INSERT INTO filmudb(pavadinimas,rezisierius,metai,reitingas,aprasimas,zanrai)
VALUES (:pavadinimas,:rezisierius,:metai,:reitingas,:aprasimas,:zanrai)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':pavadinimas', $_POST['pavadinimas'], PDO::PARAM_STR);
            $stmt->bindParam(':rezisierius', $_POST['rezisierius'], PDO::PARAM_STR);
            $stmt->bindParam(':metai', $_POST['metai'], PDO::PARAM_STR);
            $stmt->bindParam(':reitingas', $_POST['reitingas'], PDO::PARAM_STR);
            $stmt->bindParam(':aprasimas', $_POST['aprasimas'], PDO::PARAM_STR);
            $stmt->bindParam(':zanrai', $_POST['zanrai'], PDO::PARAM_STR);
            $stmt->execute();
            header('location:http://localhost/Eivis1/index.php?page=visi');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
<form method="post">
    <div class="container text-center">
        <div class="form-group mb-4 mt-3">
            <input type="text" class="form-control" id="pavadinimas" name="pavadinimas" placeholder="Iveskite pavadinima">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="rezisierius" name="rezisierius" placeholder="Iveskite rezisieriu">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="metai" name="metai" placeholder="Iveskite metus">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="reitingas" name="reitingas" placeholder="Iveskite reitinga">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="aprasimas" name="aprasimas" placeholder="Iveskite aprasima">
        </div>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="zanrai" name="zanrai" placeholder="Iveskite zanra">
        </div>
        <button id="save" type="submit" class="btn btn-primary mb-4" name="saugoti"><i class="fas fa-cloud-upload-alt fa-lg"></i></button>
    </div>
</form>
