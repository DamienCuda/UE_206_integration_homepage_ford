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
            <li><a  href="#" title="Vers les offres">Offres</a></li>
            <li><a  href="#" title="Pour les Entreprises">Entreprises</a></li>
            <li><a  href="#" title="Vers les utilitaires">Utilitaires</a></li>
            <li><a  href="#" title="Vers les occasions">Occasions</a></li>
        </ul>
    </nav>

    <div id="main_nav" class="grid_container inline_padding bold">
        <div id="nav_logo">
            <a href="<?=$pathname.'index.php'?>" title="Vers l'accueil"><img src="<?=$pathname.'assets/img/logo.png'?>" alt="logo Ford"></a> 
        </div>
        <nav>
            <ul class="flex_container wrap">
                <li><a  href="#" title="Vers les véhicules">Véhicules</a></li>
                <li><a  href="#" title="Vers les achats">Achat</a></li>
                <li><a  href="#" title="Vers le financement">Financement</a></li>
                <li><a  href="#" title="Vers les services">Services</a></li>
                <li><a  href="<?=$pathname.'templates/configurateur.php'?>" title="Vers le configurateur">Configurateur</a></li>
                <li><a  href="<?=$pathname.'templates/contact.php'?>" title="Vers la page de contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
