<?php

namespace App\model;

class Cachorro {
    public  $nome;
    public  $raca;


    function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;

    }
}
?>