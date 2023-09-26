<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nome = "isis";
$idade = 17;
$count = 0;
$data = 2023;

echo "Eita Porra!!!!!!!!<br>";
echo "$nome, $idade ";
echo "<h3> Bem vindo ao Infer ou, não, pera, bem vindo ao IFSC - Programação<h3>";
$count +=4; 
echo $count.$nome; //não precisa de aspas pois o professor contatenou as variaveis com o ponto
$data -=2005;
echo "<br>sua idade é: $data";
switch ($data)  { //if
    case ($data <=18):
        echo " vc é um pipurucho";
        break;
    case ($data >=18):
        echo " vc é um querido jaja";
        break;
} 
?>
</body>
</html>

