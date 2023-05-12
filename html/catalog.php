


<section class="sectionCatalog">
    <?php foreach($catalogsList as $catalogs):?>
        <div class="catalogs" id="<?=$catalogs['id']?>">
            <!-- AllCatalogs -> catalogs -> catalog -->
            <?php foreach($catalogList as $catalog):?>
                <div class="catalog" id="<?=$catalog['id']?>">
                    <div class="headerCatalog"><h1><?=$catalog['nameCatalog']?></h1><hr><br></div>
                    <div class="tagsCatalog column">
                        <?php foreach($tagList as $tag):?>
                            <div class="tagCatalog row" id="<?=$tag['id']?>">
                                <div class="imgTagCatalog"><img src="<?=$tag['img']?>"></div>
                                <div class="nameTagCatalog"><?=$tag['name']?></div>
                            </div>
                        <?php endforeach?>
                        <div class="footherCatalog">
                            Показать все
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    <?php endforeach?>
</section>



