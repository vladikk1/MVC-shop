<?php


class User
{

public static function register($name,$phone,$email,$password){

    $link = DB::conection();

    $query = 'INSERT INTO `user_data`(`name`, `phone`, `email`, `password`) VALUES (:name,:phone,:email,:password)';


    $result = $link->prepare($query);//подготовка запроса в бд
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':phone', $phone, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);

    return $result->execute();//выполнение запроса


}





}