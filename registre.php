
<?php

require_once "header.php";
require_once "functions.php";

if (isset($_POST['submit'])) {


    if (checkEmail($_POST['email'])) {
        echo " Mail existe deja";
    } else {
        
        if (create($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['pwd'])) {
         echo "Felicitation, votre compte a été bien crée";
         
         } else {
             echo "OUPS, votre compte PAS crée";
         }
    }
    
}



?>
<form action="" method="post">
    <div class="info">
        <label for="pseudo"> Ton Pseudo</label>
        <input type="text" name="pseudo" id="pseudo" required placeholder="Pseudo">
    </div>
    <div class="info">
        <label for="name"> Entrer votre nom</label>
        <input type="text" name="name" id="name" required placeholder="Saisir nom">
    </div>
    <div class="info">
        <label for="email"> Entrer votre email</label>
        <input type="email" name="email" id="email" required placeholder="Saisir email">
    </div>
    <div class="info">
        <label for="pwd"> Entrer votre mot de passe</label>
        <input type="password" name="pwd" id="pwd" required placeholder="Saisir mot de passe">
    </div>

    <input type="submit" value="Créer mon compte" name="submit">
</form>
