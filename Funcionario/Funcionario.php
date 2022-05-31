<?php 

class Funcionario{
    protected $nome;
    protected $rg;

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setRg($novoRg){
        $this->rg = $novoRg;
    }

    public function getRg(){
        return $this->rg;
    }
}