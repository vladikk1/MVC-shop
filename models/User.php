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


    public static function checkUSerdata($email,$password){


    $link = DB::conection();


    $data = $link->prepare("SELECT `id` `email`, `password` FROM `user_data` WHERE `email` = :email AND `password` = :password");

    $data->bindParam(':email',$email,PDO::PARAM_STR);
    $data->bindParam(':password',$password,PDO::PARAM_STR);
    $data->execute();

    $result = $data->fetch();




    if (!empty($result)){
//Было return true
        return $result;
    }
        return false;
    }



    public static function isGuest(){

    if (!empty($_SESSION['user'])) {
        return true;

    }
    return false;


  }

  public static function auth(){

    if (isset($_SESSION['user'])){
        return true;
    }
    return false;
  }

  public static function writeEmail(){

    if (isset($_POST['subsupport'])){
        $admin_email = "vladger745@gmail.com";
        $subject = $_POST['subject'];
        $text = $_POST['user_support'];
       $mail = mail($admin_email,$subject,$text);

    }


  }




  public static function MyOrderList(){

//вывод всех товаров что я купил



  }




  public static function UserReviewsAdd($user_id,$review){

    $link = DB::conection();
    $data = $link->prepare("INSERT INTO `admin_reviews`(`review`, `activate`, `user_id`) VALUES (:review,:activate,:user_id)");

    $data->bindParam(':review',$review,PDO::PARAM_STR);
    $data->bindParam(':activate',$activate,PDO::PARAM_STR);
    $data->bindParam(':user_id',$user_id,PDO::PARAM_INT);

    return $data->execute();


  }



  public static function userReviewList(){

    $link = DB::conection();

    $data = $link->query('SELECT `review` ,`user_id` FROM `admin_reviews` WHERE `activate` = 1');

      $activate = [];

      $i=0;
      while($row= $data->fetch()){
          $activate[$i]['review']=$row['review'];
          $activate[$i]['user_id']=$row['user_id'];
          $i++;
      }

      return $activate;







  }



}