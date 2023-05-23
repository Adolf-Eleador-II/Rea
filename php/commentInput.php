
<?php
    session_start();
    require_once 'dbConnect.php';
    $content = $_POST['commentInput'];
    $idPost = $_POST['idPost'];
    $user = $_SESSION['user']['id'];

    if($content != ''){
        mysqli_query(
            $dbConnection, 
            "INSERT INTO Comment (idPostParent, idUser,content) 
                VALUES ('$idPost','$user','$content')"
        );
    }

    header('Location: ../index.php');
    return;
?>
