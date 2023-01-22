<!-- variable du breadcrumb et page title-->
<?php $page_title = 'Contact' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/configurateur.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <title>Ford | <?= $page_title?></title>
</head>

<body>
    <!-- Le header commun à chaque page est centralisé dans le fichier header.php dans le dossier templates -> includes -->
    <?php include 'includes/header.php' ?>

<!-- DÉBUT DU MAIN -->
    <main>
        <!-- Section hero -->
        <section id="concession_hero" class="text_center inline_padding section_bg">
            <h2 class="text_shadow contact_titles">Votre consession Ford à Limoges</h2>
            <p class="text_shadow contact_sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea autem at consequuntur debitis quia ipsam veniam laborum ipsa corporis eaque, nulla facere suscipit provident, voluptatibus rerum, eveniet deserunt beatae asperiores!</p>
            <p class="text_shadow contact_sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea autem at consequuntur debitis quia ipsam veniam laborum ipsa corporis eaque, nulla facere suscipit provident, voluptatibus rerum, eveniet deserunt beatae asperiores!</p>
        </section>

        <!-- Fil d'ariane -->
        <?php include 'includes/breadcrumb.php' ?>

        <!-- Section infos concession -->
        <section id="concession_infos_container" class="inline_padding">
            <article id="concession_infos" class="grid_container">
                <div id="adresse">
                    <h3 class="upper bold infos_titles">Consession Ford Limoges</h3>
                    <p> Rue de limoges<br>8700 Limoges<br>France</p>
                    <a href="#" title="S'y rendre" class="btn_white infos_btn">S'y rendre</a>
                </div>
                <div>
                    <h3 class="upper bold infos_titles">Horaires du magasin</h3>
                    <div id="horaires" class="grid_container">
                        <div class="jours">
                            <p>Lundi</p>
                            <p>Mardi</p>
                            <p>Mercredi</p>
                            <p>Jeudi</p>
                            <p>Vendredi</p>
                            <p>Samedi</p>
                            <p>Dimanche</p>
                        </div>
                        <div class="am">
                            <p>Fermé</p>
                            <p>8:00 - 12:30</p>
                            <p>8:00 - 12:30</p>
                            <p>8:00 - 12:30</p>
                            <p>8:00 - 12:30</p>
                            <p>8:00 - 12:30</p>
                            <p>Fermé</p>
                        </div>
                        <div class="pm">
                            <p>14:00 - 18:00</p>
                            <p>13:30 - 18:30</p>
                            <p>13:30 - 18:30</p>
                            <p>13:30 - 18:30</p>
                            <p>13:30 - 18:30</p>
                            <p>13:30 - 18:30</p>
                            <p>Fermé</p>
                        </div>
                    </div>

                </div>
                <div id="contacts">
                    <h3 class="upper bold infos_titles">Contact</h3>
                    <div class="grid_container infos_btn_container">
                        <a href="#" title="Prendre rdv" class="btn_white infos_btn">Prendre rdv</a>
                        <a href="#" title="Vers la page facebook" target="_blank" class="btn_white infos_btn">Facebook</a>
                        <a href="#" title="Appelez-nous" class="btn_white infos_btn">Appelez-nous</a>
                    </div>

                </div>
            </article>
        </section>
        <!-- End of Section infos concession -->
        
        <!-- Section service -->
        <section id="concession_service" class="text_center">
            <div id="services_heading" class="section_bg">
                <h2 class="contact_titles">Les services de votre concession</h2>
                <p class="text_shadow contact_sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea autem at consequuntur debitis quia ipsam veniam laborum ipsa corporis eaque, nulla facere suscipit provident, voluptatibus rerum, eveniet deserunt beatae asperiores!</p>
            </div>
            <div id="services" class="flex_container inline_padding">
                <a href="#" title="Service matériel">
                    <article class="service">
                        <h3 class="upper">Matériel</h3>
                        <p class="service_sub">Trouvez tous les accessoires et pièces détachées</p>
                    </article>
                </a>
                <a href="#" title="Service équipe">
                    <article class="service">
                        <h3 class="upper">équipe</h3>
                        <p class="service_sub">Une équipe d'experts pour vous conseiller</p>
                    </article>
                </a>
                <a href="#" title="Service essais">
                    <article class="service">
                        <h3 class="upper">essais</h3>
                        <p class="service_sub">Réservez un esai gratuit auprès de nos équipes</p>
                    </article>
                </a>
            </div>
        </section>
        <!-- End of Section Service -->

        <!-- Section RDV -->
        <section id="concession_rdv">
            <div id="rdv" class="section_bg text_center">
                <h2 class="contact_titles">Prendre rendez-vous</h2>
                <p class="text_shadow contact_sub">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
            </div>
            <form action="#" method="post" class="dark_blue_bg grid_container" id="rdv_form">
                <fieldset class="grid_container">
                    <legend>Vos coordonnées</legend>
                    <div class="text_center">
                        <label for="nom">Votre nom/prénom</label>
                        <input name="nom" id="nom" type="text" required>
                        <label for="mail">Votre mail</label>
                        <input name="mail" id="mail" type="email" required placeholder="votremail@mail.com">
                        <label for="telephone">Votre téléphone</label>
                        <input name="telephone" id="telephone" type="tel" required placeholder="0555000000">
                    </div>                        
                </fieldset>
                <fieldset class="grid_container">
                <legend>Votre demande</legend>
                    <div class="text_center">
                        <label for="sujet">Sujet</label>
                        <select name="sujet" id="sujet" required>
                            <option value="#">Prendre un rendez-vous</option>
                            <option value="carrosserie">Carrosserie</option>
                            <option value="achat">Achat</option>
                        </select>                    
                        <label for="message">Votre message</label>
                        <textarea name="message" id="message" type="textarea" rows="10" placeholder="Saisssez votre message" required></textarea>
                    </div>                                            
                </fieldset>
                <button type="submit" class="btn_blue"> Envoyer ma demande</button>
            </form>
        </section>
        <!-- End of Section RDV -->
        
        <!-- Section actualités -->
        <?php include 'includes/actualites.php' ?>
        
        <!-- Section newsletter -->
        <?php include 'includes/newsletter.php' ?>
        
    </main>
    <!-- FIN DU MAIN -->

    <!-- Le footer commun à chaque page est centralisé dans le fichier footer.php dans le dossier templates -> includes -->
    <?php include 'includes/footer.php' ?>

</body>
</html>    
