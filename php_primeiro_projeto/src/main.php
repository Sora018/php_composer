<?php
include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Cachorro;

$meuCachorro = new Cachorro("Bolota", "Shitzu");

echo $meuCachorro->nome;
echo "\n";
echo $meuCachorro->raca . "<br>";

$meuCachorro = new Cachorro("Ylime", "Lhaza");

echo $meuCachorro->nome;
echo "\n";
echo $meuCachorro->raca . "<br>";

?>