<center><h2>Visi filmai</h2></center>
<?php
$dsn= "mysql:host=$host;dbname=$db";
try {
    $conn = new PDO($dsn,$username,$password);
    if ($conn){
        $stmt= $conn->query("SELECT * FROM filmudb");
        $filmai = $stmt->fetchAll();
        echo "<table class=\"table table-bordered\">
            <tr>
              <th scope=\"col\" class='text-center'>ID</th>
              <th scope=\"col\" class='text-center'>Pavadinimas</th>
              <th scope=\"col\" class='text-center'>Rezisierius</th>
              <th scope=\"col\" class='text-center'>Metai</th>
              <th scope=\"col\" class='text-center'>Reitingas</th>
              <th scope=\"col\" class='text-center'>Aprasimas</th>
              <th scope=\"col\" class='text-center'>Zanras</th>
              <th scope=\"col\" class='text-center'>edit-delete</th>
            </tr>";
        foreach ($filmai as $key => $value) {
            echo "<tr>
                <td class='text-center'> ".$value['id']."</td>
                <td class='text-center'> ".$value['pavadinimas']."</td>
                <td class='text-center'> ".$value['rezisierius']."</td>
                <td class='text-center'> ".$value['metai']."</td>
                <td class='text-center'> ".$value['reitingas']."</td>
                <td class='text-center'> ".$value['aprasimas']."</td>
                <td class='text-center'> ".$value['zanrai']."</td>
                <td class='text-center'> <a href='?page=Edit&id=".$value['id']."'>Edit</a><a href='?page=delete&id=".$value['id']."'>Delete</a></td>
                </tr>";
        }
        echo "</table>";
    }
}catch (PDOException $e) {
    echo $e->getMessage();
}
?>
