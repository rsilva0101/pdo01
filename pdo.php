<?php
$pdo = new PDO("mysql:dbname=auladb01;host=localhost", "root", "");

$sql= $pdo->query('SELECT * FROM usuarios');

$dados= $sql->fetchAll( PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);