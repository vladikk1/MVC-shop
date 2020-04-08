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
    <title>Document</title>
    <style>
        .sup{
            margin-top: 70px;

        }
    </style>
</head>
<body>




<div align="center" class="sup">
    <form action="" method="post">

        <input name="subject" type="text" placeholder="Введите тему письма"><br>
        <textarea  name="user_support"  cols="30" rows="10" placeholder="Введите текст"></textarea>
        <input type="submit" name="subsupport" value="отправить">

    </form>

</div>
</body>
</html>