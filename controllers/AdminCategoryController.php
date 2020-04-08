<?php


class AdminCategoryController
{


    public function actionIndex(){

        Admin::ipsecurity();
      $category =   Category::categorylist();
        require_once(ROOT . '/view/admin_category/index.php');
        return true;


    }

    public function actionCreate(){


        if (isset($_POST['submit_create'])){

            $create['name'] = $_POST['name'];
            $create['status'] = $_POST['status'];
            $create['sort_order'] = $_POST['sort_order'];

            Category::categorycreate($create);

            header("Location:/admin/category/index");

        }
        User::auth();
        require_once(ROOT . '/view/admin_category/create.php');
        return true;


    }



    public function actionDelete($id_category){

        if (isset($_POST['submit'])){

            Category::categorydelete($id_category);
            header("Location: /admin/category");

        }
        User::auth();
        require_once(ROOT . '/view/admin_category/delete.php');
        return true;


    }


    public function actionUpdate($id){

        if (isset($_POST['submit'])){

            $update['name'] = $_POST['name'];
            $update['status'] = $_POST['status'];
            $update['sort_order'] = $_POST['sort_order'];

            Category::categoryUpdate($id,$update);

            header("Location:/admin/category");



        }
        User::auth();
        require_once(ROOT . '/view/admin_category/update.php');
        return true;


    }



}