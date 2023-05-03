<?php 
    require_once "header.php";
?>

    <main class="communaute_fond">
        <div class="container_rechercher">
            <h2>Vos préférences</h2>
        <div class="bloc_preferences">
            <div class="preferences">
                <label for="age">Age :</label>
                <select name="age" id="preference_age">
                    <option value="age18">De 18 à 25 ans</option>
                    <option value="age25">De 25 ans à 35 ans</option>
                    <option value="age30">De 35 ans à 45 ans</option>
                    <option value="age45">De 45 ans à 80 ans</option>
                </select>
            </div>
            <div class="preferences">
                <label for="distance">Distance :</label>
                <select name="distance" id="preference_distance">
                    <option value="10km">à 10km</option>
                    <option value="30km">à 30km</option>
                    <option value="50km">à 50km</option>
                    <option value="150km">à 150km</option>
                </select>
            </div>
            <div class="preferences">
                <label for="origine">Origine :</label>
                <select name="origine" id="preference_origine">
                    <option value="sans-importance">Sans importance</option>
                </select>
            </div>
            <div class="preferences">
                <label for="handicap">Handicap :</label>
                <select name="handicap" id="preference_handicap">
                    <option value="sans-importance">Sans importance</option>
                </select>
            </div>
        </div>    
        </div>
            <div class="affichage_profil">
                <div class="profil_rechercher">
                    <img src="./IMG/homme1.jpg" alt="">
                    <div class="info_personne">
                        <h4>Julien, 31</h4>
                        <p>Préparateur de commande</p>
                        <p>Avignon, 84</p>
                        <button><a href="chat.php">Envoyer un message</a></button>
                    </div>
                </div>
                <div class="profil_rechercher">
                    <img src="./IMG/homme2.jpg" alt="">
                    <div class="info_personne">
                        <h4>Julien, 31</h4>
                        <p>Préparateur de commande</p>
                        <p>Avignon, 84</p>
                        <button><a href="chat.php">Envoyer un message</a></button>
                    </div>
                </div>
                <div class="profil_rechercher">
                    <img src="./IMG/homme3.jpg" alt="">
                    <div class="info_personne">
                        <h4>Julien, 31</h4>
                        <p>Préparateur de commande</p>
                        <p>Avignon, 84</p>
                        <button><a href="chat.php">Envoyer un message</a></button>
                    </div>
                </div>
                <div class="profil_rechercher">
                    <img src="./IMG/homme4.jpg" alt="">
                    <div class="info_personne">
                        <h4>Julien, 31</h4>
                        <p>Préparateur de commande</p>
                        <p>Avignon, 84</p>
                        <button><a href="chat.php">Envoyer un message</a></button>
                    </div>
                </div>
                <div class="profil_rechercher">
                    <img src="./IMG/homme5.jpg" alt="">
                    <div class="info_personne">
                        <h4>Julien, 31</h4>
                        <p>Préparateur de commande</p>
                        <p>Avignon, 84</p>
                        <button><a href="chat.php">Envoyer un message</a></button>
                    </div>
                </div>
                <div class="profil_rechercher">
                    <img src="./IMG/homme6.jpg" alt="">
                    <div class="info_personne">
                        <h4>Julien, 31</h4>
                        <p>Préparateur de commande</p>
                        <p>Avignon, 84</p>
                        <button><a href="chat.php">Envoyer un message</a></button>
                    </div>
                </div>
            </div>
    </main>

<?php 
    require_once "footer.php";
?>