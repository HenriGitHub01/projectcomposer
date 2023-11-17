<?php
require_once '../vendor/autoload.php';

use App\model\Carro;

$carro = new Carro('Toyota', 'Corolla', 2023);
$gol = new Carro('Volkswagen', 'Gol', 2023);

echo $carro->getInfo();
echo $gol->getInfo();
?>