<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (correção)</title>
</head>
<body>
    <h1>Exercício 01</h1>
    <hr>
<?php
require_once "src/Livro.php";
$livro = new Livro;

$livro->setTitulo('Senhor dos Anéis');
$livro->setAutor('Tolkien');
$livro->setPaginas(500);
?>

<h2>Dados</h2>
<p> <?=$livro->getTitulo()?></p>
<p> <?=$livro->getAutor()?></p>
<p> <?=$livro->getPaginas()?></p>
</body>
</html>