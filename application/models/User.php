<?php

class User extends Model
{

    public $safe = array('id', 'login', 'password', 'email');

    function getAuth()
    {
        if (isset($_SESSION['auth'])) {
            return true;
        }
        $_SESSION['auth'] = ($this->email == 'admin@admin.com' && $this->password == 'admin') ? true : false;

        if($_SESSION['auth'] == true){
            $_SESSION['user'] = array(
                "name" => "Pupkin",
                "email" => $this->email,
                "password" => $this->password
            );
        }
        return $_SESSION['auth'];
    }

    /*function getFullName() {
        return $this->name.' '.$this->surname;
    }
    function setFullName($value) {
        list($this->name, $this->surname) = explode(' ', $value);
    }

    // валидация
    function setEmail($value) {
        if (preg_match('#.+@.+#u', $value)) {
            $this->data->email = $value;
        }
    }*/
}