<?php


class AdminController
{

public static function actionIndex(){

    $security = Admin::security();

    if ($security) {

    Admin::ipsecurity();


            $userlist = Admin::userlist();
        User::auth();
            require_once(ROOT . '/view/admin_users/admin.php');
            return true;

    }
}
public static function actionDelete($id){


    if (isset($_POST['submit'])){
        Admin::delete($id);
        header("Location:/admin/user");

    }
    User::auth();
    require_once (ROOT.'/view/admin_users/delete.php');
    return true;


}

public static function actionUpdate($id){
    if(isset($_POST['sub'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        Admin::update($id,$name,$phone,$email);
        header("Location:/admin/user");

    }
    User::auth();
    require_once (ROOT.'/view/admin_users/update.php');
    return true;

}





}