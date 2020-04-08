<?php include ROOT . '/view/layouts/header.php'; ?>
<body>
<p>Вы действительно хотите удалить этот товар из корзины?</p>
<?php  echo $id; ?>
<form method="post">

    <input type="submit" name="submit" value="Удалить">

</form>




</body>

<?php include ROOT . '/view/layouts/footer.php'; ?>
