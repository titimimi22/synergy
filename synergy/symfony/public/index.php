<?php
    session_start();
    if(isset($_SESSION['user'])){
        header('location: ../public/profile.php');
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

            <form action="../vendor/signin.php" method="post">
                <label>E-mail</label>
                <input type ="email" name='email' placeholder="введите вашу почту">
                <label>Password</label>
                <input type ="password" name="password" placeholder="введите свой пароль">
                <button type="submit">Войти</button>
                <p>
                вы еще не зарегестрированны? - <a href="register.php">зарегестрироваться</a>
                </p>

                <?php
                if (isset($_SESSION['message'])) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                 unset($_SESSION['message']);
                 ?>
               
                </form>
        </body>
    </html>