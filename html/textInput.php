
<?php
    require_once './php/dbConnect.php';
    $mainTagList = mysqli_query(
        $dbConnection,
        "SELECT 
        Tag.idTag AS 'idTag',
        Tag.name AS 'name'
        FROM Tag
        WHERE Tag.idTagParent IS NULL"
    );
?>



<form id="sectionTextInput" name="textInput" method="post" action="./php/textInput.php" enctype="multipart/form-data">
    <div class="textInput">
        <div class="containerTextInput">
            <div class="bottonBarTextInput">
                <button type="button">Add Tag</button>
                <button type="button">Add Text Block</button>
                <button type="button">Add IMG Block</button>
                <button type="button">Delete Last Tag</button>
                <button type="button">Delete Last Block</button>
            </div>  
            <div class="tagsTextInput">
                <!-- <div name="select_0" class="selectsTag">
                    <select name="select_0_tag_0">
                        <option></option>
                        < ?php foreach($mainTagList as $tag):?><option value="< ?=$tag['idTag']?>">< ?=$tag['name']?></option>< ?php endforeach?>
                    </select>
                    <select name="select_0_tag_1">
                        <option></option>
                        < ?php foreach($mainTagList as $tag):?><option value="< ?=$tag['idTag']?>">< ?=$tag['name']?></option>< ?php endforeach?>
                    </select>
                </div> -->
            </div>
            <div class="contentTextInput"></div>
            <div class="footherTextInput"><button type="submit">Опубликовать</button></div>
        </div>
    </div>
</form>




