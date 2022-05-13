<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/index.css">
    <title>cinquieme page</title>
</head>
<body>
  <?php
  include ("./config.php");
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
         <center> <h1> Fiche d'Enregistrement 
                </h1></center>
</div>


<center>
    <form action="" method="post">
     
     <div class="mb-3">
       <input type="text" id="disabledTextInput" class="form-control"  name="nom"placeholder="Nom">
     </div>
     <div class="mb-3">
       <input type="text" id="disabledTextInput" class="form-control" name="prenom" placeholder="Prenom">
     </div> 
      <div class="mb-3">
        <input type="tel" id="disabledTextInput" class="form-control" name="telephone" placeholder="telephone">
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Valider"> 
    </div>
 </form>
</center>
<?php
if(isset($_POST['submit'])){
$nom= $_POST['nom'];
 $prenom=$_POST['prenom'];
$tel=$_POST['telephone'];

}
$sql="INSERT INTO `tuteur` ( `nom`, `prenom`, `telephone`)
 VALUES('$nom','$prenom', '$tel')";
$result= mysqli_query($conn,$sql);
    if($result){echo"tuteur enregistré";}
    else{echo"tuteur non enregistré";}

?>


<div class="quatre"><span></span></div>
 <center><p>Unité de Formation et de Recherche/Sciences De la Santé 2022 Tous Droits Réservés</p></center>
    
</body>
</html>