<?php 
    require_once "header.php";

    $dsn = "mysql:host=localhost;port=3306;dbname=handicappsAppli;charset=utf8";
    $dbUser = "root";
    $dbPassword = "";
    $db = new PDO($dsn, $dbUser, $dbPassword);
    $id = strip_tags($_SESSION['id']);

    $sql = "SELECT * FROM utilisateurs WHERE `id`=:id;";
    $query = $db->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch();

    if(isset($_POST)){
        if(isset($_SESSION['id'])){

            if(isset($_POST['taille']) && !empty($_POST['taille'])){
                $taille = strip_tags($_POST['taille']);
                $sql = "UPDATE `utilisateurs` SET `taille`=:taille  WHERE `id`=:id;";
                $query = $db->prepare($sql);
                $query->bindValue(':taille', $taille, PDO::PARAM_INT);
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
                header('location: profil.php');
            }
            if(isset($_POST['handicap']) && !empty($_POST['handicap'])){
                $handicap = strip_tags($_POST['handicap']);
                $sql = "UPDATE `utilisateurs` SET `handicap`=:handicap  WHERE `id`=:id;";
                $query = $db->prepare($sql);
                $query->bindValue(':handicap', $handicap, PDO::PARAM_STR);
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
                header('location: profil.php');
            }
            if(isset($_POST['enfant']) && !empty($_POST['enfant'])){
                $enfant = strip_tags($_POST['enfant']);
                $sql = "UPDATE `utilisateurs` SET `enfant`=:enfant  WHERE `id`=:id;";
                $query = $db->prepare($sql);
                $query->bindValue(':enfant', $enfant, PDO::PARAM_STR);
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
                header('location: profil.php');
            }
            if(isset($_POST['fumer']) && !empty($_POST['fumer'])){
                $fumer = strip_tags($_POST['fumer']);
                $sql = "UPDATE `utilisateurs` SET `fumer`=:fumer  WHERE `id`=:id;";
                $query = $db->prepare($sql);
                $query->bindValue(':fumer', $fumer, PDO::PARAM_STR);
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
                header('location: profil.php');
            }
            if(isset($_POST['langue']) && !empty($_POST['langue'])){
                $langue = strip_tags($_POST['langue']);
                $sql = "UPDATE `utilisateurs` SET `langue`=:langue  WHERE `id`=:id;";
                $query = $db->prepare($sql);
                $query->bindValue(':langue', $langue, PDO::PARAM_STR);
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
                header('location: profil.php');
            }
            if(isset($_POST['diplome']) && !empty($_POST['diplome'])){
                $diplome = strip_tags($_POST['diplome']);
                $sql = "UPDATE `utilisateurs` SET `diplome`=:diplome  WHERE `id`=:id;";
                $query = $db->prepare($sql);
                $query->bindValue(':diplome', $diplome, PDO::PARAM_STR);
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
                header('location: profil.php');
            }


            
            
            // $handicap = strip_tags($_POST['handicap']);
            // $enfant = strip_tags($_POST['enfant']);
            // $fumer = strip_tags($_POST['fumer']);
            // $langue = strip_tags($_POST['langue']);
            // $diplome = strip_tags($_POST['diplome']);
    
            // $sql = "UPDATE `utilisateurs` SET `taille`=:taille, `handicap`=:handicap, `enfant`=:enfant, `fumer`=:fumer, `langue`=:langue, `diplome`=:diplome WHERE `id`=:id;";
    
            // $query = $db->prepare($sql);
    
            
            // $query->bindValue(':handicap', $handicap, PDO::PARAM_STR);
            // $query->bindValue(':enfant', $enfant, PDO::PARAM_INT);
            // $query->bindValue(':fumer', $fumer, PDO::PARAM_INT);
            // $query->bindValue(':langue', $langue, PDO::PARAM_INT);
            // $query->bindValue(':diplome', $diplome, PDO::PARAM_INT);
            
    
            // $query->execute();
            // $result = $query->fetchAll();
        }
    }
?>


