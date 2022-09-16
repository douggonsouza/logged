<?php

namespace douggonsouza\logged\models;

use douggonsouza\mvc\model\model;
use douggonsouza\propertys\propertys;

class user extends model
{
    public $table = 'users';
    public $key   = 'user_id';
    public $options = "SELECT user_id as value, name as label FROM users %s;";

    /**
     * options
     *
     * @return void
     */
    public function options(array $where = null)
    {
        return parent::options($where);
    }
    
    /**
     * info - Expõe os dados a serem salvos de login na sessão
     *
     * @return object
     */
    public function info()
    {
        $var = $this->getField('user_id');
        if(!isset($var)){
            return null;
        }

        return new propertys(
            array(
                'user_id' => $this->getField('user_id'),
                'name' => $this->getField('name'),
                'email' => $this->getField('email')
            )
        );
    }

    /**
     * info - Expõe os dados do perfil do usuário
     *
     * @return object
     */
    public function perfil(int $userId = null)
    {
        if(isset($userId) || !empty($userId)){
            $user = $this->search(array('user_id' => $userId));
            return new propertys(
                array(
                    'user_id' =>$user->getField('user_id'),
                    'access_id' => $user->getField('access_id'),
                    'name' => $user->getField('name'),
                    'email' => $user->getField('email'),
                    'document' => $user->getField('document'),
                    'birthday' => $user->getField('birthday'),
                    'school' => $user->getField('school'),
                    'office' => $user->getField('office')
                )
            );;
        }

        if($this->isModel()){
            return new propertys(
                array(
                    'user_id' => $this->getField('user_id'),
                    'access_id' => $this->getField('access_id'),
                    'name' => $this->getField('name'),
                    'email' => $this->getField('email'),
                    'document' => $this->getField('document'),
                    'birthday' => $this->getField('birthday'),
                    'school' => $this->getField('school'),
                    'office' => $this->getField('office')
                )
            );
        }

        return null;
    }
    
    /**
     * lastName - Retorna último nome do usuário
     *
     * @return void
     */
    public function lastName()
    {
        if($this->isModel()){
            return end(explode(' ', $this->getField('name')));
        }

        return null;
    }

}

?>