<?php
/**
 *created by dengkunyao
 */

namespace app\index\controller;

use app\index\model\Role;
use app\index\model\User;
use think\Controller;

class IndexBase extends Controller
{
    public $userId = 2; //模拟获得到的用户id
    public $commonOperate = ['indexIndexindex'];

    protected function _initialize()
    {
        //获得当前所在url
        $request = $this->request;
        $module = $request->module();
        $controller = $request->controller();
        $action = $request->action();
        $nowOperate = $module . $controller . $action;

        //获得当前用户的权限
        $userModel = new User();
        $roleModel = new Role();
        $userRoleObj = $userModel->where('id', '=', $this->userId)->with('userRole.role')->find();
        $roleId = $userRoleObj->userRole->role_id;
        $roleName = $userRoleObj->userRole->role->name;
        $roleAuthObj = $roleModel->where('id', '=', $roleId)->with('roleAuth.auth')->find();
        foreach ($roleAuthObj->role_auth->toArray() as $value) {
            $authOperate[] = $value['auth']['module'] . $value['auth']['controller'] . $value['auth']['action'];
        }

        //权限判断
        if (!in_array($nowOperate, $this->commonOperate)) {
            if (!in_array($nowOperate, $authOperate)){
                $this->error('你是' . $roleName . '你没有权限访问此页面！');
            }
        }

    }

}