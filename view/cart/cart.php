<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .order{
            text-decoration: none;
            font-size: 18px;
            font-weight: 700;
            border: lightblue solid;
        }
    </style>
</head>
<body>

<? if($show_products):?>
    <table border='1' bgcolor='#7fffd4'>



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
            Количество
        </th>


        <?php    foreach ($show_products as $product):?>
            <tr>
                <td><?php echo $product['name'];?></td>
                <td><?php echo $product['price'];?></td>
                <td><?php echo $product['code'];?></td>
                <td><?php echo $product['category_id'];?></td>
                <td><?php echo $product['brand'];?></td>
                <td><?php echo $product['description'];?></td>
                <td><?php echo $product['status'];?></td>
                <td><?php echo $product['id'];?></td>
<!--                <td>--><?php // echo $_SESSION['products'][$product['id']];?><!--</td>-->
                <td><a href="/cart/delete/<?php echo $product['id'];?>" title="Удаление">Удаление</a></td>
            </tr>

        <?endforeach;?>

    </table>

        <p>Оформить заказ?</p>
    <a class="order" href="/cart/user/order">Оформить заказ</a>

<?endif;?>
</body>
</html>
