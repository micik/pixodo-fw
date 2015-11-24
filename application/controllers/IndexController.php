<?php

class IndexController extends Controller {

    function actionIndex(){
        /*$model = new User();*/
        if(!empty($_SESSION['user'])){
            $name = $_SESSION['user']["name"];
        }else{
            $name = "Guest";
        }
        $this->render('index',array('name'=>$name));
    }

}