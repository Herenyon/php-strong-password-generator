<?php
include __DIR__ .'/partials/function.php';
$password_lenght = $_GET['number'];



$password = randomPassword($password_lenght);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        
        <input type="number" name="number" placeholder="inserisci la lunghezza della tua password">
        <button>Invia</button>
    </form>
    <div> <?php echo $password ?></div>
</body>
</html>