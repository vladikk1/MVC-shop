<?php include ROOT . '/view/layouts/header.php'; ?>

<section class="add_tov">
    <p>Добавление товара</p>
    <form action=" " method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Название товара"><br>
        <input type="text" name="price" placeholder="Цена"><br>
        <input type="text" name="code" placeholder="Код"><br>
        <input type="text" name="brand" placeholder="Бренд"><br>
        <input type="text" name="category_id" placeholder="Категория ИД"><br>
        <input type="text" name="description" placeholder="Описание"><br>
        <input type="file" name="prod_img" placeholder="Добавить фото"><br>
        <p>Статус</p>
        <select  name="status" id="">
            <option value="">0</option>
            <option value="">1</option>
        </select><br>

        <select name="choice">
                <? foreach ($product as $value):?>

            <option><?php echo $value['name']; ?></option>
            <?endforeach;?>
        </select><br>

        <input type="submit" name="submit" value="Добавить">
    </form>

</section>

<?php include ROOT . '/view/layouts/footer.php'; ?>