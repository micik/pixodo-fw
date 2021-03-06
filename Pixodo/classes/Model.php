<?php

abstract class Model
{
    protected $_data = null;
    public $safe = [];
    public $trace = false;

    public function __construct()
    {
        $this->_data = new stdClass();
        App::gi()->db->setTrace($this->trace);
    }

    public function __set($name, $value)
    {
        if ($name === '__attributes' && !empty($value)) {
            foreach ($value as $key => $val) {
                $this->__set($key, $val);
            }

            return false;
        }
        if (method_exists($this, 'set'.$name)) {
            return call_user_func([$this, 'set'.$name], $value);
        }
        if (in_array($name, $this->safe)) {
            $this->_data->$name = $value;
        }
    }

    public function __get($name)
    {
        if ($name === '__attributes') {
            return $this->_data;
        }
        if (method_exists($this, 'get'.$name)) {
            return call_user_func([$this, 'get'.$name]);
        }

        return property_exists($this->_data, $name) ? $this->_data->$name : null;
    }
}
