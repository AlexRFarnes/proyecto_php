<?php
    $nombre = "Saul Alexander Reynoso Farnes";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 3 PHP</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            text-align: center;
            background-color: #07002c;
            min-height: 100vh;
        }
        h1 {
            color: #e8e8e8;
            margin-top: 50px;
        }
        img {
            width: 400px;
            height: 400px;
            border-radius: 10px;
            border: 2px solid #333;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Hola mundo, soy <?php echo $nombre; ?></h1>
    <img src="/proyecto_php/image.jpg" alt="Una rana programando en una laptop tomanndo café"/>
</body>
</html>