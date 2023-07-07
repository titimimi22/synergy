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

            <form action="../vendor/signup.php" method="post">
                <label>e-mail</label>
                <input type ="email" name="email" placeholder="введите вашу почту">
                <label>password</label>
                <input type ="password" name="password" placeholder="введите свой пароль">
                <label>password confirm</label>
                <input type ="password" name="password_cnf" placeholder="подтвердите свой пароль">
                <label>full name</label>
                <input type ="text" name="full_name" placeholder="введите ваше ФИО">
                <label>passport details</label>
                <input type ="password" name="pasport_details" placeholder="введите ваши паспортные данные">
                <button type="submit">зарегестрироваться</button>
                
                <p>
                уже зарегестрированны? - <a href="index.php">авторизироваться</a>
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