<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-12-14
 * Time: 10:27
 */

namespace app\modules\v1\controllers;


use yii\rest\ActiveController;

class UserController extends ActiveController{
    public $modelClass = 'backend\models\UserBackend';//common\models\User

}