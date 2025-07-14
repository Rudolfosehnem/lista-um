<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior numero</title>
</head>
<body>
    <form method="POST">
        <label for="maior_numero">Informe um numero</label>
        <input type="numero" name="numero1">
        <label for="maior_numero">Informe o segundo numero</label>
         <input type="numero" name="numero2">
         <label for="maior_numero">Informe o terceiro numero</label>
         <input type="numero" name="numero3">
         <button type="submit" name="verificar_numero">verificar</button>
</form>
         <?php

         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['maior_numero'])) {
            $numero1 = $_POST['numero1'];
           $numero1 = $_POST['numero2'];
            $numero1 = $_POST['numero3'];
            if($numero1 > $numero2 and $numero1 > $numero3){
                echo ( $numero1. ' é o maior');
            } else if($numero2 > $numero1 and $numero2 > $numero3){
                echo ( $numero2. ' é o maior');
            }else ($numero3 > $numero1 and $numero3 > $numero2);
                echo ( $numero3. ' é o maior');
            };
                      };
         

    ?>
</body>
</html>