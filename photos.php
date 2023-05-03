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
    <div class="containter_page_photos">
        <div class="ajout_photo">
            <i class="fa-sharp fa-solid fa-images"></i>
        </div>
        <img src="./IMG/femme1.jpg" alt="" id="photo1">
        <img src="./IMG/femme2.jpg" alt="" id="photo2">
        <img src="./IMG/femme3.jpg" alt="" id="photo3">
    </div>

</main>

    <?php 
    require_once "footer.php";
?>