<?php


class Cart
{

    public static function AddProduct($id){



        $id = intval($id);


        $productsInCart = array();


        if(isset($_SESSION['products'])){

            $productsInCart = $_SESSION['products'];

        }

        if(array_key_exists($id,$productsInCart)){
            $productsInCart[$id]++;
        }
        else{

            $productsInCart[$id] = 1;

        }
        $_SESSION['products'] = $productsInCart;

        return self::countItems();



    }
    public static function countItems(){

        if(isset($_SESSION['products'])){
            $count = 0;
            foreach ($_SESSION['products'] as $key=>$value){

                $count+=$value;

            }
            return $count;

        }else {
            return 0;
        }


    }

    public static function getProduct(){

        if(isset($_SESSION['products'])){

           return $_SESSION['products'];
        }

        return false;
    }

    public static function totalPrice($massiv){





    }


    public static function clear(){
    if (isset($_SESSION['products'])){
        unset($_SESSION['products']);
    }


    }





        public static function deleteProductCart($id)
        {
            $deleteCart = Cart::getProduct();

            unset($deleteCart[$id]);

            $_SESSION['products'] = $deleteCart;
        }



        }

















