<?php
    session_start();
    require_once 'dbConnect.php';

    $nameUser  = $_POST['regName'];
    $passUser  = md5($_POST['regPass']);

    $pathUser = 'uploads/avatar/' . time() . $_FILES['regAvatar']['name'];
    if (!move_uploaded_file($_FILES['regAvatar']['tmp_name'], '../' . $pathUser)) {
        $pathUser = NULL;
    }

    mysqli_query(
    $dbConnection, 
    "INSERT INTO User (`name`, pass, avatar) 
        VALUES ('$nameUser', '$passUser', '$pathUser')"
    );

    header('Location: ../index.php');
    return;
?>
