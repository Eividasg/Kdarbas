<style>
    .mygtukoTarpas1 {
        margin-right: 20%;
    }
    .mygtukoTarpas2 {
        margin-left: 20%;
    }
</style>
<?php
//Gauna Filma
$dsn = "mysql:host=$host;dbname=$db";
$id = $_GET['id'];
$conn = new PDO($dsn, $username, $password);
if ($conn) {
try {
        $stmt = $conn->query("SELECT * FROM filmudb WHERE id =$id");
        $filmudb = $stmt->fetch();
    }
 catch (PDOException $e) {
    echo $e->getMessage();
}
//Istrina Filma
if (isset($_POST['taip'])) {
        try {
            $conn = new PDO($dsn, $username, $password);
            if ($conn) {
                try {
                    $sql = "DELETE FROM filmudb WHERE id=$id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    header("Location: ?page=visi");
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
if (isset($_POST['ne'])) {
    header("Location: ?page=visi");
}
}

?>
<h2>Ištrinti filmą "<?=$pavadinimas?>"</h2>
<form method="post">
    <div class="form-group text-center">
        <button name="taip" type="submit" class="btn btn-primary btn-lg shadow-sm mygtukoTarpas1">Taip</button>
        <button name="ne" type="submit" formaction="?page=visi" class="btn btn-primary btn-lg shadow-sm mygtukoTarpas2">Ne</button>
    </div>
</form>
