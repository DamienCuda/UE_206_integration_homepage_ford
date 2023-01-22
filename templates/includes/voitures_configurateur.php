<?php
// On vérifie l'url pour ajuster les chemins relatifs des liens
$pathname = $_SERVER['PHP_SELF'];
if (strpos($pathname, 'index.php') !== false){
    $pathname ="";
}else{
    $pathname = "../";
}

// Tableau des actualités
$voitures = [
    "0" => [
        "data-color"    => "rouge",
        "data-type"     => "suv",
        "data-power"    => "125ch",
        "data-prix"     => "17000",
        "img"           => $pathname."assets/img/cars/ford-rouge.jpg",
        "prix"          => "17.000€",
        "name"          => "1.0 ecoboost hybrid 125 ch powershift",
        "acceleration"  => "9.6 secs",
        "puissance"     => "92 kW/ 125CH",
        "couples"       => "170 NM",
        "critair"       => "1*",
        "transmission"  => "Auto Powershift DCT",
    ],
    "1" => [
        "data-color"    => "jaune",
        "data-type"     => "sport",
        "data-power"    => "125ch",
        "data-prix"     => "25000",
        "img"           => $pathname."assets/img/cars/eco-sport.jpg",
        "prix"          => "25.000€",
        "name"          => "1.0 ecoboost hybrid 125 ch powershift",
        "acceleration"  => "11 secs",
        "puissance"     => "92 kW/ 125CH",
        "couples"       => "220 NM",
        "critair"       => "2*",
        "transmission"  => "Auto Powershift DCT",
    ],
    "2" => [
        "data-color"    => "bleu",
        "data-type"     => "suv",
        "data-power"    => "250ch",
        "data-prix"     => "45000",
        "img"           => $pathname."assets/img/cars/ford-ecosport-bleu-island-desert-island-blue.jpg",
        "prix"          => "45.000€",
        "name"          => "1.0 ecoboost hybrid 250 ch powershift",
        "acceleration"  => "8.6 secs",
        "puissance"     => "184 kW/ 250CH",
        "couples"       => "170 NM",
        "critair"       => "3*",
        "transmission"  => "Auto Powershift DCT",
    ],
    "3" => [
        "data-color"    => "noir",
        "data-type"     => "utilitaires",
        "data-power"    => "500ch",
        "data-prix"     => "60000",
        "img"           => $pathname."assets/img/cars/utilitaire-noir.jpg",
        "prix"          => "60.000€",
        "name"          => "1.0 ecoboost hybrid 125 ch powershift",
        "acceleration"  => "12.6 secs",
        "puissance"     => "368 kW/ 500CH",
        "couples"       => "300 NM",
        "critair"       => "4*",
        "transmission"  => "Auto Powershift DCT",
    ],
];
?>

<!-- Affichage avec boucle sur le tableau des actualités -->
<div class="result_card_container flex_container wrap">
    <h2 id="erreur" hidden>Aucun résultat ;(</h2>
    <?php foreach($voitures as $voiture){?>
        <a class="model_card" href="#" title="Modéle configuré" data-color="<?= $voiture['data-color']?>" data-type="<?= $voiture['data-type']?>" data-power="<?= $voiture['data-power']?>" data-prix="<?= $voiture['data-prix']?>">
            <article class="result_card">
                <div class="result_card_header">
                    <img class="result_card_img" src="<?= $voiture['img']?>" alt="Modèle eco-sport">
                    <p class="result_card_price text_center"><?= $voiture['prix']?></p>
                </div>
                <div class="result_card_infos">
                    <h2 class="modele_name bold text_center"><?= $voiture['name']?></h2>
                    <div class="modele_infos">
                        <p class="bold">Accélération 0-100 : <span class="modele_infos_data"><?= $voiture['acceleration']?></span></p>
                        <p class="bold">Puissance : <span class="modele_infos_data"><?= $voiture['puissance']?></span></p>
                        <p class="bold">Couples : <span class="modele_infos_data"><?= $voiture['couples']?></span></p>
                        <p class="bold">Crit'Air : <span class="modele_infos_data"><?= $voiture['critair']?></span></p>
                        <p class="bold">Transmission : <span class="modele_infos_data"><?= $voiture['transmission']?></span></p>
                    </div>
                    <div class="result_card_link text_center">
                        <p>Choisir ce véhicule</p>
                    </div>
                </div>
            </article>
        </a>
    <?php } ?>
</div>