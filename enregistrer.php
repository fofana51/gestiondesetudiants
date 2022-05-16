<?php 

include ("./config.php");
?>



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

if(isset($_POST['submit'])){
  $nom= $_POST['nom'];
   $prenom=$_POST['prenom'];
   $email=$_POST['email'];
   $date=$_POST['date_naissance'];
  $tel=$_POST['telephone'];
  $niveau=$_POST['niveau_etude'];
  
  }
  $sql="INSERT INTO `etudiante` ( `nom`, `prenom`,`e_mail`,`prenom`, `date_naissance`,`niveau_etude`)
   VALUES('$nom','$prenom','$email','$date','$tel','$niveau')";
  $result= mysqli_query($conn,$sql);
      if($result){echo"etudiant enregistré";}
      else{echo"etudiant non enregistré";}

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
       <input type="text" id="disabledTextInput" class="form-control" name="nom" placeholder="Nom">
     </div>
     <div class="mb-3">
       <input type="text" id="disabledTextInput" class="form-control" name="prenom"  placeholder="Prenom">
     </div>
     <div class="mb-3">
        <input type="email" id="disabledTextInput" class="form-control" name="email"  placeholder="E-mail">
      </div>
      <div class="mb-3">
        <input type="date" id="disabledTextInput" class="form-control" name="date_naissance"  placeholder="Date naissance">
      </div>
      <div class="mb-3">
        <input type="tel" id="disabledTextInput" class="form-control" name="telephone"  placeholder="telephone">
      </div>
      <div class="mb-3">
        <input type="text" id="disabledTextInput" class="form-control" name="niveau_etude"  placeholder="Niveau etude">
      </div>
      <div id="">
      <div class="mb-3">
       <select>
         <option value="id_tuteur"></option>
       </select>
      </div>
      <a href="./tuteur.php"> <h4 id="tuteur">ajouter_tuteur</h4></a> 
    </div>
      
     <button type="submit" name="submit"class="btn btn-primary">Valider</button> 
    </div>
 </form>
</center>


<div class="quatre"><span></span></div>
 <center><p>Unité de Formation et de Recherche/Sciences De la Santé 2022 Tous Droits Réservés</p></center>
    
</body>
</html>