<?php
include ("./config.php");
if(isset($_POST['submit'])){
$nom= $_POST['nom'];
 $prenom=$_POST['prenom'];
$email=$_POST['e_mail'];
$password= sha1($_POST['passe']);
$cpassword=sha1($_POST['cpasse']);
}
$sql="INSERT INTO `administrateur` ( `nom`, `prenom`, `e_mail`, `passe`)
 VALUES('$nom','$prenom', '$email','$password')";
$result= mysqli_query($conn,$sql);
if($password!=$cpassword){
    echo"mot de passe incorrect";}
else{
    if($result){echo"inscription réussie";
        header("Location: ./connecter.php");
    }

    else{echo"inscription échouée";}
}

?>