<?php
// On vérifie l'url pour ajuster les chemins relatifs des liens
    $pathname = $_SERVER['PHP_SELF'];
    if (strpos($pathname, 'index.php') !== false){
        $pathname ="";
    }else{
        $pathname = "../";
    }
?>

<header>
    <nav id="top_nav" class="inline_padding bold">
        <ul class="flex_container wrap">
            <li><a  href="#">Offres</a></li>
            <li><a  href="#">Entreprises</a></li>
            <li><a  href="#">Utilitaires</a></li>
            <li><a  href="#">Occasions</a></li>
        </ul>
    </nav>

    <div id="main_nav" class="grid_container inline_padding bold">
        <div id="nav_logo">
            <a href="<?=$pathname.'index.php'?>"><img src="<?=$pathname.'assets/img/logo.png'?>" alt="logo Ford"></a> 
        </div>
        <nav>
            <ul class="flex_container wrap">
                <li><a  href="#">Véhicules</a></li>
                <li><a  href="#">Achat</a></li>
                <li><a  href="#">Financement</a></li>
                <li><a  href="#">Services</a></li>
                <li><a  href="<?=$pathname.'templates/configurateur.php'?>">Configurateur</a></li>
            </ul>
        </nav>
    </div>
</header>
