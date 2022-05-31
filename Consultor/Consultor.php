<?php

require_once "../Funcionario/Funcionario.php";

class Consultor extends Funcionario{
    private $valorHora;
    private $horasTrabalhadas;

    public function setValorhora($novoValorhora){
        $this->valorHora = $novoValorhora;
    }
    public function getValorhora(){
        return $this->valorHora;
    }
    public function setHorasTrabalhadas($novoHorasTrabalhadas){
        $this->horasTrabalhadas = $novoHorasTrabalhadas;
    }
    public function getHorasTrabalhadas(){
        return $this->horasTrabalhadas;
    }
}