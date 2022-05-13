<?php
include ("./config.php");
?>

<form action="inscrire.php" method="post">

<input type="text" name="firstName" placeholder="nom">
<input type="text" name="lastname" placeholder="prenom">
<input type="email" name="email" placeholder="e-mail">
<input type="password" name="password" placeholder="Mot_de_passe">
<input type="password" name="password" placeholder="Confirmer_mot_de_passe">
<button type="submit" id="submit">Valider</button>
</form>