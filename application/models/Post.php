<?php

class Post extends ModelTable
{
    public static $table = 'posts';

    public $safe = ['id', 'name', 'content'];

    public function beforeSave()
    {
        return parent::beforeSave();
    }
}
