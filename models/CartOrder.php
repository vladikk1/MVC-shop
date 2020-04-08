<?php


class CartOrder
{


    public static function AddOrder($email,$name,$surname,$description,$orders){

        $link = DB::conection();

        $data = $link->prepare("INSERT INTO user_orders ( email, name, surname, description,orders) VALUES (:email,:name,:surname,:description,:orders )");

        $data->bindParam(':email',$email,PDO::PARAM_STR);
        $data->bindParam(':name',$name,PDO::PARAM_STR);
        $data->bindParam(':surname',$surname,PDO::PARAM_STR);
        $data->bindParam(':description',$description,PDO::PARAM_STR);
        $data->bindParam(':orders',$orders,PDO::FETCH_ASSOC);

        return $data->execute();


    }
}