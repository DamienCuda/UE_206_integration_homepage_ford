<?php
// On vérifie l'url pour ajuster les chemins relatifs des liens
    $pathname = $_SERVER['PHP_SELF'];
    if (strpos($pathname, 'index.php') !== false){
        $pathname ="templates/";
    }else{
        $pathname = "";
    }
?>

<footer id="main_footer" class="grid_container inline_padding">
    <div class="footer_list_container">
        <h4 class="footer_list_title bold">Véhicules</h4>
        <ul class="footer_list">
            <li><a href="#" title="Véhicules Particuliers">Véhicules Particuliers</a></li>
            <li><a href="#" title="Utilitaires">Utilitaires</a></li>
            <li><a href="#" title="Citadines">Citadines</a></li>
            <li><a href="#" title="Hybride et Électrique">Hybride et Électrique</a></li>
            <li><a href="#" title="Familliales et Ludospaces">Familliales et Ludospaces</a></li>
            <li><a href="#" title="Monospace">Monospace</a></li>
            <li><a href="#" title="Performance">Performance</a></li>
            <li><a href="#" title="SUV">SUV</a></li>
        </ul>
    </div>

    <div class="footer_list_container">
        <h4 class="footer_list_title bold">Découvrez Ford</h4>
        <ul class="footer_list">
            <li><a href="#" title="À propos de Ford">À propos de Ford</a></li>
            <li><a href="<?=$pathname.'contact.php'?>" title="À propos de Ford">Concession Limoges</a></li>
            <li><a href="#" title="L'actualité Ford">L'actualité Ford</a></li>
            <li><a href="#" title="Nous rejoindre">Nous rejoindre</a></li>
            <li><a href="#" title="Développement durable">Développement durable</a></li>
        </ul>
    </div>

    <div class="footer_list_container">
        <h4 class="footer_list_title bold">Véhicules</h4>
        <div class="footer_list">
            <ul class="flex_container wrap">
                <li><a href="#" title="EcoSport">EcoSport</a></li>
                <li><a href="#" title="Focus">Focus</a></li>
                <li><a href="#" title="Mustang Mach-E">Mustang Mach-E</a></li>
                <li><a href="#" title="Mustang">Mustang</a></li>
                <li><a href="#" title="Focus ST">Focus ST</a></li>
                <li><a href="#" title="Tournéo Connect">Tournéo Connect</a></li>
                <li><a href="#" title="Puma">Puma</a></li>
                <li><a href="#" title="Kuga">Kuga</a></li>
                <li><a href="#" title="Explorer">Explorer</a></li>
                <li><a href="#" title="Puma ST">Puma ST</a></li>
                <li><a href="#" title="Ford GT">Ford GT</a></li>
            </ul>
        </div>
    </div>
</footer>