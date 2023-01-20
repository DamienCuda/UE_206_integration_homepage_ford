<nav>
    <ul class="breadcrumb inline_padding">
        <li><a href="../index.php">Accueil</a></li>
        <!-- L'utilisation d'un H1 ici permet ici de na pas laisser la page sans H1
            et d'utiliser d'autres heading dans la page sans problème de hierarchie -->
        <li class="active"><a href="#"><h1><?= isset($page_title) ? $page_title : ''; ?></h1></a></li> 
    </ul>
</nav>