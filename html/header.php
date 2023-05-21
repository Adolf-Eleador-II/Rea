<header class="header">
    <div class="fonLogoHeader">
        <div class="main">
            <div>
                <img src="img/chicken.svg" class="imgLogoHeader">
            </div>
            <div>
                <h1>No gods</h1>
                <h1>No kings</h1>
                <h1>Only chickens</h1>
            </div>
        </div>
    </div>
    <div class="fonBarHeader">
        <div class="main">
            <div class="barHeader">
                <div class="buttonBarHeader"></div>
                <?php if(isset($_SESSION['user'])):?>
                <div class="buttonBarHeader">
                    <button id="buttonLogout">Выход</button>
                </div>
                <?php else:?>
                <div class="buttonBarHeader">
                    <button id="buttonLogin">Вход</button>
                    <button id="buttonRegistrate">Регистрация</button>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<!-- <div class="main"></div> -->