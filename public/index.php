<?php

// require __DIR__ . '/../src/Animal.php';
// require __DIR__ . '/../src/Area.php';
// require __DIR__ . '/../src/Mammal.php';
// require __DIR__ . '/../src/Felid.php';
// require __DIR__ . '/../src/Equid.php';
// require __DIR__ . '/../src/Bird.php';
// require __DIR__ . '/../src/Reptile.php';
// require __DIR__ . '/../src/Arthropode.php';
// require __DIR__ . '/../src/Arachnide.php';
// require __DIR__ . '/../src/Crocodilian.php';
// require __DIR__ . '/../src/Snake.php';
// require __DIR__ . '/../src/Spider.php';
// require __DIR__ . '/../src/Insect.php';
require '../vendor/autoload.php';

use App\Area;
use App\Arachnide;
use App\Bird;
use App\Crocodilian;
use App\Equid;
use App\Felid;
use App\Insect;
use App\Mammal;
use App\Snake;
use App\Spider;

$elephant = new Mammal('elephant');
$elephant->setThreatenedLevel('LC');
$elephant->setSize(400);

$lion = new Felid('lion');
$lion->setSize(100);
$lion->setThreatenedLevel('VU');

$tiger = new Felid('tiger');
$tiger->setSize(150);
$tiger->setThreatenedLevel('EN');

$zebra = new Equid('zebra');
$zebra->setSize(120);
$zebra->setThreatenedLevel('EN');

$parrot = new Bird('parrot');
$parrot->setSize(30);

$alligator = new Crocodilian('alligator');
$alligator->setSize(180);

$python = new Snake('python');
$python->setSize(300);

$tarentula = new Spider('tarantula');
$tarentula->setSize(10);

$scorpio = new Arachnide('scorpio');
$scorpio->setSize(15);
$scorpio->setCarnivorous(true);

$bee = new Insect('bee');
$bee->setSize(2);

$animals = [$elephant, $lion, $tiger, $zebra, $parrot, $alligator, $python, $scorpio, $tarentula, $bee];
// $animals = [$elephant, $lion, $tiger, $zebra, $parrot, $alligator];

$savana = new Area('savana');
$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$savana->addAnimal($zebra);

$jungle = new Area('jungle');
$jungle->addAnimal($parrot);
$jungle->addAnimal($alligator);
$jungle->addAnimal($tarentula);
$jungle->addAnimal($tiger);

$desert = new Area('desert');
$desert->addAnimal($scorpio);

$areas = [$savana, $jungle, $desert];

require 'view.php';
?>