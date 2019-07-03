<?php
$servername = "localhost";
$username = "Moi";
$password = "Simplon974!";
$dbname = "rsma";
$id = $_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id FROM marsoin";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
   $id = $row['id'];
}
if(isset($_POST['coord'])){
    $var = $_POST['coord'];
    

foreach($var as $id){
    $sql =  "DELETE FROM marsoin WHERE id=$id";
    $result = $conn->query($sql);
    header('Location:tableau.php');
    }

}

?>
