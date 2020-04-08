<?php include ROOT . '/view/layouts/header.php'; ?>
<body>
<h1>Ваш заказ</h1>

<? if($show_products_cart):?>
<table border='1' bgcolor='#7fffd4'>

    <th>
        id
    </th>

    <th>
        name
    </th>

    <th>
        price
    </th>
    <th>
        code
    </th>
    <th>
        category_id
    </th>
    <th>
        brand
    </th>
    <th>
        description
    </th>
    <th>
        status
    </th>
    <th>
        prod_img
    </th>
    <th>
        Количество
    </th>


    <?php    foreach ($show_products_cart as $product):?>
        <tr>
            <td><?php echo $product['id'];?></td>
            <td><?php echo $product['name'];?></td>
            <td><?php echo $product['price'];?></td>
            <td><?php echo $product['code'];?></td>
            <td><?php echo $product['category_id'];?></td>
            <td><?php echo $product['brand'];?></td>
            <td><?php echo $product['description'];?></td>
            <td><?php echo $product['status'];?></td>
            <td><?php echo $product['prod_img'];?></td>
            <td><?php  var_dump($_SESSION['products'][$product['id']]);?></td>

        </tr>

    <?endforeach;?>
    <?endif;?>

</table>
<br><br>
<p>Введите данные:</p>
<form method="post">
    <input type="email" name="email" placeholder="Введите email"><br>
    <input type="text" name="name" placeholder="Введите имя"><br>
    <input type="text" name="surname" placeholder="Введите фамилия"><br>
    <input type="text" name="description" placeholder="Комментарий"><br>
    <input type="submit" name="submit" value="Отправить">

</form>





</body>

<?php include ROOT . '/view/layouts/footer.php'; ?>
