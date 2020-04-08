<?php


class Admin
{

    public static function adminLogin($email, $password)
    {

        $link = DB::conection();
        $role = 1;

        $query = "SELECT * FROM `user_data` WHERE `role` = :role";
        $result_admin = $link->prepare($query);

        $result_admin->bindParam(':role', $role, PDO::PARAM_STR);

        return $result_admin->execute();


    }


        public static function output()
        {

            //соединение с БД
            $link = DB::conection();
            $data = $link->prepare('SELECT * FROM `user_data`');
            $data->execute();

            $result = $data->fetchAll();
        }
        public static function userlist(){
            $link = DB::conection();
            $result = $link->query('SELECT * FROM `user_data`');


            $userlist = [];
            $i=0;
            while($row= $result->fetch()){
                $userlist[$i]['id']=$row['id'];
                $userlist[$i]['name']=$row['name'];
                $userlist[$i]['email']=$row['email'];
                $userlist[$i]['phone']=$row['phone'];

                $i++;
            }

            return $userlist;


        }

            public static function delete($id){


                $link = DB::conection();

                $data = $link->prepare('DELETE FROM `user_data` WHERE `id` = :id');

                $data->bindParam(':id',$id,PDO::PARAM_INT);

                return $data->execute();


            }



            public static function update($id,$name,$phone,$email){
                $link = DB::conection();

                $data = $link->prepare('UPDATE `user_data` SET `name`= :name ,`phone`= :phone,`email`= :email where `id` = :id');

                $data->bindParam(':id',$id,PDO::PARAM_INT);
                $data->bindParam(':name',$name,PDO::PARAM_STR);
                $data->bindParam(':phone',$phone,PDO::PARAM_INT);
                $data->bindParam(':email',$email,PDO::PARAM_STR);

                return $data->execute();

            }



            public static function ipsecurity(){
//                $ip = $_SERVER['REMOTE_ADDR'];
                $ip = 000;
                $ip_security = ['127.0.0.1','127.0.0.2',000];

                if (in_array($ip,$ip_security)){
                    echo "Доступ разрешен";
                }
            }

            public static function security(){

            $link = DB::conection();

            $data = $link->query("SELECT `role` FROM `user_data` WHERE `email` = 'v@v' AND `role` = '1'");



            if ($data->fetch()){
                return true;
            }
                return false;
            }



            public static function adminReviewsList(){
//вывод в админке всех комментов
                $link = DB::conection();

                $data = $link->query("SELECT * FROM `admin_reviews`");

                $adminReview = [];
                $i=0;
                while($row= $data->fetch()){
                    $adminReview[$i]['id']=$row['id'];
                    $adminReview[$i]['review']=$row['review'];
                    $adminReview[$i]['activate']=$row['activate'];
                    $adminReview[$i]['user_id']=$row['user_id'];
                    $i++;
                }

                return $adminReview;

            }


            public static function adminReviewsUpdate($id,$activate){

            $link = DB::conection();

            $data = $link->prepare('UPDATE `admin_reviews` SET `activate`= :activate WHERE `id` = :id');

            $data->bindParam(':activate',$activate,PDO::PARAM_STR);
            $data->bindParam(':id',$id,PDO::PARAM_INT);

            return $data->execute();



            }











}
