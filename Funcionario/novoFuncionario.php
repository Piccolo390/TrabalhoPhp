<?php

require_once "../Vendedor/Vendedor.php";
require_once "../Consultor/Consultor.php";
require_once "../Gerente/Gerente.php";

$novoVendedor = new Vendedor;
$novoConsultor = new Consultor;
$novoGerente = new Gerente;

$button = $_POST["button"];

if($button == "gerente"){
    $dadosNome = $_POST["Nome"];
    $dadosRg = $_POST["Rg"];

    $dadosBonificacao = $_POST["Bonificacao"];
    $dadosSalario = $_POST["Salario"];

    $novoGerente->setNome($dadosNome);
    $novoGerente->setRg($dadosRg);

    $novoGerente->setBonificacao($dadosBonificacao);
    $novoGerente->setSalario($dadosSalario);

    $nome = $novoGerente->getNome();
    $rg = $novoGerente->getRg();

    $bonificacao = $novoGerente->getBonificacao();
    $salario = $novoGerente->getSalario();

    echo "Nome: " . $nome . "<br>";
    echo "Rg: " . $rg . "<br>";

    echo "Bonificação: " . $bonificacao . "<br>";
    echo "Salário: " . $salario;
}

if($button == "consultor"){
    $dadosNome = $_POST["Nome"];
    $dadosRg = $_POST["Rg"];

    $dadosValorHora = $_POST["ValorHora"];
    $dadosHorasTrabalhadas = $_POST["HorasTrabalhadas"];

    $novoConsultor->setNome($dadosNome);
    $novoConsultor->setRg($dadosRg);

    $novoConsultor->setValorhora($dadosValorHora);
    $novoConsultor->setHorasTrabalhadas($dadosHorasTrabalhadas);

    $nome = $novoConsultor->getNome();
    $rg = $novoConsultor->getRg();

    $valorHora = $novoConsultor->getValorhora();
    $horasTrabalhadas = $novoConsultor->getHorasTrabalhadas();
    
    echo "Nome: " . $nome . "<br>";
    echo "Rg: " . $rg . "<br>";

    echo "Valor à Hora: " . $valorHora . "<br>";
    echo "Horas Trabalhadas: " . $horasTrabalhadas;
}

if($button == "vendedor"){
    $dadosNome = $_POST["Nome"];
    $dadosRg = $_POST["Rg"];

    $dadosComissao = $_POST["Comissao"];
    $dadosNumeroVendas = $_POST["NumeroVendas"];

    $novoVendedor->setNome($dadosNome);
    $novoVendedor->setRg($dadosRg);

    $novoVendedor->setComissao($dadosComissao);
    $novoVendedor->setNumeroVendas($dadosNumeroVendas);

    $nome = $novoVendedor->getNome();
    $rg = $novoVendedor->getRg();

    $comissao = $novoVendedor->getComissao();
    $numeroVendas = $novoVendedor->getNumeroVendas();
    
    echo "Nome: " . $nome . "<br>";
    echo "Rg: " . $rg . "<br>";

    echo "Comissão: " . $comissao . "<br>";
    echo "Numero de Vendas: " . $numeroVendas;
}

// if($funcionario == "gerente" && $button == "button"){
//     $dadosNome = $_POST["Nome"];
//     $dadosRg = $_POST["Rg"];

//     $dadosBonificacao = $_POST["Bonificacao"];
//     $dadosSalario = $_POST["Salario"];

//     $novoGerente->setNome($dadosNome);
//     $novoGerente->setRg($dadosRg);

//     $novoGerente->setBonificacao($dadosBonificacao);
//     $novoGerente->setSalario($dadosSalario);

//     $nome = $novoGerente->getNome();
//     $rg = $novoGerente->getRg();

//     $bonificacao = $novoGerente->getBonificacao();
//     $salario = $novoGerente->getSalario();

//     echo $nome, $rg, $bonificacao, $salario;
// }