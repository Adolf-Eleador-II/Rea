<header class="header">
    <div class="logoHeader">
        <div>
            <img src="img/chicken.svg" class="imgLogoHeader">
        </div>
        <div class="column">
            <h1>No gods</h1>
            <h1>No kings</h1>
            <h1>Only chickens</h1>
        </div>
    </div>
    <div class="listHeader">
        <div class="pagesListHeader">
            <button>Лента</button>
            <button>Обсуждаемое</button>
            <button>Люди</button>
        </div>
        <?php if(isset($_SESSION['user'])):?>
        <div class="pagesListHeader">
            <button id="buttonLogout">Выход</button>
        </div>
        <?php else:?>
        <div class="pagesListHeader">
            <button id="buttonLogin">Вход</button>
            <button id="buttonRegistrate">Регистрация</button>
        </div>
        <?php endif; ?>
    </div>
    <?php if(isset($_SESSION['user'])):?>
            <div style="padding: 10px;">
                <div class="userHeader row" style="background-color: rgb(251, 0, 255);">
                    <div class="row">
                        <img class="imgAvatarPost" id="avatarUserPasture" src="<?=$_SESSION['user']['avatar']?>" onerror="this.src='img/avatar.png'">
                        <div class="column">
                            
                            <div id="nameUserPasture"><?=$_SESSION['user']['name']?></div>
                            <div id="idUserPasture"><?=$_SESSION['user']['id']?></div>
                        
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
</header>