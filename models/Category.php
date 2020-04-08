<?php


class Category
{

    public static function categorylist(){

        $link = DB::conection();


        $result = $link->query("SELECT * FROM `category` WHERE `status` = '1'");


        $category = [];
        $i=0;
        while($row= $result->fetch()){
            $category[$i]['id']=$row['id'];
            $category[$i]['name']=$row['name'];
            $category[$i]['status']=$row['status'];
            $category[$i]['sort_order']=$row['sort_order'];

            $i++;
        }

        return   $category;


    }

    public static function categorycreate($create){

        $link = DB::conection();

        $data = $link->prepare("INSERT INTO `category`( `name`, `status`, `sort_order`) VALUES (:name,:status,:sort_order)");

        $data->bindParam(':name',$create['name'],PDO::PARAM_STR);
        $data->bindParam(':status',$create['status'],PDO::PARAM_STR);
        $data->bindParam(':sort_order',$create['sort_order'],PDO::PARAM_STR);

        return $data->execute();
    }


    public static function categorydelete($id_category){

        $link = DB::conection();


        $data = $link->prepare("DELETE FROM `category` WHERE `id` = :id");

        $data->bindParam(':id',$id_category,PDO::PARAM_INT);

        return $data->execute();

    }


    public static function categoryUpdate($id,$update){

        $link = DB::conection();

        $data = $link->prepare("UPDATE `category` SET `name`=:name ,`status`= :status,`sort_order`= :sort_order WHERE `id` = :id");

        $data->bindParam(':id',$id,PDO::PARAM_INT);
        $data->bindParam(':name',$update['name'],PDO::PARAM_STR);
        $data->bindParam(':status',$update['status'],PDO::PARAM_STR);
        $data->bindParam(':sort_order',$update['sort_order'],PDO::PARAM_STR);


        return $data->execute();
    }







}