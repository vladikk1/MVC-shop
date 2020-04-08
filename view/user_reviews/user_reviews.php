<?php include ROOT . '/view/layouts/header.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .reviews{
        margin: 100px 600px;
    }
    </style>

</head>
<body>
<div class="reviews">
    <p>Оставьте отзыв</p><br>
<form action="" method="post">
    <textarea name="review" id="" cols="30" rows="10" placeholder="Введите свой отзыв"></textarea><br>
    <input type="submit" name="submit" value="Отправить">
</form>
</div>



</body>
</html>
<?php include ROOT . '/view/layouts/footer.php'; ?>

