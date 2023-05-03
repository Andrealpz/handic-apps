<?php
    require_once "header.php";

    if (isset($_POST["email"]) && isset($_POST["mdp"]) && isset($_POST["mdp2"]) && isset($_POST["metier"]) && isset($_POST["handicap"]) && isset($_POST["age"]) && isset($_POST["ville"]) && isset($_FILES["photo"]) && $_FILES["photo"]["error"] == UPLOAD_ERR_OK
    ) {

        if ($_POST["mdp"] == $_POST["mdp2"]) {

            $email = $_POST["email"];
            $mdp = $_POST["mdp"];
            $metier = $_POST["metier"];
            $handicap = $_POST["handicap"];
            $age = $_POST["age"];
            $ville = $_POST["ville"];

            $target_dir = "./IMG/";

            $image_name = basename($_FILES["photo"]["name"]);
            $target_file = $target_dir . $image_name;
            // move_uploaded_file() peut empêcher les attaques de système de fichiers;
            move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

            $options = [
                'cost' => 12,
            ];
            $mdp = password_hash($_POST["mdp"], PASSWORD_BCRYPT, $options);

            if (isset($_POST["prenom"])) {
                $prenom = $_POST["prenom"];
            } else {
                $prenom = "";
            }
            
            if (isset($_POST["nom"])) {
                $nom = $_POST["nom"];
            } else {
                $nom = "";
            }

            
            $dsn = "mysql:host=localhost;port=3306;dbname=handicappsAppli;charset=utf8";
            $dbUser = "root";
            $dbPassword = "";
            $lienDB = new PDO($dsn, $dbUser, $dbPassword);

        
            $sql = "INSERT INTO utilisateurs (email, mdp, prenom, nom, metier, handicap, age, ville, photo) VALUES (:email, :mdp, :prenom, :nom, :metier, :handicap, :age, :ville, :photo);";

            $query = $lienDB-> prepare($sql);

            $query-> bindParam(":email", $email, PDO::PARAM_STR);
            $query-> bindParam(":mdp", $mdp, PDO::PARAM_STR);
            $query-> bindParam(":prenom", $prenom, PDO::PARAM_STR);
            $query-> bindParam(":nom", $nom, PDO::PARAM_STR);
            $query-> bindParam(":age", $age, PDO::PARAM_STR);
            $query-> bindParam(":metier", $metier, PDO::PARAM_STR);
            $query-> bindParam(":handicap", $handicap, PDO::PARAM_STR);
            $query-> bindParam(":ville", $ville, PDO::PARAM_STR);
            $query-> bindParam(":photo", $target_file, PDO::PARAM_STR);

            if ($query-> execute()) {
                $_SESSION["last-id"] = $lienDB-> lastInsertId();
                var_dump($_SESSION["last-id"]);
                header('Location: inscription_infos.php');
            }

          }
    }
?>



    <main id="inscription">
        <!-- <video autoplay muted loop src="VIDEO/Plage - 31633.mp4"></video> -->
        <form action="" method="post" enctype="multipart/form-data" class="form_inscri">
            <div class="containerInscription">
                <div class="infos">
                    <h1>INSCRIPTION</h1>
                <div class="man_woman">
                <div class="je_suis">
                    <p>Je suis :</p>
                    <i class="fa-sharp fa-solid fa-person-dress woman checked"></i>
                    <i class="fa-solid fa-person man checked"></i>
                </div>
                <div class="je_cherche">
                    <p>Je cherche :</p>
                    <i class="fa-sharp fa-solid fa-person-dress woman"></i>
                    <i class="fa-solid fa-person man"></i>
                </div>
                </div>
                <div class="nom_prenom">
                    <input type="text" name="prenom" placeholder="Prénom" required>
                    <input type="text" name="nom" placeholder="Nom" required>
                </div>
                    <input type="email" name="email" placeholder="Adresse mail" class="inscriMail" required>
                    <input type="password" name="mdp" placeholder="Mot de passe" class="inscriMDP" required>
                    <input type="password" name="mdp2" placeholder="Confirmation mot de passe" class="inscriMDP" required>
                <div class="date_metier">
                    <input type="date" name="age" placeholder="Date de naissance" class="date_naissance" required>
                    <input type="text" name="metier" placeholder="Métier" class="metier" required>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="date_metier">
                    <select name="handicap" id="handicap" required>
                        <option value="handicap">Handicap:</option>
                        <option value="Moteur">Moteur</option>
                        <option value="Visuel">Visuel</option>
                        <option value="Auditif">Auditif</option>
                        <option value="Psychique">Psychique</option>
                        <option value="Défficience intellectuelle">Défficience intellectuelle</option>
                        <option value="Maladie invalidante">Maladie invalidante</option>
                    </select>
                    <input type="text" name="ville" placeholder="Ville" class="ville" required>
                </div>
                    <input type="file" name="photo" id="img_profil">
                </form>
                    <button class="connect">INFOS PERSONNELS</button>
                </div>
            </div>
        </form>
    </main>

<?php 
    require_once "footer.php";
?>