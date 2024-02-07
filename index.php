<h1>POO HOTEL</h1>

<h2>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations
    de chambres par des clients dans différents hôtels :</h2>

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$hilton = new Hotel("Hilton", "****", "10 route de la Gare", "Strasbourg", "67000");

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


$mf = new Client("Futterer", "Maxime");

$reservationMF1 = new Reservation($h1, $mf, "14-02-2024", "20-02-2024");
$reservationMF2 = new Reservation($h2, $mf, "14-02-2024", "20-02-2024");


echo $hilton->getInfos();

echo $hilton->afficherReservations();

