<?php


class User
{

public static function register($name,$phone,$email,$password,$role){

    $link = DB::conection();

    $query = 'INSERT INTO `user_data`(`name`, `phone`, `email`, `password`,`role`) VALUES (:name,:phone,:email,:password,:role)';



    $result = $link->prepare($query);//подготовка запроса в бд
    $result->bindParam(':name', $name, PDO::PARAM_STR);
    $result->bindParam(':phone', $phone, PDO::PARAM_STR);
    $result->bindParam(':email', $email, PDO::PARAM_STR);
    $result->bindParam(':password', $password, PDO::PARAM_STR);
    $result->bindParam(':role', $role, PDO::PARAM_STR);

    return $result->execute();//выполнение запроса



}

    public static function checkEmail($email){


        $link = DB::conection();

        $query_email = 'SELECT COUNT(*) FROM user_data WHERE email = :email';
        $result = $link->prepare($query_email);
        $result->bindParam(':email',$email,PDO::PARAM_STR);

        $result->execute();
        if($result->fetchColumn()){
            return true;
        }
        return false;
    }



}