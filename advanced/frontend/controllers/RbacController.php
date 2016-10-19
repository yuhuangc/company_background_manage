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

        // 一、添加 "/blog/index" 权限
        $permissionName = '/blog/index';
        $blogIndex = $auth->createPermission($permissionName);
        $blogIndex->description = '创建了 ' . $permissionName. ' 权限';
        $auth->add($blogIndex);

        // 二、创建一个角色blogManage，并为该角色分配"/blog/index"权限
        $roleName = '博客管理员';
        $blogManage = $auth->createRole($roleName);
        $blogManage->description = '创建了 ' . $roleName. ' 角色';
        $auth->add($blogManage);

        //三、将权限赋给角色
        $auth->addChild($blogManage, $blogIndex);

        //四、为用户 test1（改用户的uid=1） 分配角色 "博客管理" 权限
        $auth->assign($blogManage, 1); // 1是test1用户的uid
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