<?php 
    require_once "header.php";

    // if(isset($_POST)){
    //     if(isset($_POST['id']) && !empty($_POST['id'])
    //         && isset($_POST['taille']) && !empty($_POST['taille'])
    //         && isset($_POST['handicap']) && !empty($_POST['handicap'])
    //         && isset($_POST['enfant']) && !empty($_POST['enfant'])
    //         && isset($_POST['fumer']) && !empty($_POST['fumer'])
    //         && isset($_POST['langue']) && !empty($_POST['langue'])
    //         && isset($_POST['diplome']) && !empty($_POST['diplome'])){

    //         $id = strip_tags($_GET['id']);
    //         $taille = strip_tags($_POST['taille']);
    //         $handicap = strip_tags($_POST['handicap']);
    //         $enfant = strip_tags($_POST['enfant']);
    //         $fumer = strip_tags($_POST['fumer']);
    //         $langue = strip_tags($_POST['langue']);
    //         $diplome = strip_tags($_POST['diplome']);
    
    //         $sql = "UPDATE `utilisateurs` SET `taille`=:taille, `handicap`=:handicap, `enfant`=:enfant, `fumer`=:fumer, `langue`=:langue, `diplome`=:diplome WHERE `id`=:id;";
    
    //         $query = $db->prepare($sql);
    
    //         $query->bindValue(':taille', $taille, PDO::PARAM_STR);
    //         $query->bindValue(':handicap', $handicap, PDO::PARAM_STR);
    //         $query->bindValue(':enfant', $enfant, PDO::PARAM_INT);
    //         $query->bindValue(':fumer', $fumer, PDO::PARAM_INT);
    //         $query->bindValue(':langue', $langue, PDO::PARAM_INT);
    //         $query->bindValue(':diplome', $diplome, PDO::PARAM_INT);
    //         $query->bindValue(':id', $id, PDO::PARAM_INT);
    
    //         $query->execute();
    //         $result = $_SE->fetchAll();
    //     }
    // }
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
                
            <form class="inf">
            <div class="os">
                <i class="fa-solid fa-ruler"></i>
                <input type="number" name="taille" placeholder="Taille" class="inputInfos" 
                min="60" max="220" value="<?= $_SESSION['taille'] ?>" disabled>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider">    
            </form>
            <form class="inf">
            <div class="os">
                <i class="fa-brands fa-accessible-icon"></i>
                <select name="handicap" id="handicap" class="inputInfos" disabled>
                        <option value="<?= $_SESSION['handicap'] ?>"><?= $_SESSION['handicap'] ?></option>
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
            <form class="inf">
            <div class="os">
                <i class="fa-solid fa-baby-carriage"></i>
                <select name="enfant" class="inputInfos" disabled>
                        <option value="<?= $_SESSION['enfant'] ?>"><?= $_SESSION['enfant'] ?></option>
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
            <form class="inf">
            <div class="os">
                <i class="fa-solid fa-smoking"></i>
                <select name="fumer" class="inputInfos" disabled>
                        <option value="<?= $_SESSION['fumer'] ?>"><?= $_SESSION['fumer'] ?></option>
                        <option value="Je ne fume pas">Je ne fume pas</option>
                        <option value="Plusieurs fois par jours">Plusieurs fois par jours</option>
                        <option value="Rarement">Rarement</option>
                </select>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider"> 
            </form>
            <form class="inf">
            <div class="os">
                <i class="fa-sharp fa-solid fa-language"></i>
                <select name="langue" class="inputInfos" disabled>
                        <option value="<?= $_SESSION['langue'] ?>"><?= $_SESSION['langue'] ?></option>
                        <option value="Français">Français</option>
                        <option value="Anglais">Anglais</option>
                        <option value="Rarement">Espagnole</option>
                        <option value="Rarement">Italiens</option>
                        <option value="Rarement">Allemand</option>
                </select>
            </div>
                <input type="button" value="Modifier" class="button">
                <input type="submit" value="Valider" class="buttonValider"> 
            </form>
            <form class="inf">
            <div class="os">
                <i class="fa-solid fa-award"></i>
                <select name="diplome" class="inputInfos" disabled>
                        <option value="<?= $_SESSION['diplome'] ?>"><?= $_SESSION['diplome'] ?></option>
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