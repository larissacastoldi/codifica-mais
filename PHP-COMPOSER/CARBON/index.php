<?php
// php -S localhost: 8000  para abrir a web

require 'vendor/autoload.php';

use Carbon\Carbon;

$dataAniversario = Carbon::parse('2026-09-23');
$dataDeHoje = Carbon::now();

$diferencaEmDias = (int)$dataDeHoje->diffInDays($dataAniversario); 


printf("Faltam ".$diferencaEmDias." dias para o meu aniversário!"."\n"); 

// ------------------------------------------------------------------
echo "<br>";
echo "<br>";

$dataDeNascimento = Carbon::parse('2005-09-23');
$dataDeHoje = Carbon::now();

$diferencaEmAnos = (int)$dataDeNascimento->diffInYears($dataDeHoje); 

printf("Eu tenho ".$diferencaEmAnos." anos!"); 

// --------------------------------------------------------------------
echo "<br>";
echo "<br>";
$dataDeNascimento = Carbon::parse('2005-09-23');
$dataDeHoje = Carbon::now();

$diferencaDiasDesdeNascimento = (int)$dataDeNascimento->diffInDays($dataDeHoje); 

printf("Eu tenho ".$diferencaDiasDesdeNascimento." dias de vida!");  

// --------------------------------------------------------------------
echo "<br>";
echo "<br>";

// Definir a localidade para português (Brasil) globalmente
Carbon::setLocale('pt_BR');

// Criar uma instância do Carbon para uma data específica
$data = Carbon::createFromDate(2005, 9, 23); 

// Obter o nome do dia da semana
$diaDaSemana = $data->dayName;

printf("Eu nasci na ".$diaDaSemana." !");
