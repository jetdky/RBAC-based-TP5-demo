<?php

namespace app\index\model;

use think\Model;

class RoleAuth extends Model
{
    //
    public function auth()
    {
        return $this->hasOne('auth', 'id', 'auth_id');
    }
}
