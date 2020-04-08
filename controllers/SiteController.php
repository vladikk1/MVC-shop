<?php


class SiteController
{

    public function actionIndex(){


        $products = Site::getlatesproduct();

        $userReviewList = User::userReviewList();


        User::auth();
        require_once(ROOT . '/view/site/index.php');
    }


    public function actionProduct($id){

        $product = Site::productdisplay($id);
        User::auth();
        require_once(ROOT . '/view/user_product/item.php');
        return true;

    }








}