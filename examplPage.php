<?php session_start();?>
<!DOCTYPE HTML>
<html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rea</title>

        <link rel="icon" href="img/chicken.svg">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/post.css">
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/catalog.css">
    </head>

    <body style="background-color: antiquewhite;">
        
        
        

        <header class="header">
            <div class="logoHeader">
                <div>
                    <img src="img/chicken.svg" class="imgLogoHeader">
                </div>
                <div class="column">
                    <h1>No gods</h1>
                    <h1>No kings</h1>
                    <h1>Only chickens</h1>

                    <!-- <h1>And You: </h1> -->
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
        </header>



        <div class="row centerAlignment">
            <section class="sectionPost">
                <div class="headerMain"><h1>Tag name</h1><hr><br></div>
                <div class="posts">
                    <div class="post">
                        <div class="containerPost">
                            <div class="headerPost">
                                <img src="img/Duck.gif" class="imgAvatarPost">
                                <p class="textPost">Cow Master</p>
                            </div>
                            <div class="contentPost">
                                <div class="imgPost"><img src="img/Duck.gif"></div>
                            </div>
                            <div class="footherPost">
                                <button>Коментарии</button>
                                <div>Дата публикации</div>
                                <div>Ссылка</div>
                                <div>Рейтинг</div>
                            </div>
                        </div>
                        <div class="commentsPost"></div>
                    </div>
                    <div class="post">
                        <div class="containerPost">
                            <div class="headerPost">
                                <img src="img/GunInEyes.png" class="imgAvatarPost">
                                <p class="textPost">Cow Master</p>
                            </div>
                            <div class="contentPost">
                                <div class="imgPost"><img src="img/Togetha.png"></div>
                                <div class="textPost"><h1>Rykard, Lord of Blasphemy</h1><p>Now, we can devour the gods, together!</p><p>Together, we will devour the very gods!</p></div>
                                <div class="imgPost"><img src="img/GunInEyes.png"></div>
                                <div class="imgPost"><img src="img/50.png"></div>
                            </div>
                            <div class="footherPost">
                                <button>Коментарии</button>
                                <div>Дата публикации</div>
                                <div>Ссылка</div>
                                <div>Рейтинг</div>
                            </div>
                        </div>
                        <div class="commentsPost">
                            <!-- 0 -->
                                <div class="commentPost">
                                    <div class="containerCommentPost">
                                        <div class="headerCommentPost">
                                            <img src="img/GunInEyes.png" class="imgAvatarCommentPost">
                                            <p class="textCommentPost">Cow Master I</p>
                                        </div>
                                        <div class="contentCommentPost">
                                            <div class="textCommentPost"><p>Now, we can devour the gods, together!</p></div>
                                            <div class="imgCommentPost"><img src="img/Togetha.png"></div>
                                        </div>
                                    </div>

                                    <div class="commentsPost"></div>
                                </div>
                            <!--  -->
                            <!-- 2 -->
                                <div class="commentPost">
                                    <div class="containerCommentPost">
                                        <div class="headerCommentPost">
                                            <img src="img/GunInEyes.png" class="imgAvatarCommentPost">
                                            <p class="textCommentPost">Cow Master I</p>
                                        </div>
                                        <div class="contentCommentPost">
                                            <div class="textCommentPost"><p>Now, we can devour the gods, together!</p></div>
                                            <div class="imgCommentPost"><img src="img/Togetha.png"></div>
                                        </div>
                                    </div>

                                    <div class="commentsPost">
                                    <!-- 3 -->
                                        <div class="commentPost">
                                            <div class="containerCommentPost">
                                                <div class="headerCommentPost">
                                                    <img src="img/GunInEyes.png" class="imgAvatarCommentPost">
                                                    <p class="textCommentPost">Cow Master II</p>
                                                </div>
                                                <div class="contentCommentPost">
                                                    <div class="textCommentPost"><p>Together, we will devour the very gods!</p></div>
                                                    <div class="imgCommentPost"><img src="img/50.png"></div>
                                                </div>
                                            </div>
                                            <div class="commentsPost">
                                                <!-- 4 -->
                                                <div class="commentPost">
                                                    <div class="containerCommentPost">
                                                        <div class="headerCommentPost">
                                                            <img src="img/GunInEyes.png" class="imgAvatarCommentPost">
                                                            <p class="textCommentPost">Cow Master II</p>
                                                        </div>
                                                        <div class="contentCommentPost">
                                                            <div class="textCommentPost"><p>Together, we will devour the very gods!</p></div>
                                                            <div class="imgCommentPost"><img src="img/50.png"></div>
                                                        </div>
                                                    </div>
                                                    <div class="commentsPost"></div>
                                                </div>
                                                <!--  -->
                                                <!-- 5 -->
                                                    <div class="commentPost">
                                                        <div class="containerCommentPost">
                                                            <div class="headerCommentPost">
                                                                <img src="img/GunInEyes.png" class="imgAvatarCommentPost">
                                                                <p class="textCommentPost">Cow Master II</p>
                                                            </div>
                                                            <div class="contentCommentPost">
                                                                <div class="textCommentPost"><p>Gun In My Eyes!</p></div>
                                                                <div class="imgCommentPost"><img src="img/GunInEyes.png"></div>
                                                            </div>
                                                        </div>
                                                        <div class="commentsPost"></div>
                                                    </div>
                                                <!--  -->
                                            </div>
                                        </div>
                                    <!--  -->
                                    </div>
                                </div>
                            <!--  -->
                        
                        </div>
                    </div>
                    <div class="post">
                        <div class="containerPost">
                            <div class="headerPost">
                                <img src="img/GunInEyes.png" class="imgAvatarPost">
                                <p class="textPost">Cow Master</p>
                            </div>
                            <div class="contentPost">
                                <div class="imgPost"><img src="img/Togetha.png"></div>
                                <div class="textPost"><h1>Rykard, Lord of Blasphemy</h1><p>Now, we can devour the gods, together!</p><p>Together, we will devour the very gods!</p></div>
                                <div class="imgPost"><img src="img/GunInEyes.png"></div>
                                <div class="imgPost"><img src="img/50.png"></div>
                            </div>
                            <div class="footherPost">
                                <button>Коментарии</button>
                                <div>Дата публикации</div>
                                <div>Ссылка</div>
                                <div>Рейтинг</div>
                            </div>
                        </div>
                        <div class="commentsPost"></div>
                    </div>
                </div>        
            </section>


            
                
                <section class="sectionCatalog column" style="gap:15px;">
                    <?php if(isset($_SESSION['user'])):?>
                    <div class="catalog">
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
                    <div class="catalogs">
                        <div class="catalog">
                            <div class="headerCatalog"><h1>Animal</h1><hr><br></div>
                            <div class="tagsCatalog">
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/50.png"></div>
                                    <div class="nameTagCatalog">Dog</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/200.png"></div>
                                    <div class="nameTagCatalog">Fish</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/Duck.gif"></div>
                                    <div class="nameTagCatalog">Cat</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/Duck.gif"></div>
                                    <div class="nameTagCatalog">Duck</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/Duck.gif"></div>
                                    <div class="nameTagCatalog">Pinguin</div>
                                </div>
                                <div class="footherCatalog">
                                    Показать все
                                </div>
                            </div>
                        </div>
                        <div class="catalog">
                            <div class="headerCatalog"><h1>Animal</h1><hr><br></div>
                            <div class="tagsCatalog">
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/50.png"></div>
                                    <div class="nameTagCatalog">Dog</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/200.png"></div>
                                    <div class="nameTagCatalog">Fish</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/Duck.gif"></div>
                                    <div class="nameTagCatalog">Cat</div>
                                </div>
                                <div class="footherCatalog">
                                    Показать все
                                </div>
                            </div>
                        </div>
                        <div class="catalog">
                            <div class="headerCatalog"><h1>Animal</h1><hr><br></div>
                            <div class="tagsCatalog">
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/50.png"></div>
                                    <div class="nameTagCatalog">Dog</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/200.png"></div>
                                    <div class="nameTagCatalog">Fish</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/Duck.gif"></div>
                                    <div class="nameTagCatalog">Cat</div>
                                </div>
                                <div class="footherCatalog">
                                    Показать все
                                </div>
                            </div>
                        </div>
                        <div class="catalog">
                            <div class="headerCatalog"><h1>Animal</h1><hr><br></div>
                            <div class="tagsCatalog">
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/50.png"></div>
                                    <div class="nameTagCatalog">Dog</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/200.png"></div>
                                    <div class="nameTagCatalog">Fish</div>
                                </div>
                                <div class="tagCatalog">
                                    <div class="imgTagCatalog"><img src="img/Duck.gif"></div>
                                    <div class="nameTagCatalog">Cat</div>
                                </div>
                                <div class="footherCatalog">
                                    Показать все
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>





        <?php if(isset($_SESSION['user'])):?>
            <?php include 'html/logout.html'?>
        <?php else:?>
            <?php include 'html/login.html'?>
            <?php include 'html/reg.html'?>
        <?php endif;?>
        <script src="js/unwrap.js"   type="text/javascript"></script>
        <script src="js/form.js"   type="text/javascript"></script>
    </body>

</html>