<main class="communaute_fond">
    <div class="couverturePhotoProfil">
        <img src="IMG/couple-1779066.jpg" alt="">
    </div>
    <div class="photoProfil">
        <form action="" method="post"></form>
        <img src="<?= $_SESSION['photo']?>" alt="">
        <?php 
            $age = substr($_SESSION['age'],0,4);
            $age = intval($age);
            $age = 2023-$age;
        ?>
        <h3><?= $_SESSION['prenom']?>, <?= $age ?></h3>
    <div class="infos">
        <p><?= $_SESSION['metier'] ?></p>
        <p><?= $_SESSION['ville'] ?></p>
    </div>
    </div>
    <div class="profil_photos_centres">
        <div class="profil">
            <i class="fa-solid fa-user"></i>
            <a href="profil.php"><h2>Profil</h2></a>
        </div>
        <div class="profil">
            <i class="fa-solid fa-image"></i>
            <a href="photos.php"><h2>Photos</h2></a>
        </div>
        <div class="profil">
            <i class="fa-solid fa-headphones"></i>
            <a href="profil_centres_dinterets.php"><h2>Centres d'interêts</h2></a>
        </div>
    </div>
            <div class="infos-profil">
            <div class="container_infos">
                
            <form class="inf" method="post">
            <div class="os">
                <i class="fa-solid fa-ruler"></i>
                <input type="number" name="taille" placeholder="Taille" class="inputInfos" 
                min="60" max="220" value="<?= $result['taille'] ?>" disabled>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider">    
            </form>
            <form class="inf" method="post">
            <div class="os">
                <i class="fa-brands fa-accessible-icon"></i>
                <select name="handicap" id="handicap" class="inputInfos" disabled>
                        <option value="<?= $result['handicap'] ?>"><?= $result['handicap'] ?></option>
                        <option value="Moteur">Moteur</option>
                        <option value="Visuel">Visuel</option>
                        <option value="Auditif">Auditif</option>
                        <option value="Psychique">Psychique</option>
                        <option value="Défficience intellectuelle">Défficience intellectuelle</option>
                        <option value="Maladie invalidante">Maladie invalidante</option>
                </select>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider"> 
            </form>
            <form class="inf" method="post">
            <div class="os">
                <i class="fa-solid fa-baby-carriage"></i>
                <select name="enfant" class="inputInfos" disabled>
                        <option value="<?= $result['enfant'] ?>"><?= $result['enfant'] ?></option>
                        <option value="Peut-être">Peut-être</option>
                        <option value="J'en ai déjà">J'en ai déjà</option>
                        <option value="Je ne sais pas">Je ne sais pas</option>
                </select>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider"> 
            </form>
            </div>
            <div class="container_infos">
            <form class="inf" method="post">
            <div class="os">
                <i class="fa-solid fa-smoking"></i>
                <select name="fumer" class="inputInfos" disabled>
                        <option value="<?= $result['fumer'] ?>"><?= $result['fumer'] ?></option>
                        <option value="Je ne fume pas">Je ne fume pas</option>
                        <option value="Plusieurs fois par jours">Plusieurs fois par jours</option>
                        <option value="Rarement">Rarement</option>
                </select>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider"> 
            </form>
            <form class="inf" method="post">
            <div class="os">
                <i class="fa-sharp fa-solid fa-language"></i>
                <select name="langue" class="inputInfos" disabled>
                        <option value="<?= $result['langue'] ?>"><?= $result['langue'] ?></option>
                        <option value="Français">Français</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Espagnole">Espagnole</option>
                        <option value="Italiens">Italiens</option>
                        <option value="Allemand">Allemand</option>
                </select>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider"> 
            </form>
            <form class="inf" method="post">
            <div class="os">
                <i class="fa-solid fa-award"></i>
                <select name="diplome" class="inputInfos" disabled>
                        <option value="<?= $result['diplome'] ?>"><?= $result['diplome'] ?></option>
                        <option value="Sans diplôme">Sans diplôme</option>
                        <option value="Brevet des collèges">Brevet des collèges</option>
                        <option value="Bac ou +">Bac ou +</option>
                </select>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider"> 
            </form>
            </div>
        </div>
</main>

<?php 
    require_once "footer.php";
?>