<?php

// require "./php/Produto.php";

// $produto1 = new Produto();
// $produto1->setNome("Bolacha");
// $produto1->setMarca("Trakinas");
// $produto1->setdescricao("Bolacha recheada da marca Trakinas");
// $produto1->setValor(5, 00);
// $produto1->imprimir();

// require "./php/Cliente.php";

// $cliente = new Cliente();

// $cliente->setNome("Guilherme");
// $cliente->setCpf(12345123);
// $cliente->setDataNasc(2005);
// $cliente->setEndereco("ASDKASLDASDKAS");
// $cliente->setEmail("guilherme.santos353@fatec.sp.gov.br");
// $cliente->setTelefone(188996316396);
// $cliente->verificarMaiorIdade();

// require "./php/Professor.php";

// $professor = new Professor();

// $professor->setNome("Guilherme");
// $professor->setCpf(12345123);
// $professor->setDataNasc(2005);
// $professor->setEmail("guilherme.santos353@fatec.sp.gov.br");
// $professor->setTelefone(188996316396);
// $professor->setMateriaLecionada("Historia");
// $professor->imprimir();

require "./php/Disciplina.php";

$disciplina = new Disciplina();

$disciplina->setNome("Historia");
$disciplina->setCodigo(1);
$disciplina->setProfessorResponsavel("Guilherme");
$disciplina->setCargaHorariaTotal("200 horas");
$disciplina->setTurmas("1º AMS Analise e Desenv. de Sistemas");
$disciplina->setEmenta("Introdução ao estudo da História: conceitos, objetivos e métodos
<br>Pré-História e as primeiras civilizações
<br>Antiguidade clássica: Grécia e Roma
<br>Idade Média: Europa feudal, Renascimento e Reforma
<br>Idade Moderna: descobrimentos, expansão colonial, Revoluções Inglesa e Francesa
<br>Idade Contemporânea: Revolução Industrial, Imperialismo, Primeira e Segunda Guerras Mundiais, Guerra Fria e globalização
<br>História do Brasil e da América Latina: período colonial, independência, República, movimentos sociais e culturais
<br>História da África, Ásia e Oriente Médio
<br>Análise de fontes históricas: documentos, imagens, artefatos, testemunhos orais, entre outros
<br>Debates historiográficos e perspectivas teóricas
<br>Habilidades de pesquisa e escrita acadêmica");
$disciplina->imprimir();
