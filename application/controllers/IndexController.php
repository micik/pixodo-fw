<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        /*$model = new User();*/

        var_dump(Request::gI()->get());

        if (!empty($_SESSION['user'])) {
            $name = $_SESSION['user']['name'];
        } else {
            $name = 'Guest';
        }
        $this->render('index', ['name' => $name]);
    }
}
