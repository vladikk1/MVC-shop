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
            .sing-in-title{
                text-align: center;
                font-size: 30px;
                font-weight: 700;
                margin-top: 30px;
                margin-bottom: 50px;

            }
            .sing-in{
                text-align: center;
            }
            .email-sing{
                display: block;
                margin: 0 auto;
                width: 500px;
                height: 50px;
                margin-bottom: 50px;
                border: solid 2px #000;
                border-radius: 6px;
                background: #333333;
                padding: 0 15px;
                font-style: 16px;
                color: #fff;
                font-weight: 700;
                transition: .2s linear;
            }
            .password-sing{
                display: block;
                margin: 0 auto;
                width: 500px;
                height: 50px;
                margin-bottom: 50px;
                border: solid 2px #000;
                border-radius: 6px;
                background: #333333;
                padding: 0 15px;
                font-style: 16px;
                color: #fff;
                font-weight: 700;
                transition: .2s linear;
            }

            .password-sing:hover{
                box-shadow: -1px 0px 25px -1px #333;
            }
            .email-sing:hover{
                box-shadow: -1px 0px 25px -1px #333;
            }
            .button-sing{
                width: 300px;
                height: 80px;
                font-size: 25px;
                font-weight: 700;
                background: #ffffff;
                cursor: pointer;
                border-radius: 10px;
                border: 2px solid #000;
                margin-bottom: 70px;
                transition: .2s linear;
            }
            .button-sing:hover{
                background: #333;
                color: #fff;
            }
            .form__sinng-wrapper{
                border: 3px solid #333;
                border-radius: 10px;
                margin-top: 60px;
                margin-bottom: 63px;
            }


        </style>
    </head>


<body>
<div class="container">
    <div class="form__sinng-wrapper">
        <h2 class="sing-in-title">Вход на сайт</h2>
        <form class="sing-in" action="#">
            <input class="email-sing" type="email" name="email" placeholder="email" value="" required>
            <input class="password-sing" type="password" name="password" placeholder="password" value="" required>
            <input class="button-sing" type="submit" name="submit" value="Вход">
        </form>
    </div>
</div>

</body>

<?php

include ROOT . '/view/layouts/footer.php';

?>