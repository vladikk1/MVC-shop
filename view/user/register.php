<?php
include ROOT . '/view/layouts/header.php';
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">

        <title>Document</title>

    </head>
<body>
<div class="container">
    <?php   if($result):?>
        <p>Вы зарегистрированные</p>
    <?php else: ?>
        <?php if(isset($errors) && is_array($errors)):?>
            <?php foreach ($errors as $error):?>
                <p><? echo $error ?></p>
            <?php endforeach; ?>
        <?php endif;?>
    <div class="register">Регистрация</div>
    <form class="form-create" action="#" method="post">
        <input placeholder="Name" class="name-create" type="text" name="name" required><br>
        <input placeholder="email" class="email-create" type="email" name="email" required><br>
        <input placeholder="number" class="phone-create" type="text" name="phone" required><br>
        <input placeholder="password" class="password-create" type="text" name="password" minlength="6" required><br>

        <input class="button-create" type="submit" name="reg" value="Регистрация">
    </form>
</div>
<?php endif;?>
</body>
<?php

include ROOT . '/view/layouts/footer.php';

?>