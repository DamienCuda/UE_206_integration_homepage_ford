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
    <title>Ford | Configurateur</title>
</head>

<body>
    <!-- Le header commun à chaque page est centralisé dans le fichier header.php dans le dossier templates -> includes -->
    <?php include 'includes/header.php' ?>

<!-- DÉBUT DU MAIN -->
    <main>
        <!-- Fil d'ariane -->
        <nav>
            <ul class="breadcrumb inline_padding">
                <li><a href="../index.php">Accueil</a></li>
                <!-- L'utilisation d'un H1 ici permet ici de na pas laisser la page sans H1
                    et d'utiliser d'autres heading dans la page sans problème de hiérarchie -->
                <li class="active"><a href="#"><h1>Contact</h1></a></li> 
            </ul>
        </nav>

        <!-- Section configurateur -->

    </main>
    <!-- FIN DU MAIN -->

    <!-- Le footer commun à chaque page est centralisé dans le fichier footer.php dans le dossier templates -> includes -->
    <?php include 'includes/footer.php' ?>

</body>
</html>    
