<?php

namespace app\modules\apiv1\models;


class Usuario extends \app\models\Usuario
{
    public function fields()
    {
        return ['id', 'nombre', 'apellido'];
    }

    public function extrafields()
    {
        return ['edad', 'permisos', 'usuarioPermisos'];
    }
}