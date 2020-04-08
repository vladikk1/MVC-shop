<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/template/css/main.css" rel="stylesheet">
    <title>Document</title>
    <style>

        /* goods */
        .goods{
            margin-bottom: 40px;
        }
        .goods__bloks{
            display: grid;
            grid-template-columns: repeat(4 , 1fr);
            grid-template-rows: repeat(3 , 1fr);
            grid-column-gap: 20px;
            grid-row-gap: 20px;
        }
        .goods__block:hover{
            transform: scale(1.06);
        }
        .goods__block{
            padding: 10px;
            background: #333;
            border-radius: 10px;
            transition: .2s linear;
        }
        .goods__img{
            border: 3px solid #fff;
            border-radius: 5px;
            display: block;
            width: 260px;
            height: 140px;
            overflow:hidden;
        }
        .goods__img_styles{
            width: 100%;
            max-width: 260px;
            height: auto;
        }
        .goods__name{
            display: block;
            width: 260px;
            min-width: 20px;
            font-size: 13px;
            margin-top: 10px;
            text-decoration: none;
            color: #fff;
            font-weight: 700;
            transition: .1s linear;
        }
        .goods__prise{
            font-size: 18px;
            margin-top: 10px;
            color: #fff;
        }
        .goods__buy{
            display: block;
            width: 100%;
            font-size: 16px;
            text-transform: uppercase;
            text-decoration: none;
            text-align: right;
            padding-right: 10px;
            color: #fff;
            font-weight: 700;
            transition: .1s linear;
        }
        .goods__buy:hover{
            color: rgb(206, 167, 61);
        }
        .goods__name:hover{
            color: rgb(206, 167, 61);
        }


    </style>
</head>
<body>
<section class="goods">
    <div class="container">
        <div class="goods__bloks">
            <?foreach ($products as $value):?>
            <div class="goods__block">
                <a href="#" class="goods__img">
                    <img src="/img/image/<?echo $value['prod_img'];?>" alt="" class="goods__img_styles">
                </a>
                <a href="#" class="goods__name">
                    <?echo $value['name'];?>
                </a>
                <p class="goods__prise">
                    <?echo $value['price'];?>
                </p>
                <a href="/user/product/item/<? echo $value['id'];?>" methods="get" class="goods__buy">
                    Купить сейчас
                </a>

            </div>
            <?endforeach;?>

        </div>
    </div>
</section>





</body>
