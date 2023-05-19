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
        $sede = $_POST['sede'];

        
    ?>
    <?php
    switch($zone){
        case 'Gradas':
            $zoneImg = '<img src="https://www.gradasytribunastelescopicas.com/imgs/3/CONGOST-MANRESA-031.jpg" alt="Gradas" style="width: 284px;height: 200px;">';
            break;
        case 'Palcos':
            $zoneImg = '<img src="http://coliseocentenario.com/wp-content/uploads/2018/03/PALCOS-min.jpg" alt="Palcos" style="width: 284px;height: 200px;">';
            break;
        case 'Nivel':
            $zoneImg = '<img src="https://correio-cdn3.cworks.cloud/fileadmin/user_upload/correio24horas/2018/12/05/palco4.JPG" alt="Nivel" style="width: 284px;height: 200px;">';
            break;
        case 'Puerto':
            $zoneImg = '<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsoyteatro.com%2Fwp-content%2Fuploads%2F2016%2F06%2FPALCOS.jpg&f=1&nofb=1&ipt=65389aa6cea57f8f8c014e050e2a2bf7d2c55711263babf86dcdb8341caff359&ipo=images" alt="Puerto" style="width: 284px;height: 200px;">';
            break;
    }
    ?>
    <?php
    switch($sede){
        case 'auditorios':
            $sedeImg = '<img style="width: 284px;height: 200px;" src="https://a.travel-assets.com/findyours-php/viewfinder/images/res60/168000/168271-Auditorio-Nacional.jpg" alt="Auditorio Nacional">';
            break;
        case 'palacioDeportes':
            $sedeImg = '<img style="width: 284px;height: 200px;" src="https://indiehoy.com/wp-content/uploads/2014/09/palacio-de-los-deportes-mexico-df.jpg alt="Palacio de los deportes">';
            break;
        case 'foroSol':
            $sedeImg = '<img style="width: 284px;height: 200px;"src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.adtec.com.mx%2Fphotos_b%2FForo%2520sol_b.jpg&f=1&nofb=1&ipt=1eeba9866d628e1e45658c85f12034a0e487ce0ec61a454c4db8cf2012d4a309&ipo=images" alt="Foro Sol">';
            break;
        case 'teatroMetropolitano':
            $sedeImg = '<img style="width: 284px;height: 200px;" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.adtec.com.mx%2Fphotos_b%2FForo%2520sol_b.jpg&f=1&nofb=1&ipt=1eeba9866d628e1e45658c85f12034a0e487ce0ec61a454c4db8cf2012d4a309&ipo=images" alt="Teatro Metropolitano">';
            break;
    }
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
            if($cantidad>15||$cantidad<0){
                echo 'No revendedores';
            }
            else{
                for ($i = 0; $i < $cantidad; $i++) {
                echo '
                <table class="tiket">
                    <tbody>
                        <tr><td>' . $firstName . ' ' . $lastName . '</td></tr>
                        <tr><td>Número de zona: ' . $zone . '</td></tr>
                        <tr><td>' . $zoneImg . '</td></tr>
                        <tr><td>Números de boletos: ' . $i . '</td></tr>
                        <tr><td>Nombre del evento: ' . $event . '</td></tr>
                        <tr><td>Número de sede: ' . $sede . '</td></tr>
                        <tr><td> ' . $sedeImg . '</td></tr>
                        <tr><td>Evento el día de: ' . $date . '</td></tr>
                    </tbody>
                </table>
                <br>
                ';
                }
            }
    ?>
</div>
</body>
</html>