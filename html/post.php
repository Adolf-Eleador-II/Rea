


<section class="posts">
    <?php foreach($postsList as $post):?>
        <div class="post" id="<?=$post['id']?>">
            <div class="containerPost">
                <div class="headerPost row">
                    <!-- пост -> создатель поста -> ник и аватар пользователя -->
                    <img src="img/1000.png" class="imgAvatarPost">
                    <p class="textPost">Cow Master</p>
                </div>
                <div class="contentPost column">
                    <div class="imgPost"><img src="img/Togetha.png"></div>
                    <div class="textPost"><h1>Rykard, Lord of Blasphemy</h1><p>Now, we can devour the gods, together!</p><p>Together, we will devour the very gods!</p></div>
                    <div class="imgPost"><img src="img/1000.png"></div>
                    <div class="imgPost"><img src="img/50.png"></div>
                </div>
                <div class="unwrap">
                    <button class="unwrapButton">Развернуть</button>
                </div>
                <div class="footherPost row">
                    <button>Коментарии</button>
                    <div><?=$post['data']?></div>
                    <div><?=$post['id']?></div>
                    <!-- <div>Рейтинг</div> -->
                </div>
            </div>
            
            <!-- All -->
                <div class="commentsPost">
                    <?php foreach($comentsList as $coment):?>
                    <!-- 0 -->
                        <div class="commentPost" id="<?=$coment['id']?>">
                            <div class="containerCommentPost">
                                <div class="headerCommentPost row">
                                    <!-- коммит -> создатель коммита -> ник и аватар пользователя -->
                                    <img src="img/1000.png" class="imgAvatarCommentPost">
                                    <p class="textCommentPost">Cow Master I</p>
                                </div>
                                <div class="contentCommentPost column">
                                    <!-- коммит -> контент комита -> содержание коммита -->
                                    <div class="textCommentPost"><p>Now, we can devour the gods, together!</p></div>
                                    <!-- коммит -> контент комита -> содержание коммита -->
                                    <div class="imgCommentPost"><img src="img/Togetha.png"></div>
                                </div>
                            </div>
                        </div>
                    <!--  -->
                    <?php endforeach?>
                </div>
            <!--  -->
        </div>
    <?php endforeach?>
</section>


