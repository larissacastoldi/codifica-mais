<?php


$pdo = new PDO("mysql:host=localhost;dbname=sistema_login","root","L@ri2005");


// Adicione esta linha abaixo da criação do objeto $pdo
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 