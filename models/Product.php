<?php


class Product
{
    public static function productlist(){

        $link = DB::conection();
        $result = $link->query('SELECT * FROM `product`');

        $productlist = [];
        $i=0;

        while($row= $result->fetch()){
            $productlist[$i]['id']=$row['id'];
            $productlist[$i]['name']=$row['name'];
            $productlist[$i]['code']=$row['code'];
            $productlist[$i]['category_id']=$row['category_id'];
            $productlist[$i]['brand']=$row['brand'];
            $productlist[$i]['description']=$row['description'];
            $productlist[$i]['prod_img']=$row['prod_img'];

            $i++;
        }

        return $productlist;


    }
 public static function create($options){


    $link = DB::conection();

    $sql = 'INSERT INTO `product`(name,code,price,category_id,brand,description,status,prod_img) VALUES (:name,:code,:price,:category_id,:brand,:description,:status,:prod_img)';

     $result = $link->prepare($sql);
     $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
     $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
     $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
     $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_STR);
     $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
     $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
     $result->bindParam(':status', $options['status'], PDO::PARAM_STR);
     $result->bindParam(':prod_img', $options['prod_img'], PDO::PARAM_STR);

     return $result->execute();

 }



 public static function delete($id){
        $link = DB::conection();

        $data = $link->prepare("DELETE FROM `product` WHERE `id` = :id");

        $data->bindParam(':id',$id,PDO::PARAM_INT);
        return $data->execute();

 }

 public static function update($id,$produpdate){

        $link = DB::conection();

        $data = $link->prepare("UPDATE `product`
                         SET
                          name=:name,
                          price= :price,
                          code= :code,
                          category_id=:category_id,
                          brand=:brand,
                          description=:description,
                          status=:status,
                          prod_img=:prod_img 
                          WHERE 
                          id = :id");



        $data->bindParam(':id',$id,PDO::PARAM_INT);
        $data->bindParam(':name',$produpdate['name'],PDO::PARAM_STR);
        $data->bindParam(':price',$produpdate['price'],PDO::PARAM_STR);
        $data->bindParam(':code',$produpdate['code'],PDO::PARAM_STR);
        $data->bindParam(':category_id',$produpdate['category_id'],PDO::PARAM_STR);
        $data->bindParam(':brand',$produpdate['brand'],PDO::PARAM_STR);
        $data->bindParam(':description',$produpdate['description'],PDO::PARAM_STR);
        $data->bindParam(':status',$produpdate['status'],PDO::PARAM_STR);
        $data->bindParam(':prod_img',$produpdate['prod_img'],PDO::PARAM_STR);


        $status = $data->execute();


        return $data->execute();
 }



 public static function getProductsById($productsid_str){


        $link = DB::conection();

        $data = $link->query("SELECT * FROM product WHERE id IN ($productsid_str)");
        $data->setFetchMode(PDO::FETCH_ASSOC);

        $i=0;

        $products = [];

         $prod = $_SESSION['products'];

        while($row = $data->fetch()) {

            $products[$i]['name'] = $row['name'];
            $products[$i]['id'] = $row['id'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['code'] = $row['code'];
            $products[$i]['category_id'] = $row['category_id'];
            $products[$i]['brand'] = $row['brand'];
            $products[$i]['description'] = $row['description'];
            $products[$i]['status'] = $row['status'];

        }
        return $products;



 }




}