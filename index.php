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
        <?php include 'html/header.php'?>


        
        <div class="row centerAlignment">
            <section class="sectionPost">
                <?php include 'html/post.php'?>
            </section>  

            <section class="sectionCatalog">
                <?php include 'html/catalog.php'?>
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