<!-- <?php
  // if(!empty($_POST["send"])) {
  //   $nom_prenom = $_POST["nom_prenom"];
  //   $email = $_POST["email"];
  //   $message = $_POST["message"];
  //   $toEmail = "emylpz760@gmail.com";
  //   $mailHeaders = "From: " . $nom_prenom . "<". $email .">\r\n";
    
  //   if(mail($toEmail,$message, $mailHeaders)) {
  //     $mail_msg = "Vos informations de contact ont été reçues avec succés.";
  //     $type_mail_msg = "success";
  //   }else{
  //     $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
  //     $type_mail_msg = "error";
  //   }
  // }
?> -->

<?php
  if(!empty($_POST["send"])) {
    $nom_prenom = $_POST["nom_prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $dsn = "mysql:host=localhost;port=3306;dbname=handicappsAppli;charset=utf8";
    $dbUser = "root";
    $dbPassword = "";
    $lienDB = new PDO($dsn, $dbUser, $dbPassword);

    $sql = "INSERT INTO contact (nom_prenom, email, message) VALUES (:nom_prenom, :email, :message);";
    $query = $lienDB-> prepare($sql);

    $query-> bindParam(":nom_prenom", $nom_prenom, PDO::PARAM_STR);
    $query-> bindParam(":email", $email, PDO::PARAM_STR);
    $query-> bindParam(":message", $message, PDO::PARAM_STR);

    if ($query-> execute()) {
      header('Location: index.php');
    }
  }
?>

<?php 
    require_once "header.php";
?>

    <main>
        
        <div class="container_contact">
            <img src="./IMG/illustr1.png" alt="" class="img-contact">
            <div class="bloc_contact">
                <form action="" method="post">
                    <input type="text" name="nom_prenom" placeholder="Nom Prénom">
                    <input type="email" name="email" placeholder="Email">
                    <textarea type="text" name="message" placeholder="Message" id="msg"></textarea>
                    <input type="submit" name="send" value="Envoyer" class="btn-envoyer">
                    <div id="statusMessage">
                        <?php if (! empty($mail_msg)) { ?>
                        <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                        <?php } ?>
                    </div>
                </form>
            </div>    
        </div>
    </main>

<?php 
    require_once "footer.php";
?>