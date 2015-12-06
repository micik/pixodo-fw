<?php

class PageController extends Controller
{
    public function actionRead($id = 'index')
    {
        $this->render('read', ['id' => $id]);
    }
}
