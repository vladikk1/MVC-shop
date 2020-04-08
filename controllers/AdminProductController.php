<?php


class AdminProductController
{


    public function actionIndex(){

        $ip = Admin::ipsecurity();
        if ($ip){

        $productlist = Product::productlist();

            User::auth();
        require_once(ROOT . '/view/admin_product/product.php');
        return true;
        }
        else{
            header("Location:/");
        }

    }
    public function actionCreate(){

        $category = Category::categorylist();


        if(isset($_POST['submit'])){

            if(empty($_POST['status'])){
                $_POST['status'] = 1;
            }

            $product['name'] = $_POST['name'];
            $product['code'] = $_POST['code'];
            $product['price'] = $_POST['price'];
            $product['category_id'] = $_POST['category_id'];
            $product['brand'] = $_POST['brand'];
            $product['description'] = $_POST['description'];
            $product['status'] = $_POST['status'];
            $product['prod_img'] = $_FILES['prod_img']['name'];


            $tmp_name = $_FILES['prod_img']['tmp_name'];//имя на сервере
            move_uploaded_file($tmp_name,"img/image/" . $_FILES["prod_img"]["name"]);//Закидывает фотку в папку

            $errors = false;

            Product::create($product);


            header("Location:/admin/product");


        }

        User::auth();
        require_once(ROOT . '/view/admin_product/create.php');
        return true;
    }


    public function actionDelete($id){

        if (isset($_POST['submit'])){

            Product::delete($id);
            header("Location:/admin/product");

        }
        User::auth();
        require_once (ROOT.'/view/admin_product/delete.php');
        return true;
    }


    public function actionUpdate($id){

        $category = Category::categorylist();


        if(isset($_POST['submit'])){

            if(empty($_POST['status'])){
                $_POST['status'] = 1;
            }
            if(empty($_POST['category_id']) && $_POST['category_id']== null ){
                $_POST['category_id'] = 1;
            }


            $produpdate['name'] =$_POST['name'];
            $produpdate['price'] =$_POST['price'];
            $produpdate['code'] =$_POST['code'];
            $produpdate['category_id'] =$_POST['category_id'];
            $produpdate['brand'] =$_POST['brand'];
            $produpdate['status'] =$_POST['status'];
            $produpdate['description'] =$_POST['description'];
            $produpdate['prod_img'] = $_FILES['prod_img']['name'];



            Product::update($id,$produpdate);

            $this->Photo();

            header("Location:/admin/product");


        }
        User::auth();
        require_once (ROOT.'/view/admin_product/update.php');
        return true;

    }

    public function Photo(){

        $tmp_name = $_FILES['prod_img']['tmp_name'];//имя на сервере
        move_uploaded_file($tmp_name,"img/image/" . $_FILES["prod_img"]["name"]);//Закидывает фотку в папку

    }

}