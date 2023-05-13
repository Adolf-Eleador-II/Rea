<header class="header">
    <div class="logoHeader">
        <div>
            <img src="img/CowAndClick.svg" class="imgLogoHeader">
            <img src="img/chicken.svg" class="imgLogoHeader">
        </div>
        <div class="column">
            <h1>No gods</h1>
            <h1>No kings</h1>
            <h1>Only cows and chickens</h1>
        </div>
    </div>
    <?php if(isset($_SESSION['user'])):?>
    <div class="userHeader row" style="padding: 5px 75px; background-color: rgb(251, 0, 255);">
        <div class="row">
            <img class="imgAvatarPost" id="avatarUserPasture" src="<?=$_SESSION['user']['avatar']?>" onerror="this.src='img/avatar.png'">
            <div class="column">
                
                <p id="nameUserPasture"><?=$_SESSION['user']['name']?></p>
                <p id="idUserPasture"><?=$_SESSION['user']['id']?></p>
                <p id="emailUserPasture"><?=$_SESSION['user']['email']?></p>
               
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="listHeader">
        <div class="pagesListHeader">
            <p>Лента</p>
            <p>Обсуждаемое</p>
            <p>Люди</p>
        </div>
        <?php if(isset($_SESSION['user'])):?>
        <div class="pagesListHeader">
            <p>Вход</p>
            <p>Регистрация</p>
        </div>
        <?php else:?>
        <div class="pagesListHeader">
            <p>Выход</p>
        </div>
        <?php endif; ?>
    </div>
</header>