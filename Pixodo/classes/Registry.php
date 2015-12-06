<?php

class Registry
{
    private $data = [];

    public function __construct($data = [])
    {
        $this->data = $data;
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
