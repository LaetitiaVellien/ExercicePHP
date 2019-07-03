
<?php 
$id=$_GET['id'];
$servername = "localhost";
$username = "Moi";
$password = "Simplon974!";
$dbname = "rsma";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT id, nom, prenom, age, email FROM marsoin WHERE id=$id";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    $id2 = $row["id"];
    $nom = $row["nom"];
    $prenom = $row["prenom"];
    $age = $row["age"];
    $email = $row["email"];
    

}
 
?>

    <body>
    
        <form action="modification.php?id=<?php echo($id)?>" method="post">
    
            <input type="text" name="id" value="<?php echo($id2)?>"><br><br>

            <input type="text" name="nom"  value="<?php echo($nom)?>"><br><br>
            <input type="text" name="prenom"  value="<?php echo($prenom)?>"><br><br>
            <input type="number" name="age"  min="10" max="100" value="<?php echo($age)?>"><br><br>
            <input type="text" name="email"  value="<?php echo($email)?>"><br><br>
            <input type="submit" name="update" value="Update Data">
        </form>
    </body>

