<?php
// connecT a la BDD
function connectionToDB() {
    
    $username = "root";
    $password = "";
// PDO
    try {
       
        return  new PDO('mysql:host=localhost;dbname=jeux_video',"root","");
       
        
    } catch (Exception $exception) {
        die("Error" .$exception->getMessage());
    }   
}

// ajout utilisateur a la BDD
function create($pseudo, $email, $pwd) : bool {
    $db =connectionToDB();
    $sql =$db ->prepare(
        " INSERT INTO utilisateur (pseudo,email,pwd) VALUE (;pseudo, :email, :pwd)"
    );
// protechtion du MdP
    $hash = password_hash($pwd, PASSWORD_DEFAULT);

    $sql->bindValue(":pseudo", $pseudo);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":pwd", $hash);

    $sql->execute();
    if ($sql->rowcount() > 0){
        return true;
    }else{
        return false;
    }
}


?>