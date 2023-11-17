<?php

namespace App\model; 

class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }
    public function getInfo(){
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano: {$this->ano}";
    }
    public function Barulho(){
        return "Vrum vrum";
    }
}
?>