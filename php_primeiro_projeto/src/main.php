<?php
include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Cachorro;

$meuCachorro = new Cachorro("Bolota", "Shitzu");

echo $meuCachorro->nome;
echo $meuCachorro->raca;

?>