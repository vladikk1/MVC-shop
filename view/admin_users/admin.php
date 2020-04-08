<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .add_tov{
            margin-top: 50px;
        }


    </style>
</head>
<body>
<?php if ($userlist):?>

    <table border='1' bgcolor='#7fffd4'>

    <th>
    id
    </th>

    <th>
    name
    </th>

    <th>
    email
    </th>
        <th>
    phone
    </th>

    <?php    foreach ($userlist as $user):?>
       <tr>

         <td><?php echo $user['id'];?></td>
         <td><?php echo $user['name'];?></td>
         <td><?php echo $user['email'];?></td>
         <td><?php echo $user['phone'];?></td>
           <td><a href="/admin/users/delete/<?php echo $user['id'];?>" title="Удаление">Удаление</a></td>
           <td><a href="/admin/users/update/<?php echo $user['id'];?>" title="Редактирование">Редактирование</a></td>
       </tr>

<?endforeach;?>

    </table>
<?endif;?>


</body>
</html>



