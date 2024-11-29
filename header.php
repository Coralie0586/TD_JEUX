<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<header>
        <nav>
            <?php
            if (!isset($_SESSION['user'])) {
                session_start();
            }
                if (isset($_SESSION['user'])) {
                //    echo $_SESSION['user']['firstname'];
            ?>
            <ul>
                <li>
                    <a href='profil.php'> <img src='uploads<?php echo $_SESSION['user']?>'alt="" width=100>
                        <?php echo $_SESSION['user']['firstname']?>
                    </a>
                </li>
                <li>
                    <a href='logout.php'> Se déconnecter</a>
                </li>
            </ul>
                <?php
                } else {
                    echo "  <ul>   
                                    <li><h1>MICROMANIEE</h1></li>
                                    <li><a href='connexion.php'> Se connecter </a></li>
                                    <li><a href='registre.php'> S'inscrire </a> </li>
                            </ul>
                        ";
               }
               ?>
        </nav>
    </header>

    
    
</body>
</html>