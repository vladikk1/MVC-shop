<?php

/**
 * Контроллер UserController
 */
class UserController
{
    /**
     * Action для страницы "Регистрация"
     */
    public function actionRegister()
    {
        // Переменные для формы
        $name = false;
        $sname = false;
        $fname = false;
        $tnumber = false;
        $email = false;
        $password = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['reg'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            var_dump($_POST);

        }

        // Подключаем вид
        require_once(ROOT . '/view/user/register.php');
        return true;
    }

        public function actionIndex(){

        echo "Привет из userController";

        }
        public function actionLogin(){
            require_once(ROOT . '/view/user/login.php');
    }


}

