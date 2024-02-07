<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL POO</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>HOTEL POO</h1>

    <h2>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations
        de chambres par des clients dans différents hôtels :</h2>

    <?php

    spl_autoload_register(function ($class_name) {
        include $class_name . '.php';
    });

    $hilton = new Hotel("Hilton", "****", "10 route de la Gare", "Strasbourg", "67000");
    $ibis = new Hotel("Ibis Styles", "***", "222 avenue de Colmar", "Strasbourg", "67100");

    $h1 = new Chambre("1", 120, 2, false, $hilton);
    $h2 = new Chambre("2", 120, 2, false, $hilton);
    $h3 = new Chambre("3", 120, 2, false, $hilton);
    $h4 = new Chambre("4", 120, 2, false, $hilton);
    $h5 = new Chambre("5", 120, 2, false, $hilton);
    $h6 = new Chambre("6", 300, 4, true, $hilton);
    $h7 = new Chambre("7", 300, 4, true, $hilton);
    $h8 = new Chambre("8", 300, 4, true, $hilton);
    $h9 = new Chambre("9", 300, 4, true, $hilton);
    $h10 = new Chambre("10", 300, 4, true, $hilton);


    $mf = new Client("FUTTERER", "Maxime");

    $reservationMF1 = new Reservation($h1, $mf, "31-12-2023", "02-01-2024");
    $reservationMF2 = new Reservation($h2, $mf, "31-12-2023", "02-01-2024");
    $reservationMF3 = new Reservation($h6, $mf, "31-12-2023", "02-01-2024");



    echo $hilton->getInfos();

    echo $hilton->afficherReservations();

    echo $ibis->afficherReservations();

    echo $mf->afficherReservations();

    echo $hilton->afficherStatut();

    ?>
    <script src="https://kit.fontawesome.com/19a031a4c5.js" crossorigin="anonymous"></script>

</body>

</html>