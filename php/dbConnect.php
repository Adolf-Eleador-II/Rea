


<?php
    $dbIp = 'localhost';
    $dbLogin = 'root';
    $dbPass  = '';
    $dbName = 'Rea';

    $dbConnection = mysqli_connect($dbIp, $dbLogin, $dbPass, $dbName);
    if (!$dbConnection)
        die('Не удалось подключиться к БД');
?>




