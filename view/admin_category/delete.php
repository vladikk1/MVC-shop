<?php include ROOT . '/view/layouts/header.php'; ?>
<body>
<p>Вы действительно хотите удалить эту категорию?</p>
<?php  echo $id_category; ?>
<form  method="post">

    <input type="submit" name="submit" value="Удалить">

</form>


</body>

<?php include ROOT . '/view/layouts/footer.php'; ?>
