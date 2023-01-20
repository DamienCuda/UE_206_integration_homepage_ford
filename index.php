<!-- variable du breadcrumb et page title-->
<?php $page_title = 'Accueil' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/configurateur.css">
    <title>Ford | <?= $page_title?></title>
</head>

<body>
    <!-- Le header commun à chaque page est centralisé dans le fichier header.php dans le dossier templates -> includes  -->
    <?php include 'templates/includes/header.php' ?>
    
    <!-- DÉBUT DU MAIN -->
    <main>
        <!-- Start hero banner -->
        <section class="hero_banner inline_padding">
                <h1>Connectivité Fordpass</h1>
                <p class="bold">Facilitez votre quotidien avec le contrôle à distance</p>
                <a class="btn btn_blue bold" href="#">Découvrir</a>
        </section>
        <!-- End hero banner -->

        <!-- Start Call to action offres-->
        <section class="cta_offers">
            <h2 class="section_title">Profitez de nos offres du moment</h2>
            <a class="btn btn_white bold" href="#">Voir les offres</a>
        </section>
        <!-- End Call to action offres-->

        <!-- Start section véhicules-->
        <section class="vehicules inline_padding">
            <h2 class="section_title">Un véhicule pour chaque style de vie</h2>
            <a class="btn btn_blue bold" href="#">Voir tous nos véhicules</a>
            <div class="model_cards_container grid_container">
                <a href="#" title="Nouvelle Focus">
                    <article class="model_card">
                        <img class="card_img" src="assets/img/cars/nouvelle-focus.jpg" alt="Ford Focus break">
                        <div class="model_card_infos">
                            <h3 class="card_title">Nouvelle focus</h3>
                            <p class="card_text">suv & crossover</p>
                        </div>
                    </article>
                </a>
                <a href="#" title="Eco Sport">
                    <article class="model_card">
                        <img class="card_img" src="assets/img/cars/eco-sport.jpg" alt="Ford Eco Sport">
                        <div class="model_card_infos">
                            <h3 class="card_title">Eco sport</h3>
                            <p class="card_text">suv & crossover</p>
                        </div>
                    </article>
                </a>
                <a href="#" title="Ford GT">
                    <article class="model_card">
                        <img class="card_img" src="assets/img/cars/gt.jpg" alt="Ford GT sport">
                        <div class="model_card_infos">
                            <h3 class="card_title">Ford GT</h3>
                            <p class="card_text">performance</p>
                        </div>
                    </article>
                </a>
            </div>


        </section>
        <!-- End section véhicules-->

        <!-- Start section style-->
        <section class="styles inline_padding">
            <h2 class="style_section_title bold">Choisis ton Style</h2>
            <div class="style_card_container grid_container">
                <a href="#" title="SUV & Crossover">
                    <article class="style_card">
                        <img class="card_img" src="assets/img/styles/suv.jpg" alt="Style SUV">
                        <div class="style_card_title">
                            <p class="style_number">01</p>
                            <p class="style_text">Suv & crossover</p>
                        </div>
                    </article>
                </a>
                <a href="#" title="Hybride">
                    <article class="style_card">
                        <img class="card_img" src="assets/img/styles/hybrides.jpg" alt="Style Hybride">
                        <div class="style_card_title">
                            <p class="style_number">02</p>
                            <p class="style_text">Hybride</p>
                        </div>
                    </article>
                </a>
                <a href="#" title="Performance">
                    <article class="style_card">
                        <img class="card_img" src="assets/img/styles/performances.jpg" alt="Style Performance">
                        <div class="style_card_title">
                            <p class="style_number">03</p>
                            <p class="style_text">Performance</p>
                        </div>
                    </article>
                </a>
                <a href="#" title="Utilitaires">
                    <article class="style_card">
                        <img class="card_img" src="assets/img/styles/utilitaires.jpg" alt="Style Utilitaires">
                        <div class="style_card_title">
                            <p class="style_number">04</p>
                            <p class="style_text">Utilitaires</p>
                        </div>
                    </article>
                </a>
            </div>

        </section>
        <!-- End section style-->
    </main>
    <!-- FIN DU MAIN -->

    <!-- Le footer commun à chaque page est centralisé dans le fichier footer.php dans le dossier templates -> includes -->
    <?php include 'templates/includes/footer.php' ?>

</body>
</html>