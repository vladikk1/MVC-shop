<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="/template/css/main.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .footer{
            width: 100%;
            height: 60px;
            background:#333;
            color: #ffffff;
            line-height: 60px;
            margin-top: 100px;
        }
        .footer_reviews-content{
            color: black;
        }
        .review{
            padding-left:30px ;
        }
    </style>

</head>
<footer class="footer">
    <div class="container">
        <div class="footer_content">
    <div class="footer_block"> <a href="" class="phone">066-65-66-961</a></div>
    <div class="footer_block"><a href="" class="email">vlad10100131@gmail.com</a></div>
    <div class="footer_block"><a href="" class="support">Поддержка</a></div>
    <div class="footer_block"><a href="user/reviews/user/reviews/<?echo $_SESSION['id'];?>" class="support">Оставить отзыв</a></div>
        </div>

        <div class="footer_reviews">
            <div class="footer_reviews-content">

                <? if ($userReviewList):?>
                    <h1>Отзывы</h1>
                    <table>

<!--                        <th>-->
<!--                            review-->
<!--                        </th>-->
<!---->
<!--                        -->
<!--                        <th>-->
<!--                            user_id-->
<!--                        </th>-->
                        <?php    foreach ($userReviewList as $review):?>
                            <tr>
                                <td><?php echo $review['review'];?></td>
                                <td class="review"><?php echo $review['user_id'];?></td>
                            </tr>

                        <?endforeach;?>

                    </table>

                <?endif;?>

            </div>


        </div>
    </div>


    <script>
        $(document).ready(function () {
            $(".item__con-buy-style").click(function () {
                var id = $(this).attr("data-id");
                $.post("/cart/addAjax/"+id, {}, function (data) {
                    $(".cart-count").html(data);
                });
            return false;
            });
        });
    </script>
</footer>
</html>


