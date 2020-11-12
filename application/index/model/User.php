<?php

namespace app\index\model;

use think\Model;

class User extends Model
{
    //
    public function userRole()
    {
        return $this->hasOne('user_role', 'user_id', 'id')->field('id,user_id,role_id');
    }
}
