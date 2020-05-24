<?php

namespace App\Models;

use App\Model;

class User extends Model
    implements HasEmail
{
    const TABLE = 'users';
    const FIELD = 'id';   
    const SIGN = '=';

    public $email;
    public $name;
    
    /**
     * Метод возвращает адрес электронной почты
     * @deprecated since version 2.0
     * @return string Адрес электронной почты
     */

    public function getEmail()
    {
        return $this->email;
    }

}