
<?php
    session_start();
    require_once 'dbConnect.php';
    $content = '';
    $user = $_SESSION['user']['id'];

    for($i=0;;$i++){
        if($_POST['text_' . $i]){
            $content .= "<div class=\"textPost\"><p>" . str_replace("\n","</p><p>",$_POST['text_'.$i]) . "</p></div>";
        }
        else if($_FILES['img_' . $i]){
            $pathUser = 'uploads/content/' . time() . $_FILES['img_' . $i]['name'];
            if (!move_uploaded_file($_FILES['img_' . $i]['tmp_name'], '../' . $pathUser)) {
                $pathUser = NULL;
            }
            $content .= "<div class=\"imgPost\"><img src=\"" . $pathUser . "\"></div>";            
        }
        else{ break; }
    }
    
    if($content != ''){
        mysqli_query(
            $dbConnection, 
            "INSERT INTO Post (content, idUser, rating) 
                VALUES ('$content','$user','0')"
        );
        
        $idPost = mysqli_insert_id($dbConnection);


        $tag = '';
        for($i=0;;$i++){
            if($_POST['select_' . $i . '_tag_0']){
                for($j=0;;$j++){
                    if($_POST['select_' . $i . '_tag_' . $j]){
                        $tag .= $_POST['select_' . $i . '_tag_' . $j] . ' ';
                    }
                    else{ break; }
                }
            }
            else{ break; }
        }
        $arrayTag = explode(' ',$tag);
        $arrayTag = array_unique($arrayTag);

        foreach($arrayTag as $idTag){
            mysqli_query(
            $dbConnection, 
            "INSERT INTO Tag_Post (idPost, idTag) 
                VALUES ('$idPost','$idTag')"
            );
        }
    }


    header('Location: ../index.php');
    return;
?>




