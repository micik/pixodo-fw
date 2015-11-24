<?php
class UserController extends Controller
{
    function actionIndex()
    {
        $model = new User();
        include ROOT . 'application/views/user/index.php';
    }
}