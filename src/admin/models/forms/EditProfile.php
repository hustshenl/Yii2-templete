<?php
namespace admin\models\forms;

use common\models\user\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class EditProfile extends Model
{
    public $id;
    public $username;
    public $nickname;
    public $phone;
    public $remark;
    public $email;
    public $password;
    public $newPassword;
    public $password2;
    public $isNewRecord = false;

    /**
     * @param array $config
     * @param bool $item
     */
    public  function __construct($config = [],$item = false){

        parent::__construct($config);

        if($item){
            $this->attributes = $item;
        }
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['id', 'integer'],
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            //['username', 'unique', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            //['email', 'unique', 'message' => 'This email address has already been taken.'],

            //['password', 'required'],
            [['password','newPassword'], 'string', 'min' => 6],
            [['nickname','phone','remark'], 'string'],
            [['password2'], 'compare','compareAttribute'=>'newPassword'],
        ];
    }
    /**
     * 判断用户名称是否重复
     */
    public function unique($attribute){

        if(User::hasItem($attribute, $this->$attribute, $this->id) !== false){
            $message = Yii::t('admin', '"{value}" 已经存在.');
            $params = [
                'attribute' => $this->getAttributeLabel($attribute),
                'value' => $this->$attribute,
            ];
            $this->addError($attribute, Yii::$app->getI18n()->format($message, $params, Yii::$app->language));
        }
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', '旧密码'),
            'newPassword' => Yii::t('app', '新密码'),
            'password2' => Yii::t('app', '重复密码'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'nickname' => Yii::t('app', 'Nick name'),
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function update()
    {
        if ($this->validate()) {
            $user = User::findOne($this->id);
            $user->email = $this->email;
            $user->nickname = $this->nickname;
            $user->phone = $this->phone;
            $user->remark = $this->remark;

            if(!empty($this->newPassword)&&empty($this->password)){
                $this->addError('password', '密码不可为空');
                return false;
            }else{
                if(!empty($this->newPassword)&&$user->validatePassword($this->password)){
                    $user->setPassword($this->newPassword);
                    $user->generateAuthKey();
                }
            }
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }
}
