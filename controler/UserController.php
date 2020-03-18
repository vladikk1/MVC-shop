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
        $phone = false;
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
            $password = md5($_POST['password']);
            $role = 0;
            $errors = false;

            if(User::checkEmail($email)){

                $errors[] = 'Такой имейл уже существует';

            }

            if ($errors  == false) {
                $result = User::register($name, $phone, $email, $password,$role);
            }
        }

        // Подключаем вид
        require_once(ROOT . '/view/user/register.php');

        return true;
    }


        public function actionLogin(){
            require_once(ROOT . '/view/user/login.php');
            return true;
    }



}

