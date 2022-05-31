<?php

require_once "../Funcionario/Funcionario.php";

class Vendedor extends Funcionario{
    
    private $comissao;
    private $numeroVendas;

    public function setComissao($novoComissao){
        $this->comissao = $novoComissao;
    }

    public function getComissao(){
        return $this->comissao;
    }

    public function setNumeroVendas($novoNumeroVendas){
        $this->numeroVendas = $novoNumeroVendas;
    }

    public function getNumeroVendas(){
        return $this->numeroVendas;
    }
}