
<section class="posts">
    <?php foreach($postsList as $post):?>
        <div class="post" id="<?=$post['id']?>">
            <div class="containerPost">
                <div class="headerPost">
                    <!-- пост -> создатель поста -> ник и аватар пользователя -->
                    <img src="img/TestProfileAvatar.png" class="imgAvatarPost">
                    <p class="textPost">Test Name</p>
                </div>
                <div class="contentPost column">
                    <div class="imgPost"><img src="img/Togetha.png"></div>
                    <div class="textPost"><h1>Rykard, Lord of Blasphemy</h1><p>Now, we can devour the gods, together!</p><p>Together, we will devour the very gods!</p></div>
                    <div class="imgPost"><img src="img/1000.png"></div>
                </div>
                <div class="footherPost">
                    <button>Коментарии</button>
                    <div><?=$post['data']?></div>
                    <div><?=$post['id']?></div>
                    <!-- <div>Рейтинг</div> -->
                </div>
            </div>
            

            <div class="commentsPost">
                <?php foreach($comentsList as $coment):?>
                    <div class="commentPost" id="<?=$coment['id']?>">
                        <div class="containerCommentPost">
                            <div class="headerCommentPost">
                                <!-- коммит -> создатель коммита -> ник и аватар пользователя -->
                                <img src="img/TestProfileAvatar.png" class="imgAvatarCommentPost">
                                <p class="textCommentPost">Cow Master I</p>
                            </div>
                            <div class="contentCommentPost">
                                <!-- коммит -> контент комита -> содержание коммита -->
                                <div class="textCommentPost"><p>Now, we can devour the gods, together!</p></div>
                                <!-- коммит -> контент комита -> содержание коммита -->
                                <div class="imgCommentPost"><img src="img/Togetha.png"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    <?php endforeach?>
</section>


