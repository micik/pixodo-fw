<?php

class UserController extends Controller
{
    public function actionIndex()
    {
        $model = new User();
        $this->render('index', ['model' => $model]);
    }

    public function actionLogin()
    {
        $user = new User();
        if (!empty($_POST['email'])) {
            $user->login = $_POST['email'];
            $user->password = $_POST['password'];
            if ($user->auth) {
                header('Location:/');
                exit();
            } else {
                var_dump('error login');
            }
        }
        $this->render('login', ['model' => $user]);
    }
}
