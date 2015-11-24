<?php
class UserController extends Controller{

    function actionIndex(){
        $model = new User();
        $this->render('index',array('model'=>$model));
    }

    function actionLogin() {
        $user = new User();
        if (!empty($_POST['email'])) {
            $user->login = $_POST['email'];
            $user->password = $_POST['password'];
            if ($user->auth) {
                header('Location:/');
                exit();
            } else {
                var_dump("error login");
            }
        }
        $this->render('login',array('model'=>$user));
    }
}