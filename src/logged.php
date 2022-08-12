<?php

namespace douggonsouza\logged;

use douggonsouza\propertys\propertysInterface;

abstract class logged
{
    static public function in(propertysInterface $info)
    {
        // colocar dados na sessão
        $_SESSION['user']['info']     = $dtUser;
        $_SESSION['user']['licenses'] = $licenses;

        return true;
    }

    static public function out()
    {
        // desconecta e limpa o usuário da sessão
        if(isset($_SESSION['user']))
            unset($_SESSION['user']);

        return true;
    }

    static public function get()
    {
        if(isset($_SESSION['user']) && !empty($_SESSION['user']))
            return $_SESSION['user'];

        return null;
    }

    static public function alter()
    {

    }

    static public function isLogged()
    {
        if(isset($_SESSION['user']) && isset($_SESSION['user']['info']['user_id']))
            return true;

        return false;
    }
}

