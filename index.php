<h1>POO HOTEL</h1>

<h2>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations
    de chambres par des clients dans différents hôtels :</h2>

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$hilton = new Hotel("Hilton", "****", "10 route de la Gare", "Strasbourg", "67000", 30);

echo $hilton->getInfos();

