<?php include ROOT . '/view/layouts/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
    <script src="/template/js/jquery-3.4.1.js"></script>
    <script src="/template/js/main.js"></script>
    <style>.item__content-title{
            display: flex;
            height: 55px;
            padding:7px 3%;
            justify-content: space-between;
        }
        .item__title-main{
            font-size: 20px;
        }
        .item__pas{
            font-size: 14px;
            align-self: flex-end;
            color: #333;
        }
        .item-header{
            display: flex;
            height: 50px;
            padding: 0 3%;
            background: rgb(216, 214, 214);
            align-items: center;
        }
        .item-header-item{
            font-size: 18px;
            margin-right: 40px;
            cursor: pointer;
            position: relative;
        }

        .item__con{
            display: flex;
            padding: 0 3%;
            justify-content: space-between;
            margin-top: 20px;
        }
        .item__main-img{
            display: flex;
            align-items: center;
            width: 43%;
            box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.75);
            height: 400px;
            border-radius: 10px;
            padding: 10px;
            overflow: hidden;
        }
        .item__con-char{
            width: 55%;
        }
        .item__main-img-style{
            width: 80%;
            height: 380px;
            margin: 0 auto
        }
        .item__con-in{
            font-size: 18px;
            margin-bottom: 10px;
            color:  #00a046;
        }
        .item__con-des{
            display: flex;
            width: 60%;
            height: 60px;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            box-shadow: 0px 0px 1px 1px rgba(154, 152, 152, 0.75);
        }
        .span__prise{
            font-size: 22px;
            margin-right: 5px;
        }
        .item__con-prise{
            margin-right: 30px;
        }
        .item__con-buy{
            height: 40px;
            width: 130px;
            background: #00a046;
            font-size: 22px;
            color: #fff;
            text-align: center;
            line-height: 40px;
            border-radius: 5px;
            transition: .2s linear;
            cursor: pointer;
        }
        .item__con-buy:hover{
            opacity: .9;
        }
        .item__con_pay{
            margin-top: 18px;
            font-size:20px;
            width: 60%;
            padding: 10px;
            box-shadow: 0px 0px 1px 1px rgba(154, 152, 152, 0.75);
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .item__con_pay-var{
            width: 60%;
            padding: 10px;
            box-shadow: 0px 0px 1px 1px rgba(154, 152, 152, 0.75);
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            line-height: 1.5;
            font-size: 16px;
        }
        .item__about-title{
            margin-top: 20px;
            font-size:20px;
            width: 60%;
            padding: 10px;
            box-shadow: 0px 0px 1px 1px rgba(154, 152, 152, 0.75);
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .item__about-content{
            width: 60%;
            padding: 10px;
            box-shadow: 0px 0px 1px 1px rgba(154, 152, 152, 0.75);
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            line-height: 1.5;
            font-size: 16px;
        }
        .item__con-buy-style{
            text-decoration: none;
            color: black;
        }

    </style>
</head>
<body>
<? foreach ($product as $val):?>
<div class="item__content-title">
    <p class="item__title-main">
        <?echo $val['name'];?>
    </p>
    <p class="item__pas">
        <?echo $val['code'];?>
    </p>
</div>
<div class="item__content-main">
    <div class="item-header">
        <div class="item-header-item">Все о товаре</div>
    </div>
    <div class="item__con">
        <div class="item__main-img">
            <img src="/img/image/<?echo $val['prod_img'];?>" alt="" class="item__main-img-style">
        </div>
        <div class="item__con-char">
            <p class="item__con-in">
                Есть в наличии
            </p>
            <div class="item__con-des">
                <p class="item__con-prise">
                    <span class="span__prise"><?echo $val['price'];?> </span> грн
                </p>
                <div class="item__con-buy">
                    <a href="#" data-id ="<?echo $val['id'];?>" class="item__con-buy-style">Купить</a>
                </div>
            </div>
            <div class="item__about">
                <p class="item__about-title">
                    Описание
                </p>
                <div class="item__about-content">
                    <?echo $val['description']; ?>
                </div>
            </div>
            <a class="item__con_pay">
                Оплата
            </a>
            <p class="item__con_pay-var">
                PrivatPay, Google Pay, Visa/MasterCard, Безналичными, Наличная, Кредит, Оплата частями, Мгновенная рассрочка
            </p>
        </div>
    </div>
</div>
<?endforeach;?>
<script src="/template/js/jquery-3.4.1.js"></script>
<script src="/template/js/main.js"></script>

</body>
</html>


<?php include ROOT . '/view/layouts/footer.php'; ?>
