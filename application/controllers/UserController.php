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
        if (!empty(Request::gI()->post())) {
            $post = Request::gI()->post();
            $user->login = $post['email'];
            $user->password = $post['password'];
            if ($user->auth) {
                header('Location:/');
                exit();
            } else {
                echo 'error login';
            }
        }
        $this->render('login', ['model' => $user]);
    }
}
