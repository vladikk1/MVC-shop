<?php


class AdminReviewsController
{

    public function actionIndex(){

        Admin::ipsecurity();
        Admin::security();

        //показ всех комментов в админке
       $adminReviewList =  Admin::adminReviewsList();

        require_once(ROOT . '/view/admin_reviews/reviews.php');
        return true;


    }

    public function actionUpdate($id){
     //Редактирование Activate(показ или нет коммента)
        Admin::security();
        Admin::ipsecurity();

        if (isset($_POST['submit'])) {
            $activate = $_POST['activate'];

            $adminReviewUpdate = Admin::adminReviewsUpdate($id, $activate);

            header("Location:/admin/reviews");
        }

        require_once(ROOT . '/view/admin_reviews/update.php');
        return true;

    }



}