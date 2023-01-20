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

        <!-- Fil d'ariane -->
        <?php include 'includes/breadcrumb.php' ?>

        <!-- Section infos concession -->

        <!-- Section service -->

        <!-- Section RDV -->

        <!-- Section actualités -->
        <?php include 'includes/actualites.php' ?>

        <!-- Section newsletter -->
        

    </main>
    <!-- FIN DU MAIN -->

    <!-- Le footer commun à chaque page est centralisé dans le fichier footer.php dans le dossier templates -> includes -->
    <?php include 'includes/footer.php' ?>

</body>
</html>    
