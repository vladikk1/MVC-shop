<?php


class UserReviewsController
{


   public function actionReviewsAdd($id){

        if (isset($_POST['submit'])){

            $id = $_SESSION['id'];
            $userReview = $_POST['review'];

            $userReviewAdd = User::UserReviewsAdd($id,$userReview);

            if ($userReviewAdd){
                //сделать спасибо за коммент
                header("location:/");
            }

        }

       require_once(ROOT . '/view/user_reviews/user_reviews.php');
       return true;

    }

}