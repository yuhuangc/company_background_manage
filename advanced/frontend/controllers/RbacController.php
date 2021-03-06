<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-10-19
 * Time: 14:42
 */

namespace frontend\controllers;


use Yii;
use yii\web\Controller;

class RbacController extends Controller{

    /**
     * 权限管理初始化
     */
    public function actionInit ()
    {
        $auth = Yii::$app->authManager;

        // 一、添加 权限
        $permissionName = 'site/index';
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

    #region 权限控制RBAC
    /**
     * 1、创建权限
     * @param $name
     */
    public function createPermission($name)
    {
        $auth = Yii::$app->authManager;
        $createPost = $auth->createPermission($name);
        $createPost->description = '创建了 ' . $name. ' 权限';
        $auth->add($createPost);
    }

    /**
     * 2、创建角色(1、2步骤会在auth_item表中创建两条记录，以表中的type类型作为区分，type=1是角色，type=2为权限)
     * @param $name
     */
    public function createRole($name)
    {
        $auth = Yii::$app->authManager;
        $role = $auth->createRole($name);
        $role->description = '创建了 ' . $name. ' 角色';
        $auth->add($role);
    }

    /**
     * 将权限赋给角色
     * @param $items
     */
    public function addChild($items)
    {
        $auth = Yii::$app->authManager;
        $parent = $auth->createRole($items['role']);                //创建角色对象
        $child = $auth->createPermission($items['permission']);     //创建权限对象
        $auth->addChild($parent, $child);                           //添加对应关系
    }

    /**
     * 将角色赋给用户
     * @param $items
     */
    public function addAssign($items)
    {
        $auth = Yii::$app->authManager;
        $role = $auth->createRole($items['role']);                //创建角色对象
        $user_id = 1;                                             //获取用户id，此处假设用户id=1
        $auth->assign($role, $user_id);                           //添加对应关系
    }
    #endregion
}