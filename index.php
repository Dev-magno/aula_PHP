<?php
// isso é um comentário
echo "Hello World";
echo "<b> Olá Mundo </b>";
$nome = "Fulano";
$idade = 30;
define("PI", 3.14);

echo PI;
echo $nome;

echo "Meu nome é: " . $nome . "<br>";

echo "Meu nome é: $nome <br>";

echo strlen($nome);

echo "<pre>";
var_dump($nome);
echo "<pre>";

$frutas = array('maça', 'banana', 'manga');

foreach($frutas as $elemento){
    echo $elemento . "<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hellow World</h1>
</body>
</html>