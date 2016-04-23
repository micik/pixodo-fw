<?php

abstract class ModelTable extends Model
{
    public $errors = [];
    public static $table = '{table}';
    public static $primary = 'id';

    public function beforeSave()
    {
        return !count($this->errors);
    }

    public function save()
    {
        $modelName = get_called_class();
        if ($this->beforeSave()) {
            if (!$this->__get(self::$primary)) {
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

    public static function findAll()
    {
        $modelName = get_called_class();
        $items = App::gi()->db->get($modelName::$table);
        $results = [];
        foreach ($items as $item) {
            $model = new $modelName();
            $model->__attributes = $item;
            $results[] = $model;
        }

        return $results;
    }

    public static function findByPk($id)
    {
        $modelName = get_called_class();
        App::gi()->db->where($modelName::$primary, $id);
        $item = App::gi()->db->getOne($modelName::$table);
        $model = new $modelName();
        $model->__attributes = $item;

        return $model;
    }

    public function findAllByAttribute($data = []){

    }

    public static function findByAttribute($data = [])
    {
        $modelName = get_called_class();
        foreach($data as $key=>$value){
            App::gi()->db->where($key, $value);
        }
        $item = App::gi()->db->getOne($modelName::$table);
        $model = new $modelName();
        $model->__attributes = $item;

        return $model;
    }

    public static function error()
    {
        if(!empty(App::gi()->db->getLastError())){
            return App::gi()->db->getLastError();
        }else{
            return false;
        }
    }

    public function setTrace($trace)
    {
        $this->trace = $trace;
    }

    public static function getTrace()
    {
        return App::gi()->db->trace;
    }
}
