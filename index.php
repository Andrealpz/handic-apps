
<?php 
    require_once "header.php";

    if (isset($_POST["email"]) && isset($_POST["mdp"])) {

        $sql = "SELECT * FROM utilisateurs WHERE email=:email";

        $dsn = "mysql:host=localhost;port=3306;dbname=handicappsAppli;charset=utf8";
        $dbUser = "root";
        $dbPassword = "";
        $lienDB = new PDO($dsn, $dbUser, $dbPassword);

        $email = "";
        $prenom = "";

        $query = $lienDB-> prepare($sql);

        $query-> bindParam(":email", $_POST["email"], PDO::PARAM_STR);

        // la requête s'execute-t'elle correctement ?
        if ($query-> execute()) {
            // Si oui
            // Traiter les données récupérées (fetch)
            $results = $query-> fetch();
            if ($results) {
                // Vérifie le mot de passe
                if (password_verify($_POST["mdp"], $results['mdp'])) {
                    // Stocke les informations de l'utilisateur en session
                    $_SESSION['email'] = $email;
                    $_SESSION['id'] = $results['id'];
                    $_SESSION['prenom'] = $results['prenom'];
                    $_SESSION['age'] = $results['age'];
                    $_SESSION['metier'] = $results['metier'];
                    $_SESSION['sexe'] = $results['sexe'];
                    $_SESSION['handicap'] = $results['handicap'];
                    $_SESSION['ville'] = $results['ville'];
                    $_SESSION['photo'] = $results['photo'];
                    $_SESSION['taille'] = $results['taille'];
                    $_SESSION['enfant'] = $results['enfant'];
                    $_SESSION['fumer'] = $results['fumer'];
                    $_SESSION['diplome'] = $results['diplome'];
                    $_SESSION['langue'] = $results['langue'];


                    header('location: profil.php');
                } else {
                    $errorMsg = 'Mot de passe incorrect';
                }
            } else {
                $errorMsg = 'Email non trouvé';
            }
        }
    }
    
?>



    <main id="accueil">
        <!-- <video autoplay muted loop src="VIDEO/Plage - 31633.mp4"></video> -->
        <form action="" method="post" class="form_connexion">
            <div class="containerConnexion">
                <img src="./IMG/logo.png" alt="">
                <input type="email" name="email" placeholder="Adresse mail" required>
                <input type="password" name="mdp" placeholder="Mot de passe" required>
                <button type="submit" class="connect">CONNEXION</button>
                <a href="./Inscription.php" class="inscri">INSCRIPTION</a>
            </div>
        </form>
    </main>

<?php 
    require_once "footer.php";
?>