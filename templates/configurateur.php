<!-- variable du breadcrumb -->
<?php $breadcrumb_title = 'Configurateur' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/configurateur.css">
    <title>Ford | <?= $breadcrumb_title?></title>
</head>

<body>
    <!-- Le header commun à chaque page est centralisé dans le fichier header.php dans le dossier templates -> includes -->
    <?php include 'includes/header.php' ?>

<!-- DÉBUT DU MAIN -->
    <main>
        <!-- Fil d'ariane -->
        <?php include 'includes/breadcrumb.php' ?>

        <!-- Section configurateur -->
        <div id="configurateur" class="grid_container">
            <!-- Formulaire -->
            <aside class="formulaire">
                <form action="#" method="POST">
                    <fieldset>
                        <label class="bold label" for="type">Type</label>
                        <select class="form_input" name="type" id="type" required>
                            <option value="">--Sélectionnez --</option>
                            <option value="suv">SUV</option>
                            <option value="utilitaires">Utilitaires</option>
                            <option value="sport">Sport</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <label class="bold label" for="budget">Buget maximum</label>
                        <input class="form_input" name="budget" id="budget" type="range" min="2000" max="90000" step="1000">
                        <div class="list_markers_container">
                            <span class="list_markers bold">|</span>
                            <span class="list_markers bold">|</span>
                            <span class="list_markers bold">|</span>
                            <span class="list_markers bold">|</span>
                            <span class="list_markers bold">|</span>
                            <span class="list_markers bold">|</span>
                            <span class="list_markers bold">|</span>
                            <span class="list_markers bold">|</span>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label class="bold label" for="puissance">Puissance</label>
                        <select class="form_input" name="puissance" id="puissance" required>
                            <option value="">--Sélectionnez --</option>
                            <option value="125ch">92kW / 125 CH</option>
                            <option value="250ch">184kW / 250 CH</option>
                            <option value="500ch">368kW / 500 CH</option>
                        </select>
                    </fieldset>
                    <fieldset>
                        <p class="bold label">Couleur carosserie</p>
                        <div class="couleur_wrapper grid_container wrap">
                            <div class="couleur_container flex_container">
                                <input type="radio" id="abyss" name="couleur">
                                <label class="bold" for="abyss">Bleu abysse</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="corail" name="couleur">
                                <label class="bold" for="corail">Corail</label>
                            </div>
                            <div class="couleur_container">                                
                                <input type="radio" id="moutarde" name="couleur">
                                <label class="bold" for="moutarde">Moutarde</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="island" name="couleur">
                                <label class="bold" for="island">Bleu island</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="rouge" name="couleur">
                                <label class="bold" for="rouge">Rouge fantastic</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="glacier" name="couleur">
                                <label class="bold" for="glacier">Blanc glacier</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="agathe" name="couleur">
                                <label class="bold" for="agathe">Noir agathe</label>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </aside>
            <!-- Cartes résuktats -->
            <div class="result_card_container flex_container wrap">
                    <a href="#" title="Modéle configuré">
                        <article class="result_card">
                            <div class="result_card_header">
                                <img class="result_card_img" src="../assets/img/cars/eco-sport.jpg" alt="Modèle eco-sport">
                                <p class="result_card_price">20.000€</p>
                            </div>
                            <div class="result_card_infos">
                                <h2 class="modele_name bold">1.0 ecoboost hybrid 125 ch powershift</h2>
                                <div class="modele_infos">
                                    <p class="bold">Accélération 0-100 : <span class="modele_infos_data">9.6 secs</span></p>
                                    <p class="bold">Puissance : <span class="modele_infos_data">92 kW/ 125 CH</span></p>
                                    <p class="bold">Couples : <span class="modele_infos_data">170 NM</span></p>
                                    <p class="bold">Crit'Air : <span class="modele_infos_data">1*</span></p>
                                    <p class="bold">Transmission : <span class="modele_infos_data">Auto Powershift DCT</span></p>
                                </div>
                                <div class="result_card_link">
                                    <p>Choisir ce véhicule</p>
                                </div>
                            </div>
                        </article>
                    </a>
                    <a href="#" title="Modéle configuré">
                        <article class="result_card">
                            <div class="result_card_header">
                                <img class="result_card_img" src="../assets/img/cars/eco-sport.jpg" alt="Modèle eco-sport">
                                <p class="result_card_price">20.000€</p>
                            </div>
                            <div class="result_card_infos">
                                <h2 class="modele_name bold">1.0 ecoboost hybrid 125 ch powershift</h2>
                                <div class="modele_infos">
                                    <p class="bold">Accélération 0-100 : <span class="modele_infos_data">9.6 secs</span></p>
                                    <p class="bold">Puissance : <span class="modele_infos_data">92 kW/ 125 CH</span></p>
                                    <p class="bold">Couples : <span class="modele_infos_data">170 NM</span></p>
                                    <p class="bold">Crit'Air : <span class="modele_infos_data">1*</span></p>
                                    <p class="bold">Transmission : <span class="modele_infos_data">Auto Powershift DCT</span></p>
                                </div>
                                <div class="result_card_link">
                                    <p>Choisir ce véhicule</p>
                                </div>
                            </div>
                        </article>
                    </a>
                    <a href="#" title="Modéle configuré">
                        <article class="result_card">
                            <div class="result_card_header">
                                <img class="result_card_img" src="../assets/img/cars/eco-sport.jpg" alt="Modèle eco-sport">
                                <p class="result_card_price">20.000€</p>
                            </div>
                            <div class="result_card_infos">
                                <h2 class="modele_name bold">1.0 ecoboost hybrid 125 ch powershift</h2>
                                <div class="modele_infos">
                                    <p class="bold">Accélération 0-100 : <span class="modele_infos_data">9.6 secs</span></p>
                                    <p class="bold">Puissance : <span class="modele_infos_data">92 kW/ 125 CH</span></p>
                                    <p class="bold">Couples : <span class="modele_infos_data">170 NM</span></p>
                                    <p class="bold">Crit'Air : <span class="modele_infos_data">1*</span></p>
                                    <p class="bold">Transmission : <span class="modele_infos_data">Auto Powershift DCT</span></p>
                                </div>
                                <div class="result_card_link">
                                    <p>Choisir ce véhicule</p>
                                </div>
                            </div>
                        </article>
                    </a>
                    <a href="#" title="Modéle configuré">
                        <article class="result_card">
                            <div class="result_card_header">
                                <img class="result_card_img" src="../assets/img/cars/eco-sport.jpg" alt="Modèle eco-sport">
                                <p class="result_card_price">20.000€</p>
                            </div>
                            <div class="result_card_infos">
                                <h2 class="modele_name bold">1.0 ecoboost hybrid 125 ch powershift</h2>
                                <div class="modele_infos">
                                    <p class="bold">Accélération 0-100 : <span class="modele_infos_data">9.6 secs</span></p>
                                    <p class="bold">Puissance : <span class="modele_infos_data">92 kW/ 125 CH</span></p>
                                    <p class="bold">Couples : <span class="modele_infos_data">170 NM</span></p>
                                    <p class="bold">Crit'Air : <span class="modele_infos_data">1*</span></p>
                                    <p class="bold">Transmission : <span class="modele_infos_data">Auto Powershift DCT</span></p>
                                </div>
                                <div class="result_card_link">
                                    <p>Choisir ce véhicule</p>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>

        </div>
    </main>
    <!-- FIN DU MAIN -->

    <!-- Le footer commun à chaque page est centralisé dans le fichier footer.php dans le dossier templates -> includes -->
    <?php include 'includes/footer.php' ?>

</body>
</html>    
