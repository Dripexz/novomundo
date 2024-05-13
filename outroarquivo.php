<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"<h1>média dos alunos doidos</h1>";

    $nota1 = 6;
    $nota2 = 8;
    $nota3 = 10;

    $media = ($nota1 + $nota2 + $nota3)/3;

    if ($media < 8) {
        echo "Você foi reprovado";
        echo"<br>";
    }elseif ($media >= 8) {
        echo "Você foi aprovado";
        echo"<br>";
    }



    echo "sua média é $media";
    ?>
</body>
</html>