<?php
class IndexController extends Controller {

    function actionIndex(){
        $model = new User();
        var_dump(App::gi());
        $this->render('index',array('model'=>$model));
    }

}