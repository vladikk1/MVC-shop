<?php


class Site
{
    public static function getlatesproduct()
    {


        $link = DB::conection();

        $result = $link->query("SELECT * FROM `product`");


        $product = [];
        $i = 0;
        while ($row = $result->fetch()) {
            $product[$i]['id'] = $row['id'];
            $product[$i]['name'] = $row['name'];
            $product[$i]['description'] = $row['description'];
            $product[$i]['price'] = $row['price'];
            $product[$i]['prod_img'] = $row['prod_img'];

            $i++;
        }

        return $product;


    }


    public static function productdisplay($id)
    {

        $link = DB::conection();

        $result = $link->prepare("SELECT `id`, `name`, `price`, `code`, `category_id`, `brand`, `description`,`prod_img` FROM `product` WHERE `id` = :id");

        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->execute();

        $product = [];
        $i = 0;
        while ($rows = $result->fetch()){
            $product[$i]['id'] = $rows['id'];
            $product[$i]['name'] = $rows['name'];
            $product[$i]['price'] = $rows['price'];
            $product[$i]['code'] = $rows['code'];
            $product[$i]['brand'] = $rows['brand'];
            $product[$i]['description'] = $rows['description'];
            $product[$i]['prod_img'] = $rows['prod_img'];


            $i++;
        }

        return $product;

    }







}


