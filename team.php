<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">

    <title>ChriSystems</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>

<?php
$page = "team";
include 'includes/header.php';
?>

<div class="site">

    <div class="box" style="margin: 3%; width: 80%; justify-items: center;">
        <p style="margin: 0; font-size: 22px; text-align: center">
            Questa è la pagina dedicata al team di ChriSystems.
            Qui vengono presentati i membri che fanno parte del progetto e contribuiscono allo sviluppo dei vari lavori.
        </p>
    </div>

    <div class="box" style="margin: 3%; width: 50%; justify-items: center;">
        <p style="margin: 0; font-size: 22px; text-align: center">
            Christopher - Fondatore e dev <br> <br>
            Ciao, sono Christopher, il fondatore, e mi occupo di programmazione e gestione di team e progetti.
            Cerco sempre cose nuove da imparare perché in informatica c'è sempre qualcosa da capire.
        </p>
    </div>

    <div class="box" style="margin: 3%; width: 50%; justify-items: center;">
        <p style="margin: 0; font-size: 22px; text-align: center">
            Riccardo - Junior Dev <br> <br>
            Ciao, sono Riccardo. Sono agli inizi con l'informatica.
            Non so ancora molto, ma ho voglia di imparare e sono nel posto giusto per cominciare a capire come funzionano le cose.
        </p>
    </div>

</div>


<?php include 'includes/footer.php'; ?>

</body>
</html>
