<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/connecter.css">
    <title>deuxieme page</title>
</head>
<body>
  <?php

?>
    <div class="grand">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link"><h1 class="un">UJKZ <br><br>UFR/SDS</h1></a></a>
        </li>
        <img src="./images/gestion des etudiants.jpg" alt="">
        <li class="nav-item">
          <a class="nav-link"><h1 class="deux">Université Joseph Ki Zerbo <br><br>
            Unité de Formation et de Recherche <br>/Sciences De la Santé
                </h1></a></a>
        </li>
        
      </ul></div>
      <div class="quatre"><span></span></div>
      <div class="petit">
         <center> <h1>CONNEXION
          </h1></center>
</div>
 <center>
 <form method="post" action="">
      <div class="mb-3">
        <input type="text" id="disabledTextInput" class="form-control" name="e_mail" placeholder="E-mail">
      </div>
      <div class="mb-3">
      <input type="text" id="disabledTextInput" class="form-control" name="passe" placeholder="Mot de passe">
      </div>
      
       
      <input type="submit" name="submit" class="btn btn-primary" value="Valider">
  </form>
</center>

<div class="quatre"><span></span></div>
 <center><p>Unité de Formation et de Recherche/Sciences De la Santé 2022 Tous Droits Réservés</p></center>
 
 <?php
 include ("./config.php");
 
 if(isset($_POST['submit'])){
 $email=$_POST['e_mail'];
 $password=$_POST['passe'];
 }
 $sql="SELECT `e_mail`, `passe`FROM `administrateur`
  VALUES('$email','$password')";
 $result= mysqli_query($conn,$sql);
     if($result){echo"connexion réussie";}
     else{echo"connexion échouée";}
 ?>
</body>
</html>