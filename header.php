<?php
    session_name("handicapps");
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="JS/script.js" defer></script>
    <link rel="stylesheet" href="CSS/style.css">
    <title>Accueil</title>
</head>
<body>
    <header>
        <nav>
            <?php if(!isset($_SESSION["email"])) {
               ?>
               <div class="deconnexion">
                    <div class="connect_contact">
                        <a href="./index.php">CONNEXION</a>
                        <a href="./contact.php">CONTACT</a>
                    </div>
                  <img src="IMG/logo.png" alt="">
                </div>   
            <?php
            } else {
                ?><a href="./logout.php">DECONNEXION</a>
                    <a href="./profil.php">PROFIL</a>
                    <a href="./communaute.php">COMMUNAUTE</a>
                    <a href="./chat.php">MESSAGES</a>
                    <a href="./contact.php">CONTACT</a>
                    <img src="IMG/logo.png" alt="">
                <?php
            } ?>
            
        </nav>
    </header>