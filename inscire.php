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
    <title>troisieme page</title>
</head>
<body>
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
         <center> <h1>La fiche <br> d'Inscription 
              
          </h1></center>
</div>
<center>
    <form method="post" action="traitement_admin.php">
     <div class="mb-3">
       <input type="text" id="inputFirstName" class="form-control" name="nom" placeholder="nom"required>
     </div>
     <div class="mb-3">
       <input type="text" id="inputLastName" class="form-control" name="prenom" placeholder="prenom"required>
     </div>
     <div class="mb-3">
        <input type="email" id="inputEmail" class="form-control" name="e_mail" placeholder="e-mail"required>
      </div>
      <div class="mb-3">
        <input type="password" id="inputPassword" class="form-control" name="passe" placeholder="Mot_de_passe"required>
      </div>
      <div class="mb-3">
        <input type="password" id="inputPasswordConfirm" class="form-control" name="cpasse" placeholder="Confirmer_mot_de_passe"required>
      </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Valider"> 
 </form>
</center>
<div class="quatre"><span></span></div>
 <center><p>Unité de Formation et de Recherche/Sciences De la Santé 2022 Tous Droits Réservés</p></center>

    
</body>
</html>