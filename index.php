<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Isso é html</h1>

    <?php
      $dia = "terça";
      $temperatura = 32;
      $temperaturafrio = 20;
      $clima = "quente";

    
      if ( $temperatura > 30) {
      $clima = "quente";
      }elseif ($temperatura <= 30 && $temperatura >= 25)  {
        $clima ="frio";
        }elseif ($temperatura < 25 ){
            $clima = "Muito frio";
        };

      echo ("O dia está $clima com $temperatura e o dia hoje é $dia");

      $msg = "bem vindo";
      $user = "SESE";


       $nome = array("1", "2", "3" ,"4");

       foreach ($nome as $n){
            echo "<br>";
            echo $n;
       };

      
    ?>
</body>
</html>