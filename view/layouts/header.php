<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/template/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <style>
        .header{
            margin-bottom: 20px;
        }
    </style>
    <title>Document</title>
</head>
<header class="header">
    <div class="container">
        <div class="header__nav">
            <div class="header__logo">
                VladShop
            </div>
            <nav class="main__nav">
                <ul class="main__ul">
                    <li class="main__li">
                        <a href="" class="main__link">Главная</a>
                    </li>
                    <li class="main__li">
                        <a href="" class="main__link">Бонистика</a>
                    </li>
                    <li class="main__li">
                        <a href="" class="main__link">Нумизматика</a>
                    </li>
                    <li class="main__li">
                        <a href="" class="main__link">Фалеристика</a>
                    </li>
                    <li class="main__li">
                        <a href="/cart/index" class="main__link">Корзина(<span class="cart-count"><? echo Cart::countItems();?></span>)</a>
                    </li>
                    <li class="main__li main__li_1">


                    </li>
                    <?php if (User::isGuest()): ?>
                        <li><a href="/user/cabinet/"><i class="main__link1"></i> Аккаунт</a></li>
                        <li><a href="/user/logout/"><i class="main__link1"></i> Выход</a></li>
                    <?php else: ?>
                        <li><a href="/user/login/"><i class="main__link1"></i> Вход</a></li>
                        <li><a href="/user/register/"><i class="main__link1"></i> Регистрация</a></li>

                    <?php endif; ?>

                </ul>
            </nav>
        </div>
    </div>
</header>

