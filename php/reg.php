<?php
    session_start();
    require_once 'dbConnect.php';

    $nameUser  = $_POST['regName'];
    $emailUser = $_POST['regEmail'];
    $passUser  = md5($_POST['regPass']);

    $pathUser = 'uploads/avatar/' . time() . $_FILES['regAvatar']['name'];
    if (!move_uploaded_file($_FILES['regAvatar']['tmp_name'], '../' . $pathUser)) {
        $pathUser = NULL;
    }

    mysqli_query(
    $dbConnection, 
    "INSERT INTO `User` (`nameUser`, `emailUser`, `passUser`, `avatarUser`) 
        VALUES ('$nameUser', '$emailUser', '$passUser', '$pathUser')"
    );

    header('Location: ../index.php');
    return;
?>
