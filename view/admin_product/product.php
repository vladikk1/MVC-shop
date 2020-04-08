
<form action="">

    <a href="/admin/product/create">Добавить товар</a>
<?php if ($productlist):?>


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

        <?php    foreach ($productlist as $product):?>
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
                <td><a href="/admin/product/delete/<?php echo $product['id'];?>" title="Удаление">Удаление</a></td>
                <td><a href="/admin/product/update/<?php echo $product['id'];?>" title="Редактирование">Редактирование</a></td>
            </tr>

        <?endforeach;?>

    </table>
<?endif;?>
