<?php

// require "./php/Produto.php";

// $produto1 = new Produto();
// $produto1->setNome("Bolacha");
// $produto1->setMarca("Trakinas");
// $produto1->setdescricao("Bolacha recheada da marca Trakinas");
// $produto1->setValor(5, 00);
// $produto1->imprimir();

require "./php/Cliente.php";

$cliente = new Cliente();

$cliente->setNome("Guilherme");
$cliente->setCpf(12345123);
$cliente->setDataNasc(2005);
$cliente->setEndereco("ASDKASLDASDKAS");
$cliente->setEmail("guilherme.santos353@fatec.sp.gov.br");
$cliente->setTelefone(188996316396);
$cliente->verificarMaiorIdade();
