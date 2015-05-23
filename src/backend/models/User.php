<?php
namespace backend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        //return false;
        return new User();
        throw new NotSupportedException('"findIdentity" is not implemented.');
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        if(empty($token)||$token!=Yii::$app->params['toolkit']['token']) return false;
        return new User();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return 1;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return 0;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return false;
    }



}
