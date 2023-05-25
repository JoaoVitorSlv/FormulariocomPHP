<?php
if(!isset($_SESSION)){
    session_start();
}

$user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-size: 30px;
    }
</style>
<body>
    Seja bem vindo <?php echo $_SESSION['user'] ?>
</body>
</html>