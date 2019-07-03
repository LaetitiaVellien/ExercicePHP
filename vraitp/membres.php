<?php
$servername = "localhost";
$username = "Moi";
$password = "Simplon974!";
$dbname = "rsma";

$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$age = $_GET['age'];
$email = $_GET['email'];
$id = $_GET['id'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO marsoin (id,nom, prenom, age, email)
    VALUES (null, '$nom', '$prenom', '$age','$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully <br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
