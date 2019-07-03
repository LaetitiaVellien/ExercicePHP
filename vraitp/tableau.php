<form action="select.php" method="post">

<?php
$servername = "localhost";
$username = "Moi";
$password = "Simplon974!";
$dbname = "rsma";
$id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, nom, prenom, age, email FROM marsoin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th></th><th>ID</th><th>Nom</th><th>Prenom</th><th>Age</th><th>email</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

?>

<tr> <td><input type="checkbox" name="coord[]" value="<?php echo($row["id"]) ?>"></input> </td>
<td><?php echo($row["id"]) ?></td>
<td><?php echo($row["nom"]) ?></td>
<td> <?php echo($row["prenom"]) ?></td>
<td><?php echo($row["age"]) ?></td>
<td><?php echo($row["email"]) ?></td>
<td>  <a href="delete.php?id= <?php echo($row["id"]) ?>">supprimez </a> </td>
<td>  <a href="formulaire.php?id= <?php echo($row["id"]) ?>"> modifiez </a> </td>
</tr>
     



<?php
         
    }
?>
    <input type="submit" name="submit" value="submit"/>
</form>

<?php
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>