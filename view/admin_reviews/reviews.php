<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<? if ($adminReviewList):?>

    <table border='1' bgcolor='#7fffd4'>

        <th>
            id
        </th>

        <th>
            review
        </th>

        <th>
            activate
        </th>
        <th>
            user_id
        </th>
        <?php    foreach ($adminReviewList as $review):?>
            <tr>
                <td><?php echo $review['id'];?></td>
                <td><?php echo $review['review'];?></td>
                <td><?php echo $review['activate'];?></td>
                <td><?php echo $review['user_id'];?></td>
                <td><a href="/admin/reviews/update/<?php echo $review['id'];?>" title="Редактирование">Изменить</a></td>
            </tr>

        <?endforeach;?>

    </table>





<?endif;?>
</body>
</html>
