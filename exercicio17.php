<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="maior_numero">Dia</label>
        <input type="numero" name="dia" min="1" max="31">
        <label for="maior_numero">Mes</label>
        <input type="numero" name="mes" min="1" max="12">
        <label for="maior_numero">Mes</label>
        <input type="numero" name="ano" min="1">
        <button type="submit" name="verificar_data">verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        if (checkdate($dia, $mes, $ano)) {
            echo "<p> a data $dia/$mes/$ano e valida </p>";
        } else {
            echo "<p> a data $dia/$mes/$ano não e valida </p>";
        };
    };



    ?>
</body>

</html>