<?php include ROOT . '/view/layouts/header.php'; ?>
<body>
<p>Вы действительно хотите удалить этого человека?</p>
<?php  echo $id; ?>
<form method="post">

    <input type="submit" name="submit" value="Удалить">

</form>




</body>

<?php include ROOT . '/view/layouts/footer.php'; ?>