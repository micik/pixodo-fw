<?php

class IndexController extends Controller
{
    public function actionIndex()
    {
        if (!empty(Auth::gi()->getUser())) {
            $name = Auth::gi()->getUser()->name;
        } else {
            $name = 'Guest';
        }
        $this->render('index', ['name' => $name]);
    }
}
