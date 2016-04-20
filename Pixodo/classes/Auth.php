<?php

class Auth extends Singleton
{
    public function setAuth($hash)
    {
        $_SESSION['auth'] = $hash;
    }

    public function getAuth()
    {
        $data = null;
        if (!empty($_SESSION['auth'])) {
            $data = $_SESSION['auth'];
        }

        return $data;
    }

    public function setUser($data)
    {
        $_SESSION['user'] = json_encode($data);
    }

    public function getUser()
    {
        $data = null;
        if (!empty($_SESSION['user'])) {
            $data = json_decode($_SESSION['user']);
        }

        return $data;
    }
}
