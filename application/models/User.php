<?php

class User extends Model
{

    public $safe = array('id', 'login', 'password', 'email');

    function getAuth()
    {
        if ($_SESSION['auth']) {
            return true;
        }
        $_SESSION['auth'] = ($this->login == 'ivan' and $this->password == 'parol') ? true : false;
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

$user = new User();
$user->__attributes = array(
    'id' => 33,
    'login' => 'Иван',
    'sql' => 'trancate users;',
    'email' => 'sko@ya.ru'
);
echo $user->id;//33
echo $user->email;//sko@ya.ru