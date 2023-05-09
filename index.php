<?php

require "./php/Produto.php";

$produto1 = new Produto();
$produto1->setNome("Bolacha");
$produto1->setMarca("Trakinas");
$produto1->setdescricao("Bolacha recheada da marca Trakinas");
$produto1->setValor(5, 00);
$produto1->imprimir();


