<center><h1>Zanru Valdymas</h1></center>
<?php
if (isset($_POST['saugoti'])) {
    $dsn = "mysql:host=$host; dbname=$db";
    try {
        $conn = new PDO($dsn, $username, $password);
        if ($conn) {
            try {
                $sql = "INSET INTO zanrai (pavadinimas) VALUES (?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$_POST['pavadinimas']]);
                echo "ok";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }
}
?>
<form method="post">
    <div class="container text-center ">
        <div class="form-group mb-4 mt-3 input-group-append input-group">
                <input type="text" class="form-control " id="pavadinimas" name="pavadinimas" placeholder="Iveskite pavadinima">
                <button id="save" type="submit" class="btn btn-primary mb-4" name="saugoti"><i class="fas fa-search fa-lg "></i></button>
        </div>
    </div>
</form>
