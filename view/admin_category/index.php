<body>


<section class="add_tov">
    <?php if ($category):?>

        <table border='1' bgcolor='#7fffd4'>

            <th>
                id
            </th>

            <th>
                name
            </th>

            <th>
                status
            </th>
            <th>
                sort_order
            </th>

            <?php    foreach ($category as $product):?>
                <tr>
                    <td><?php echo $product['id'];?></td>
                    <td><?php echo $product['name'];?></td>
                    <td><?php echo $product['status'];?></td>
                    <td><?php echo $product['sort_order'];?></td>
                    <td><a href="/admin/category/delete/<?php echo $product['id'];?>" title="Удаление">Удаление</a></td>
                    <td><a href="/admin/category/update/<?php echo $product['id'];?>" title="Редактирование">Редактирование</a></td>
                </tr>

            <?endforeach;?>

        </table>
    <?endif;?>

</section>







</body>
