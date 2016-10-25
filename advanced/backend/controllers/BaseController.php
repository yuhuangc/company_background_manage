<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-10-24
 * Time: 11:52
 */

namespace backend\controllers;


use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

class BaseController extends Controller{
    /**
     * 权限检验
     * @param \yii\base\Action $action
     * @return bool
     * @throws BadRequestHttpException
     * @throws \yii\web\UnauthorizedHttpException
     */
    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }

        $controller = Yii::$app->controller->id;
        $action = Yii::$app->controller->action->id;
        $permissionName = $controller.'/'.$action;
        if(!\Yii::$app->user->can($permissionName) && Yii::$app->getErrorHandler()->exception === null){
            throw new \yii\web\UnauthorizedHttpException('对不起，您现在还没获此操作的权限');
            //echo '对不起，您现在还没获此操作的权限';
            //die;
        }
        return true;
    }
}