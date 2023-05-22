<?php
    require_once './php/dbConnect.php';
    $mainTagList = mysqli_query(
        $dbConnection,
        "SELECT 
        Tag.idTag AS 'idTag',
        Tag.name AS 'name'
        FROM Tag
        WHERE Tag.idTagParent = '0'"
    );
?>





    <!-- Main Tags -->
    <div class="catalog" style="background-color: #ff0;">
        <div class="headerCatalog"><h1>Main Tags</h1><hr></div>
        <div class="tagsCatalog">
            <?php foreach($mainTagList as $tag):?>
                <div class="tagCatalog"><div class="imgTagCatalog"><img src="" onerror="this.src='img/TestImgTag.png'"></div><div class="column"><p><?=$tag['name']?></p><p>ID tag: <?=$tag['idTag']?></p></div></div>
            <?php endforeach?>
            <!-- <div class="footherCatalog" id="">Показать все</div> -->
        </div>
    </div>



    
    <?php foreach($mainTagList as $tag):?>
    <div class="catalog">
        <div class="headerCatalog"><h1>Tag: <?=$tag['name']?></h1><hr></div>
        <div class="tagsCatalog">
            <?php require_once './php/dbConnect.php';
                $popularTagList = mysqli_query(
                    $dbConnection,
                    "SELECT 
                    Tag.idTag AS 'idTag',
                    Tag.name AS 'name'
                    FROM Tag
                    WHERE Tag.idTagParent=" . $tag['idTag']
                );
            ?>
            <?php foreach($popularTagList as $tagLittle):?>
                <div class="tagCatalog"><div class="imgTagCatalog"><img src="" onerror="this.src='img/TestImgTag.png'"></div><div class="column"><p><?=$tagLittle['name']?></p><p>ID tag: <?=$tag['idTag']?></p></div></div>
            <?php endforeach?>
            <!-- <div class="footherCatalog" id="">Показать все</div> -->
        </div>
    </div>
    <?php endforeach?>










