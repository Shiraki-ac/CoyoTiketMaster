<!DOCTYPE html>
<html lang="en">
<head>
    <!--CSS-->
    <link rel="stylesheet" href="../style/main.css">
    <!--META-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Data form input-->
    <?php 
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $zone = $_POST['zone'];
        $cantidad = $_POST['cantidad'];
        $event= $_POST['event'];
        $date = $_POST['date'];
    ?>
    <div class="conteiner">
        <nav class="navBar">
            <h1 style="padding-left: 15%;">CoyoTikets</h1>
            <div class="links">
                <a href="index.html" class="link">Home</a>
                <a href="register.html" class="link">Register</a>
                <a href="boletos.html" class="link">Boletos</a>
            </div>
        </nav>
    </div>
    <div class="boleto">
        <?php    
    for ($i = 0; $i < $cantidad; $i++) {
        echo '<table class="tiket">';
        echo '<tbody>';
        echo '<tr><td>' . $firstName . ' ' . $lastName . '</td></tr>';
        echo '<tr><td>Número de zona: ' . $zone . '</td></tr>';
        echo '<tr><td>Números de boletos: ' . ($i + 1) . '/2</td></tr>';
        echo '<tr><td>Nombre del evento: ' . $event . '</td></tr>';
        echo '<tr><td>Evento el día de: ' . $date . '</td></tr>';
        echo '</tbody>';
        echo '</table>';
        echo '<br>'; // Agregamos una línea en blanco entre cada tabla
    }
    ?>

    </div>  
</body>
</html>