<?php

// On vérifie l'url pour ajuster les chemins relatifs des liens
$pathname = $_SERVER['PHP_SELF'];
if (strpos($pathname, 'index.php') !== false){
    $pathname ="";
}else{
    $pathname = "../";
}

// Tableau des actualités
$actualites = [
    "0" => [
        "date"      => "20<br>Déc.",
        "img"       => $pathname."assets/img/joyeuses-fetes.jpg",
        "titre"     => "Ford vous souhaite de joyeuses fêtes de fin d'année",
        "url_cible" => "#",
    ],
    "1" => [
        "date"      => "10<br>Déc.",
        "img"       => $pathname."assets/img/ford-focus.jpg",
        "titre"     => "sortie de la nouvelle ford focus",
        "url_cible" => "#",
    ],
    "2" => [
        "date"      => "04<br>Déc.",
        "img"       => $pathname."assets/img/world.jpg",
        "titre"     => "les 7 nouveaux véhicules connectés qui ouvrent la voie à un avenir 100% électrique en europe pour ford",
        "url_cible" => "#",
    ],
];
?>

<!-- Affichage avec boucle sur le tableau des actualités -->
<section id="actualites">
    <div id="actualites_header" class="text_center">
        <h2 class="contact_titles text_shadow">Actualite & évènement</h2>
        <p class="contact_subtitles text_shadow">Suivez toute l'actualité de Ford</p>
        <a class="btn_blue" href="#" title="Vers toutes les actus"> Toute l'actualité</a>
    </div>
    <div id="actualites_articles" class="inline_padding grid_container">
        <?php foreach($actualites as $actualite){?>
            <article class="actualite">
                <img class="news_card_img" src="<?= $actualite['img']?>" alt="#">
                <div class="news_card_info flex_container">
                    <p class="news_card_date"><?= $actualite['date']?></p>
                    <h3 class="news_card_title"><?= $actualite['titre']?></h3>
                    <a class="news_card_link bold text_center btn_blue" href="<?= $actualite['url_cible']?>" title="Vers l'article complet">Lire l'actualité</a>
                </div>
            </article>
        <?php } ?>
    </div>
</section>