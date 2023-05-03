<?php 
    require_once "header.php";
?>

<main class="communaute_fond">
    <div class="couverturePhotoProfil">
        <img src="IMG/couple-1779066.jpg" alt="">
    </div>
    <div class="photoProfil">
        <img src="IMG/adult-1867889_960_720.jpg" alt="">
        <h3>Andrea, 24</h3>
    <div class="infos">
        <p>Développeuse Web</p>
        <p>Avignon, 84</p>
    </div>
    </div>
    <div class="profil_photos_centres">
    <div class="profil">
            <i class="fa-solid fa-user"></i>
            <h2><a href="profil.php">Profil</a></h2>
        </div>
        <div class="profil">
            <i class="fa-solid fa-image"></i>
            <h2><a href="photos.php">Photos</a></h2>
        </div>
        <div class="profil">
            <i class="fa-solid fa-headphones"></i>
            <h2><a href="profil_centres_dinterets.php">Centres d'interêts</a></h2>
        </div>
    </div>
    <div class="container_page_interet">
        <div class="bloc_interet">
            <h3>Mes loisirs :</h3>
            <input type="textarea">
        </div>
        <div class="bloc_interet">
            <h3>Mes activités sportives :</h3>
            <input type="textarea">
         </div>
    </div>

</main>

    <?php 
    require_once "footer.php";
?>