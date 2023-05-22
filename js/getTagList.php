<?php
    session_start();
    require_once '../php/dbConnect.php';
    $result = mysqli_query($dbConnection, "SELECT Tag.idTag,Tag.name FROM Tag WHERE idTagParent = " . $_GET['id']);
?>

<option></option>
<?php foreach($result as $tag):?>
    <option value="<?=$tag['idTag']?>"><?=$tag['name']?></option>
<?php endforeach?>
