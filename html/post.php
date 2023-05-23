<?php
    require_once 'php/dbConnect.php';
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

        (SELECT GROUP_CONCAT('<div id=',Tag.idTag,'>',Tag.name,'</div>' SEPARATOR '') FROM Tag, Tag_Post WHERE
        Tag.idTag=Tag_Post.idTag and Tag_Post.idPost=Post.idPost) AS 'tagsPost'
        
        FROM Post, User WHERE Post.idUser=User.idUser
        ORDER BY Post.data DESC"
    );
?>


<!-- Название тега -->
<!-- <div class="headerSectionPost"><h1>Tag name</h1><hr><br></div> -->
<?php foreach($postsList as $post):?>
    <div class="post" id_post="<?=$post['idPost']?>">
        <div class="containerPost">
            <div class="headerPost">
                <img src="<?=$post['avatarAuthor']?>" class="imgAvatarPost" onerror="this.src='img/TestImgAvatar.png'">
                <div class="column">
                    <p class="textPost"><?=$post['nameAuthor']?></p>
                    <p class="textPost">ID user: <?=$post['idAuthor']?></p>
                </div>
            </div>
            <div class="tagsPost"><?=$post['tagsPost']?></div>
            <div class="contentPost"><?=$post['contentPost']?></div>
            <div class="footherPost">
                <button>Коментарии</button>
                <div><?=$post['dataPost']?></div>
                <div>id: <?=$post['idPost']?></div>
                <div>Рейтинг: <?=$post['ratingPost']?></div>
            </div>
        </div>
        <div class="comments">
            
            <div class="comment" id_comment="<?=$comment['idComment']?>">
                <form class="containerComment contentComment" method="post" action="php/commentInput.php">
                    <input name="idPost" value="<?=$post['idPost']?>" type="hidden"></input>
                    <textarea name="commentInput"></textarea>
                    <button>Отправить</button>
                </form>
            </div>

            <?php
                session_start();
                require_once 'php/dbConnect.php';
                $comments = mysqli_query($dbConnection,
                "SELECT
                Comment.idComment AS 'idComment',
                Comment.content AS 'content',
                User.idUser AS 'idUser',
                User.name AS 'name',
                User.avatar AS 'avatar'

                FROM Comment,User
                WHERE Comment.idUser = User.idUser AND Comment.idPostParent = " . $post['idPost'] . "
                ORDER BY Comment.data DESC");
            ?>
            <?php foreach($comments as $comment):?>
            <div class="comment" id_comment="<?=$comment['idComment']?>">
                <div class="containerComment">
                    <div class="headerComment">
                        <img src="<?=$comment['avatar']?>" class="imgAvatarComment" onerror="this.src='img/TestImgAvatar.png'">
                        <div class="column">
                            <p class="textComment"><?=$comment['name']?></p>
                            <p class="textComment">ID: <?=$comment['idUser']?></p>
                        </div>
                    </div>
                    <div class="contentComment"><?=$comment['content']?></div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
<?php endforeach?>
