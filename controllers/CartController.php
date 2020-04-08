<?php


class CartController
{

    public function actionIndex()
    {

        $products_cart = Cart::getProduct();



        if ($products_cart) {

            $productsid = array_keys($products_cart);
            $productsid_str = implode(',', $productsid);

//            $show_products = Cart::showProductCart();

            $show_products = Product::getProductsById($productsid_str);
            echo "<pre>";
            var_dump($show_products);



//            $number = $_SESSION['products'][$product['id']];
        }
        require_once(ROOT . '/view/cart/cart.php');
        return true;


    }

    public function actionAddAjax($id)
    {

        echo Cart::AddProduct($id);
        return true;
    }

    public function actionDelete($id){

        Cart::deleteProductCart($id);

//       header("Location:/cart");
    }

    public function actionCheckout(){

        $show_products_cart = Cart::showProductCart();

        if (isset($_POST['submit'])) {

          $products = $_SESSION['products'];
          $orders_encode = json_encode($products);

          $email = $_POST['email'];
          $name = $_POST['name'];
          $surname = $_POST['surname'];
          $description = $_POST['description'];

           $checkout =  CartOrder::AddOrder($email,$name,$surname,$description,$orders_encode);

           if ($checkout){
                Cart::clear();
               require_once(ROOT . '/view/cart/verification.php');
               return true;

           }

        }
        require_once(ROOT . '/view/cart/user_order.php');
        return true;

    }


}