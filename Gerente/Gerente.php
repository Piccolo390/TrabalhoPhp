<?php

require_once "../Funcionario/Funcionario.php";

class Gerente extends Funcionario{
    private $bonificacao;
    private $salario;

    public function setBonificacao($novoBonificacao){
        $this->bonificacao = $novoBonificacao;
    }

    public function getBonificacao(){
        return $this->bonificacao;
    }

    public function setSalario($novoSalario){
        $this->salario = $novoSalario;
    }

    public function getSalario(){
        return $this->salario;
    }
}