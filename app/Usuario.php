<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function getUsuario(){
        return 'Get usuário';
    }

    public static function listaUsuarios(){
        return 'Lista de usuários';
    }
}
