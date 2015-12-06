<?php

class Config extends Singleton
{
    private $data = [];

    public function associate($group, &$array)
    {
        $this->data[$group] = $array;
    }

    public function __get($name)
    {
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}
