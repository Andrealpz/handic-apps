<?php 
    require_once "header.php";
?>

    <main class="communaute_fond">
        <div class="container_chat">
            <div class="col_a">
                <div class="search_chat">
                    <input id="searchbar" type="search"
                    name="search" placeholder="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="profils_chat">
                    <div class="profil_chat_a">
                        <img src="./IMG/homme1.jpg" alt="">
                        <div class="info_chat">
                            <h3 id="nom_chat">Romain</h3>
                            <p>12 dec. 2022 / 21h15</p>
                        </div>
                    </div>
                    <div class="profil_chat">
                        <img src="./IMG/homme2.jpg" alt="">
                        <div class="info_chat">
                            <h3>Alexis</h3>
                            <p>28 nov. 2022 / 10h40</p>
                        </div>
                    </div>
                    <div class="profil_chat" id="msg_cacher">
                        <img src="./IMG/homme3.jpg" alt="">
                        <div class="info_chat">
                            <h3>Mathieu</h3>
                            <p>17 oct. 2022 / 20h30</p>
                        </div>
                    </div>
                    <div class="profil_chat">
                    <i class="fa-sharp fa-solid fa-arrow-down"></i>
                    </div>
                </div>
            </div>
            <div class="chat">
                <div class="chat_message">
                    <div class="chat_a">
                        <img src="./IMG/homme1.jpg" alt="" class="img_chatA">
                        <i class="fa-solid fa-comment"></i>
                    </div>
                    <div class="chat_b">
                        <img src="./IMG/femme1.jpg" alt="" class="img_chatB">
                        <i class="fa-solid fa-comment"></i>
                    </div>
                    <div class="chat_a">
                        <img src="./IMG/homme1.jpg" alt="" class="img_chatA">
                        <i class="fa-solid fa-comment"></i>
                    </div>
                </div>
                <div class="chat_envoyer">
                    <button>Envoyer</button>
                </div>
            </div>
        </div>
    </main>

<?php 
    require_once "footer.php";
?>