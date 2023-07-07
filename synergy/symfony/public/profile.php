<?php
    session_start();
    if(!$_SESSION['user']){
        header('location: ../public/index.php');
    }
    
?>

<DOCTPE html>
    <html>

        <head>
            <title>Главная</title>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="style.css">
        </head>
        <?php
            print("№");
            print($_SESSION['user']['id'])
            ?>
        <body>

            <form class="prof" action='../vendor/logout.php'>
                <label>full name:</label>
                <h1><?= $_SESSION['user']['full name'] ?></h1>
                <label>pasport details:</label>
                <h1><?= $_SESSION['user']['pasport details'] ?></h1>
                <label>email:</label>
                <a class="mail" href ='#'><?= $_SESSION['user']['email'] ?></a>
                <label>form:</label>
                <p><?= $_SESSION['user']['anket'] ?></p>
                <button class="logout">Выход</a>
                
            </form>
            <form action='../public/redact.php'>
                    <button class="correct">Изменить данные</a>
                </form>
        </body>
    </html>