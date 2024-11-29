<?php
require_once "header.php";
require_once "function.php";

if (isset($_POST['login'])) {
    login($_POST['email'],$_POST['pwd']);
}

?>
<form action="" method="post" class="form-user">
<div >
        <label for="pseudo"> PSEUDO</label>
        <input type="text" name="pseudo" id="pseudo" required placeholder="Saisir email">
    </div>
    <div >
        <label for="email"> Entrer votre email</label>
        <input type="email" name="email" id="email" required placeholder="Saisir email">
    </div>
    <div >
        <label for="pwd"> Entrer votre mot de passe</label>
        <input type="password" name="pwd" id="pwd" required placeholder="Saisir mot de passe">
    </div>

    <input type="submit" value="Connecte toi" name="login">
</form>


