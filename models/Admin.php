<?php


class Admin
{

    protected static function adminLogin($email,$password){

        $link = DB::conection();
        $role = 1;

        $query= "SELECT * FROM `user_data` WHERE `role` = :role";
        $result_admin = $link->prepare($query);

        $result_admin->bindParam(':role', $role, PDO::PARAM_STR);

        return $result_admin->execute();


    }

    protected static function actionAdmin(){

        if (isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = $_POST['password'];
            if($email == 'vladadmin@gmail'){
                header("location:admin.php");
            }

        }




    }



}