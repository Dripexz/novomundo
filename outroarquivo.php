<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    $nomealuno = $_GET['Nomealuno'];
    $nota1 = $_GET['Colocanota1'];
    $nota2 = $_GET['Colocanota2'];
    $nota3 = $_GET['Colocanota3'];

    $media = ($nota1 + $nota2 + $nota3)/3;

    $mediaround = round($media);

    echo"<h1> A média de $nomealuno</h1>";

    echo "sua média é $mediaround";
    if ($mediaround < 8) {
        echo "<p style='color:red'>Você foi reprovado<p/>";
        echo"<br>";
    }elseif ($mediaround >= 8) {
        echo "<p style='color:green'> Você foi aprovado<p/>";
        echo"<br>";
    }

    echo "<button onclick=\"window.location= 'index.html'\">Voltar</button>";


    ?>
</body>
</html>