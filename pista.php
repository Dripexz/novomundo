<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    require_once('carro.php');
    
    $meu_carro = new Carro;

    $meu_carro->ligar();
    
    
    ?>
</body>
</html>