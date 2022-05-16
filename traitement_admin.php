<?php
include ("./config.php");
if(isset($_POST['submit'])){
$nom= $_POST['nom'];
 $prenom=$_POST['prenom'];
$email=$_POST['e_mail'];
$password= md5($_POST['passe']);
$cpassword=md5($_POST['cpasse']);
}
$sql="INSERT INTO `administrateur` ( `nom`, `prenom`, `e_mail`, `passe`)
 VALUES('$nom','$prenom', '$email','$password')";
if($password==$cpassword){
    $result= mysqli_query($conn,$sql);
    echo"mot de passe incorrect";
    header("Location: connecter.php");
}
  
    else{echo"inscription échouée";}


?>