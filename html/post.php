<?php
    require_once './php/dbConnect.php';
    $postsList = mysqli_query(
        $dbConnection,
        "SELECT 
        Post.idPost  AS 'idPost',
        Post.content AS 'contentPost',
        Post.data    AS 'dataPost',
        Post.rating  AS 'ratingPost',
        User.idUser  AS 'idAuthor',
        User.name    AS 'nameAuthor',
        User.avatar  AS 'avatarAuthor',
        
        (SELECT GROUP_CONCAT(Tag.name SEPARATOR ', ') FROM Tag, Tag_Post WHERE
        Tag.idTag=Tag_Post.idTag and Tag_Post.idPost=Post.idPost) AS 'tagsPost'
        
        FROM Post
        LEFT JOIN User ON Post.idUser=User.idUser"
    );
?>


<section class="sectionPost">
    <!-- Название тега -->
    <!-- <div class="headerSectionPost"><h1>Tag name</h1><hr><br></div> -->
    <div class="posts">
        <?php foreach($postsList as $post):?>
            <div class="post" id_post="<?=$post['idPost']?>">
                <div class="containerPost">
                    <div class="headerPost">
                        <img src="<?=$post['avatarAuthor']?>" class="imgAvatarPost" onerror="this.src='img/avatar.png'">
                        <div class="column">
                            <p class="textPost"><?=$post['nameAuthor']?></p>
                            <p class="textPost"><?=$post['idAuthor']?></p>
                        </div>
                    </div>
                    <div class="tagsPost">Tags: <?=$post['tagsPost']?></div>
                    <div class="contentPost">
                        <?=$post['contentPost']?>
                        <!-- <div class="textPost"><h1>Rykard, Lord of Blasphemy</h1><p>Now, we can devour the gods, together!</p><p>Together, we will devour the very gods!</p></div> -->
                    </div>
                    <div class="footherPost">
                        <button>Коментарии</button>
                        <div><?=$post['dataPost']?></div>
                        <div>id: <?=$post['idPost']?></div>
                        <div>Рейтинг: <?=$post['ratingPost']?></div>
                    </div>
                </div>
                <div class="commentsPost"></div>

                <!-- <div class="commentsPost">< ?php foreach($comentsList as $coment):?><div class="commentPost" id="< ?=$coment['id']?>"><div class="containerCommentPost"><div class="headerCommentPost"><!-- коммит -> создатель коммита -> ник и аватар пользователя -- ><img src="img/TestProfileAvatar.png" class="imgAvatarCommentPost"><p class="textCommentPost">Cow Master I</p></div><div class="contentCommentPost"><!-- коммит -> контент комита -> содержание коммита -- ><div class="textCommentPost"><p>Now, we can devour the gods, together!</p></div><!-- коммит -> контент комита -> содержание коммита -- ><div class="imgCommentPost"><img src="img/Togetha.png"></div></div></div><div class="commentsPost"></div></div>< ?php endforeach?></div> -->

            </div>
        <?php endforeach?>
    </div>
</section>


