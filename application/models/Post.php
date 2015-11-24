<?php

class Post extends ModelTable
{
    static public $table = 'posts';

    public $safe = array('id', 'name', 'content');

    public function beforeSave()
    {
        return parent::beforeSave();
    }
}