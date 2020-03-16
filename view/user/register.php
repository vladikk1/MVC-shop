<?php

include ROOT . '/view/layouts/header.php';

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
        <title>Document</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Open Sans', sans-serif;
            }
            .container{
                width: 100%;
                max-width: 1240px;
                padding: 0 20px;
                margin: 0 auto;
            }

            .form-create{
             text-align: center;
         }
            .register{
                margin-top: 70px;
                text-align: center;
                font-size: 24px;
                font-weight: 700;
            }
            .name-create{
                width: 500px;
                height: 40px;
                margin-bottom: 30px;
                margin-top: 50px;
                border: solid 2px #000;
                border-radius: 6px;
                background: #333333;
                padding: 0 15px;
                font-style: 15px;
                color: #fff;
                font-weight: 700;
                transition: .2s linear;
            }
            .name-create:hover{
                box-shadow: -1px 0px 25px -1px #333;
            }
            .email-create{
                width: 500px;
                height: 40px;
                margin-bottom: 30px;
                border: solid 2px #000;
                border-radius: 6px;
                background: #333333;
                padding: 0 15px;
                font-style: 15px;
                color: #fff;
                font-weight: 700;
                transition: .2s linear;
            }
            .email-create:hover{
                box-shadow: -1px 0px 25px -1px #333;
            }
            .phone-create{
                width: 500px;
                height: 40px;
                margin-bottom: 30px;
                border: solid 2px #000;
                border-radius: 6px;
                background: #333333;
                padding: 0 15px;
                font-style: 15px;
                color: #fff;
                font-weight: 700;
                transition: .2s linear;
            }
            .phone-create:hover{
                box-shadow: -1px 0px 25px -1px #333;
            }
            .password-create{
                width: 500px;
                height: 40px;
                margin-bottom: 40px;
                border: solid 2px #000;
                border-radius: 6px;
                background: #333333;
                padding: 0 15px;
                font-style: 15px;
                color: #fff;
                font-weight: 700;
                transition: .2s linear;
            }
            .password-create:hover{
                box-shadow: -1px 0px 25px -1px #333;
            }
            .button-create{
                width: 200px;
                height: 57px;
                margin-bottom: 100px;
                background: #ffffff;
                border: 1px solid #000;
                border-radius: 10px;
                font-size: 20px;
                cursor: pointer;
            }

        </style>
    </head>
<body>
<div class="container">
    <div class="register">Регистрация</div>
    <form class="form-create" action="#" method="post">
        <input placeholder="Name" class="name-create" type="text" name="name" required><br>
        <input placeholder="email" class="email-create" type="text" name="email" required><br>
        <input placeholder="number" class="phone-create" type="text" name="phone" required><br>
        <input placeholder="password" class="password-create" type="text" name="password" required><br>
        <input class="button-create" type="submit" name="reg" value="Регистрация">
    </form>
</div>
</body>
<?php

include ROOT . '/view/layouts/footer.php';

?>