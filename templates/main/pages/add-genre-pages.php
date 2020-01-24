<center><h2>Prideti Nauja Zanra</h2></center>
<?php
if (isset($_POST['save'])) {
    $dsn = "mysql:host=$host; dbname=$db";
        $conn = new PDO($dsn, $username, $password);
        if ($conn) {
            try {
                $sql = "INSERT INTO zanrai(zanrai)
VALUES (:zanrai)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':zanrai', $_POST['zanrai'], PDO::PARAM_STR);
                $stmt->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
                header('location:http://localhost/Eivis1/index.php?page=visi');
            }
        }
    }
?>
<form method="post">
    <div class="container text-center ">
        <div class="form-group mb-4 mt-3 input-group-append input-group">
            <input type="text" class="form-control " id="zanrai" name="zanrai" placeholder="Iveskite pavadinima">
        </div>
        <button id="save" type="submit" class="btn btn-primary mb-4" name="save"><i class="fas fa-file-import"></i></button>
    </div>
</form>
