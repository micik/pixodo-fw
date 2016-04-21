<?php

class Console extends Singleton
{
    public function __call($methodName, $args = [])
    {
        if (method_exists($this, $methodName)) {
            return call_user_func_array([$this, $methodName], $args);
        } else {
            throw new Except('In console '.get_called_class().' method '.$methodName.' not found!');
        }
    }

    public function __construct()
    {

    }
}
