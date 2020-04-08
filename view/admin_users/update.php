<?php include ROOT . '/view/layouts/header.php'; ?>

<body>
<p>Редактирование данных</p>
<form method="post">

    <input type="text" name="name" placeholder="Введите новое значение"><br>
    <input type="tel" name="phone" placeholder="Введите новое значение"><br>
    <input type="email" name="email" placeholder="Введите новое значение"><br>
    <input type="submit" name="sub" value="Изменить">

</form>

</body>

<?php include ROOT . '/view/layouts/footer.php'; ?>
