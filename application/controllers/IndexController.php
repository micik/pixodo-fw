<?php

class IndexController extends Controller {

    function actionIndex(){
        /*$model = new User();*/

        var_dump(Request::gI()->get());

        if(!empty($_SESSION['user'])){
            $name = $_SESSION['user']["name"];
        }else{
            $name = "Guest";
        }
        $this->render('index',array('name'=>$name));
    }

}