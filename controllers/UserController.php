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

            if (isset($_POST['submit'])) {


                $email = $_POST['email'];
                $password = md5($_POST['password']);

                $errors = false;

                // Валидация полей
                if (!User::checkEmail($email)) {
                    $errors[] = 'Неправильный email';
                }
//                if (!User::passwordCheck($password)) {
//                    $errors[] = 'Пароль не должен быть короче 6-ти символов';
//                }

                $status = User::checkUSerdata($email,$password);

                if($status){
                    $_SESSION['user']= true;
                    $_SESSION['id'] = $status['email'];
                    }


                if (User::auth()) {

                    header("Location:/");
                }
            }
            require_once(ROOT . '/view/user/login.php');
            return true;
    }

    public function actionLogout(){

       // if(isset($_SESSION)){
         //   session_start();

        //}
        unset($_SESSION['user']);
        unset($_SESSION['id']);
        unset($_SESSION['products']);

        header("Location:/");

    }

    public function actionCabinet(){


        require_once(ROOT . '/view/user/cabinet.php');
        return true;
    }

    public function actionCommunication(){


        User::writeEmail();

        require_once(ROOT . '/view/user/communication.php');
        return true;



    }





}

