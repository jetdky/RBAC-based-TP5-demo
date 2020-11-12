<?php

namespace app\index\model;

use think\Model;

class Role extends Model
{
    //
    public function roleAuth()
    {
        return $this->hasMany('role_auth', 'role_id', 'id')->field('id, role_id, auth_id');
    }
}
