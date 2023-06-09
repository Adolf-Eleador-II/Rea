<?php
    require_once 'php/dbConnect.php';

    if($_GET['id']!=0){ $findTag = " FROM Post,User,Tag_Post WHERE Post.idUser=User.idUser AND Post.idPost=Tag_Post.idPost AND Tag_Post.idTag=" . $_GET['id']; }
    else{ $findTag = " FROM Post,User WHERE Post.idUser=User.idUser "; }

    $postsList = mysqli_query(
        $dbConnection,
        "SELECT 
        Post.idPost  AS 'idPost',
        Post.content AS 'contentPost',
        Post.data    AS 'dataPost',
        User.idUser  AS 'idAuthor',
        User.name    AS 'nameAuthor',
        User.avatar  AS 'avatarAuthor',

        (SELECT GROUP_CONCAT('<a id_tag=',Tag.idTag,'>',Tag.name,'</a>' SEPARATOR '') FROM Tag, Tag_Post WHERE
        Tag.idTag=Tag_Post.idTag and Tag_Post.idPost=Post.idPost) AS 'tagsPost'
        " . $findTag . " ORDER BY Post.data DESC"
    );
?>

<?php if($_GET['id']!=0):?>
    <?php
        require_once 'php/dbConnect.php';
        $findTag = mysqli_query($dbConnection, "SELECT * FROM Tag WHERE idTag=" . $_GET['id']);
    ?>
    <?php foreach($findTag as $gg):?>
        <div class="headerSectionPost"><h1><?=$gg['name']?></h1><hr></div>
    <?php endforeach?>
<?php endif;?>

<?php foreach($postsList as $post):?>
    <div class="post" id_post="<?=$post['idPost']?>">
        <div class="containerPost">
            <div class="headerPost">
                <img src="<?=$post['avatarAuthor']?>" class="imgAvatarPost" onerror="this.src='img/TestImgAvatar.png'">
                <div class="column">
                    <p class="textPost"><?=$post['nameAuthor']?></p>
                    <p class="textPost">ID: <?=$post['idAuthor']?></p>
                </div>
            </div>
            <div class="tagsPost"><?=$post['tagsPost']?></div>
            <div class="contentPost"><?=$post['contentPost']?></div>
            <div class="footherPost">
                <button>Коментарии</button>
                <div><?=$post['dataPost']?></div>
                <div>ID: <?=$post['idPost']?></div>
            </div>
        </div>
        <div class="comments">
            <?php if(isset($_SESSION['user'])):?>
                <div class="comment" id_comment="<?=$comment['idComment']?>">
                    <form class="containerComment contentComment" method="post" action="php/commentInput.php">
                        <input name="idPost" value="<?=$post['idPost']?>" type="hidden"></input>
                        <textarea name="commentInput"></textarea>
                        <button>Отправить</button>
                    </form>
                </div>
            <?php endif;?>
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
