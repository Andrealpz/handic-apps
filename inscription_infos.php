<?php 
    // session_name("handicapps");
    // session_start();

    require_once "header.php";

    if (isset($_POST["taille"]) && isset($_POST["enfant"])
    && isset($_POST["fumer"]) && isset($_POST["langue"])
    && isset($_POST["diplome"])) { 

        

            $taille = $_POST["taille"];
            $enfant = $_POST["enfant"];
            $fumer = $_POST["fumer"];
            $langue = $_POST["langue"];
            $diplome = $_POST["diplome"];

            
            $dsn = "mysql:host=localhost;port=3306;dbname=handicappsAppli;charset=utf8";
            $dbUser = "root";
            $dbPassword = "";
            $lienDB = new PDO($dsn, $dbUser, $dbPassword);

            //$sql2 = "SELECT 'id' FROM utilisateurs ORDER BY id DESC LIMIT 1";
            $last_id = $_SESSION["last-id"];

            $sql = "UPDATE `utilisateurs` SET `taille`=:taille, `enfant`=:enfant, `fumer`=:fumer, `langue`=:langue, `diplome`=:diplome WHERE id = :last_id";

            $query = $lienDB-> prepare($sql);

            $query-> bindParam(":taille", $taille, PDO::PARAM_STR);
            $query-> bindParam(":enfant", $enfant, PDO::PARAM_STR);
            $query-> bindParam(":fumer", $fumer, PDO::PARAM_STR);
            $query-> bindParam(":langue", $langue, PDO::PARAM_STR);
            $query-> bindParam(":diplome", $diplome, PDO::PARAM_STR);
            $query-> bindParam(":last_id", $last_id, PDO::PARAM_INT);

            var_dump($query-> execute());
            if ($query-> execute()) {
                $results = $query-> fetch();
                if ($results) {
                    if ($results['id']) {
                        // Stocke les informations de l'utilisateur en session
                        $_SESSION['id'] = $results['id'];
                        $_SESSION['taille'] = $taille;
                        $_SESSION['enfant'] = $enfant;
                        $_SESSION['fumer'] = $fumer;
                        $_SESSION['langue'] = $langue;
                        $_SESSION['diplome'] = $diplome;
                       
                        header('location: index.php');
                    } else {
                        $errorMsg = 'Mot de passe incorrect';
                    }
                } else {
                    $errorMsg = 'Email non trouvé';
                }
            }
            }
?>

<main id="inscription">
        <form action="" method="post" enctype="multipart/form-data" class="inscription_infos">
            <div class="containerInscription">
                <div class="infos">
                    <h1>INFOS PROFIL</h1>
                </div>
                    <label for="taille">Ta taille :</label>
                        <input type="number" name="taille" placeholder="Taille" required>
                    <label for="taille">Veux-tu des enfants ? :</label>
                        <select name="enfant" id="">
                            <option value="Peut-être">Peut-être</option>
                            <option value="J'en ai déjà">J'en ai déjà</option>
                            <option value="Je ne sais pas">Je ne sais pas</option>
                        </select>
                    <label for="fumer">A quelle fréquence fumes-tu ? :</label>
                        <select name="fumer" id="">
                                <option value="Je ne fume pas">Je ne fume pas</option>
                                <option value="Plusieurs fois par jours">Plusieurs fois par jours</option>
                                <option value="Rarement">Rarement</option>
                        </select>
                    <label for="langue">Quelle est ta langue natale ? :</label>
                        <select name="langue" id="">
                                <option value="Français">Français</option>
                                <option value="Anglais">Anglais</option>
                                <option value="Rarement">Espagnole</option>
                                <option value="Rarement">Italiens</option>
                                <option value="Rarement">Allemand</option>
                        </select>
                    <label for="diplome">Quel est ton niveau d'étude ? :</label>
                        <select name="diplome" id="">
                                <option value="Sans diplôme">Sans diplôme</option>
                                <option value="Brevet des collèges">Brevet des collèges</option>
                                <option value="Bac ou +">Bac ou +</option>
                        </select>
                    <button class="connect">Inscrivez-vous</button>
                </div>
            </div>
        </form>
    </main>

<?php 
    require_once "footer.php";
?>