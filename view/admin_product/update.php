<?php include ROOT . '/view/layouts/header.php'; ?>

    <body>
    <p>Редактирование данных</p>
    <form method="post" enctype="multipart/form-data">

        <input type="text" name="name" placeholder="Введите новое значение"><br>
        <input type="text" name="price" placeholder="Введите новое значение"><br>
        <input type="text" name="code" placeholder="Введите новое значение"><br>
        <input type="text" name="category_id" placeholder="Введите новое значение"><br>
        <input type="text" name="brand" placeholder="Введите новое значение"><br>
        <input type="text" name="description" placeholder="Введите новое значение"><br>
        <select name="status" id="">
            <option value="0">0</option>
            <option value="1">1</option>
        </select>
        <select name="category" id="">

            <? foreach ($product as $value):?>
            <option>
                <?echo $value['name'];?>
            </option>
            <? endforeach;?>

        </select>

        <input type="file" name="prod_img"><br>
        <input type="submit" name="submit" value="Изменить">

    </form>

    </body>

