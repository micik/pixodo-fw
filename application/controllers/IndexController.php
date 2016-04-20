<?php

class IndexController extends Controller {

    function actionIndex(){
        if(!empty(Auth::gi()->getUser())){
            $name = Auth::gi()->getUser()->name;
        }else{
            $name = "Guest";
        }
        $this->render('index',array('name'=>$name));
    }

}