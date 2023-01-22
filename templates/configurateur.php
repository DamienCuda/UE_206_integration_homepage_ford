<!-- variable du breadcrumb et page title-->
<?php $page_title = 'Configurateur' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/configurateur.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous" defer></script>
    <script src="../assets/js/script.js" defer></script>
    <title>Ford | <?= $page_title?></title>
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
                                <input type="radio" id="abyss" name="couleur" data-color="bleu">
                                <label class="bold" for="abyss">Bleu abysse</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="corail" name="couleur" data-color="rouge">
                                <label class="bold" for="corail">Corail</label>
                            </div>
                            <div class="couleur_container">                                
                                <input type="radio" id="moutarde" name="couleur" data-color="jaune">
                                <label class="bold" for="moutarde">Moutarde</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="island" name="couleur" data-color="bleu">
                                <label class="bold" for="island">Bleu island</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="rouge" name="couleur" data-color="rouge">
                                <label class="bold" for="rouge">Rouge fantastic</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="glacier" name="couleur" data-color="blanc">
                                <label class="bold" for="glacier">Blanc glacier</label>
                            </div>
                            <div class="couleur_container">
                                <input type="radio" id="agathe" name="couleur" data-color="noir">
                                <label class="bold" for="agathe">Noir agathe</label>
                            </div>
                        </div>
                    </fieldset>
                    <button id="reset_btn" type="reset" class="btn_white"> Supprimer les filtres</button>
                </form>
            </aside>
            <!-- Cartes résultats -->
            <?php include 'includes/voitures_configurateur.php' ?>
        </div>

        <!-- Section newsletter -->
        <?php include 'includes/newsletter.php' ?>
    </main>
    <!-- FIN DU MAIN -->

    <!-- Le footer commun à chaque page est centralisé dans le fichier footer.php dans le dossier templates -> includes -->
    <?php include 'includes/footer.php' ?>

</body>
</html>    
