<?php

class PostController extends Controller
{
    public function actionIndex()
    {
        $posts = Post::all();
        $this->render('index', ['items' => $posts]);
    }

    public function actionRead($id)
    {
        $post = Post::findByPk($id);
        $this->render('index', ['post' => $post]);
    }

    public function actionCreate()
    {
        $post = new Post();
        if (isset($_POST['form'])) {
            $post->__attributes = $_POST['form'];
            if ($post->save()) {
                header('location:/post/index');
                exit();
            }
        }
        $this->render('form', ['item' => $post]);
    }

    public function actionUpdate($id)
    {
        $id = (int) $id ? (int) $id : (int) $_POST['form']['id'];
        $post = Post::findByPk($id);
        if ($post->id) {
            if (isset($_POST['form'])) {
                $post->__attributes = $_POST['form'];
                if ($post->save()) {
                    header('location:/post/index');
                    exit();
                }
            }
            $this->render('form', ['item' => $post]);
        } else {
            throw new Except('Запись не найдена');
        }
    }
}
