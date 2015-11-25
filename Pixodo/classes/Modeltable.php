<?php

abstract class Modeltable extends Model
{
    public $errors = array();
    static public $table = '{table}';
    static public $primary = 'id';

    function beforeSave()
    {
        return !count($this->errors);
    }

    function save()
    {
        $modelName = get_called_class();
        if ($this->beforeSave()) {
            if (!$this->__get(self::$primary)) {
                var_dump((array) $this->_data);
                $res = App::gi()->db->insert($modelName::$table, (array) $this->_data);
                $this->__set($modelName::$primary, $res);
                return $res;
            } else {
                App::gi()->db->where($modelName::$primary, $this->__get(self::$primary));
                App::gi()->db->update($modelName::$table, (array) $this->_data);
                return App::gi()->db->count;
            }
        }
    }

    static function models()
    {
        $modelName = get_called_class();
        $items = App::gi()->db->get($modelName::$table);
        $results = array();
        foreach ($items as $item) {
            $model = new $modelName();
            $model->__attributes = $item;
            $results[] = $model;
        }
        return $results;
    }

    static function model($id)
    {
        $modelName = get_called_class();
        App::gi()->db->where($modelName::$primary, $id);
        $item = App::gi()->db->getOne($modelName::$table);
        $model = new $modelName();
        $model->__attributes = $item;
        return $model;
    }
}