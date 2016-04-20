<?php

class User extends Model
{
    public $safe = ['id', 'login', 'password', 'email'];

    public function getAuth()
    {
        if (Auth::gi()->getAuth()) {
            return true;
        }
        $loginOk = ($this->login == 'admin@admin.com' && $this->password == 'admin') ? true : false;

        if ($loginOk == true) {
            Auth::gi()->setAuth($loginOk);
            Auth::gi()->setUser([
                'name'     => 'LolaLola',
                'login'    => $this->login,
                'password' => $this->password,
            ]);
        }

        return $loginOk;
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
