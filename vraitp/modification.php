<?php
if(isset($_POST['update']))
{
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=rsma","Moi","Simplon974!");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $query = "UPDATE marsoin SET `nom`=:nom,`prenom`=:prenom,`age`=:age, `email`=:email WHERE `id` = :id";
    
    $pdoResult = $pdoConnect->prepare($query);

    $pdoExec = $pdoResult->execute(array(":nom"=>$nom,":prenom"=>$prenom,":age"=>$age, ":email"=>$email,":id"=>$id));

    if($pdoExec)
    {
        echo 'Data Updated';
    }else{
        echo 'ERROR Data Not Updated';
    }

}
?>
