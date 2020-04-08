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
    <div class="form__sinng-wrapper">
        <h2 class="sing-in-title">Вход на сайт</h2>
        <form class="sing-in"   method="post">
            <input class="email-sing" type="email" name="email" placeholder="email" value="" required>
            <input class="password-sing" type="password" name="password" placeholder="password" value="" required>
            <input class="button-sing" type="submit" name="submit" value="Вход">
        </form>
    </div>
</div>

</body>

<?php

include ROOT . '/view/layouts/footer.php';

?>