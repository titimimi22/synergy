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

        <body>
            
            <form class="prof"action="../vendor/change.php" method="post">
                <label>e-mail</label>
                <input type ="email" name="email" placeholder="введите вашу новую почту">
                <label>password</label>
                <input type ="password" name="password" placeholder="введите свой новый пароль">
                <label>password confirm</label>
                <input type ="password" name="password_cnf" placeholder="подтвердите свой пароль">
                <label>full name</label>
                <input type ="text" name="full_name" placeholder="введите ваше новое ФИО">
                <label>passport details</label>
                <input type ="password" name="pasport_details" placeholder="введите ваши новые паспортные данные">
                <label>form</label>
                <input type ="text" name="anket" placeholder="напишите что нибудь о себе">
                <button type="submit">Принять</button>

               
               
                </form>
                <form action='../public/profile.php'>
                    <button class="correct">отменить</button>
                </form>
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                 unset($_SESSION['message']);
                 ?>
        </body>
    </html>