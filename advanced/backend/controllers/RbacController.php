<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-10-24
 * Time: 14:54
 */

namespace backend\controllers;


use Yii;
use yii\web\Controller;

class RbacController extends Controller{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // 一、添加 权限
        $permissionName = 'user-backend/user-list';
        $permission = $auth->getPermission($permissionName);
        if(empty($permission)){
            $permission = $auth->createPermission($permissionName);
            $permission->description = '创建了 ' . $permissionName. ' 权限';
            $auth->add($permission);
        }

        // 二、创建一个角色blogManage，并为该角色分配权限
        $roleName = '博客管理员';
        $roleManage = $auth->getRole($roleName);
        if(empty($roleManage)) {
            $roleManage = $auth->createRole($roleName);
            $roleManage->description = '创建了 ' . $roleName. ' 角色';
            $auth->add($roleManage);
        }

        //三、将权限赋给角
        if(!$auth->hasChild($roleManage,$permission)){
            $auth->addChild($roleManage, $permission);
        }

        //四、(角色赋给用户)为用户 test1（改用户的uid=1） 分配角色 "博客管理" 权限
        $userId = 1;
        $assignment = $auth->getAssignment($roleName,$userId);
        if(empty($assignment)){
            $auth->assign($roleManage, $userId);
        }
    }
}