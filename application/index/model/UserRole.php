<?php

namespace app\index\model;

use think\Model;

class UserRole extends Model
{
    //
    public function role()
    {
        return $this->hasOne('role', 'id', 'role_id');
    }
}
