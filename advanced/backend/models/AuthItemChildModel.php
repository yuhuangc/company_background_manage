<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-12-14
 * Time: 15:18
 */

namespace backend\models;


use yii\db\ActiveRecord;

/**
 * 角色权限关系class
 * Class AuthItemChildModel
 * @package backend\models
 */
class AuthItemChildModel extends ActiveRecord{
    public static function tableName()
    {
        return 'auth_item_child';
    }
}