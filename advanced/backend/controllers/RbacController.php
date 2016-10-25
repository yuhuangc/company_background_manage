<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-10-24
 * Time: 14:54
 */

namespace backend\controllers;


use yii\web\Controller;

class RbacController extends Controller{

    public function actionIndex($name,$userid=NULL)
    {
        $authManager = \Yii::$app->authManager;
        $role = $authManager->getRole($name);
        if(!$role){
            //return  $this->_message('节点未找到');
            throw new \yii\web\UnauthorizedHttpException('节点未找到');
        }
        if(\Yii::$app->request->isPost){
            $nodes = \Yii::$app->request->post('node');
            $authManager->removeChildren($role);
            foreach($nodes as $v){
                $node = $authManager->getPermission($v);
                if(!$node)continue;
                $authManager->addChild($role,$node);
            }
            if($userid)
            {
                return $this->redirect(['/setting/adminlists']);
            }
            else{
                return $this->redirect(['/setting/roleindex']);
            }
        }
        $roleNodes = $authManager->getPermissionsByRole($name);
        $roleNodes = array_keys($roleNodes);
        $nodes = $authManager->getPermissions();
        return $this->render('index',[
            'nodes'=>$nodes,
            'roleNodes'=>$roleNodes,
            'name'=>$name,
            'uid'=>$userid
        ]);
    }

}