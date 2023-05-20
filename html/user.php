
<?php if(isset($_SESSION['user'])):?>
    <div class="user">
        <div class="headerUser">
                <img class="imgAvatarUser" src="<?=$_SESSION['user']['avatar']?>" onerror="this.src='img/avatar.png'">
                <p>Name: <?=$_SESSION['user']['name']?></p>
                <p>ID: <?=$_SESSION['user']['id']?></p>
        </div>
    </div>
<?php endif; ?>






