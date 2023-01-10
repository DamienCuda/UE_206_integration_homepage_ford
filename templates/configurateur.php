<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/configurateur.css">
    <title>Ford | Configurateur</title>
</head>
<!-- Le header commun à chaque page est centralisé dans le fichier header.php dans le dossier -> php-modules -->


<body>
    <?php include '../assets/php-modules/header.php';?>
<!-- DÉBUT DU MAIN -->
    <main>
        <nav>
            <ul class="breadcrumb inline_padding">
                <li><a href="../index.php">Accueil</a></li>
                <li class="active"><a href="#">Configurateur</a></li>
            </ul>
        </nav>
        <section id="configurateur" class="grid_container">
            <div class="formulaire">
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
                        <input class="form_input" name="budget" id="budget"type="range" list="markers" min="2000" max="90000" step="1000">
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
                                <label class="bold" for="abyss">Bleu abysse
                                <input type="radio" id="abyss" name="couleur">
                                </label>
                            </div>
                            <div class="couleur_container">
                                <label class="bold" for="corail">Corail
                                <input type="radio" id="corail" name="couleur">
                                </label>
                            </div>
                            <div class="couleur_container">
                                <label class="bold" for="moutarde">Moutarde
                                <input type="radio" id="moutarde" name="couleur">
                                </label>
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
            </div>
            <div class="result_card_container">
                <div class="result_card">

                </div>
            </div>

        </section>
    </main>
    <!-- FIN DU MAIN -->

    <!-- Le footer commun à chaque page est centralisé dans le fichier footer.php dans le dossier -> php-modules -->
    <?php include '../assets/php-modules/footer.php' ?>

</body>
</html>    
