<?php
namespace backend\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public static function tableName()
    {
        return '{{%user}}';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
            ],
        ];
    }
	
    public function rules()
    {
        return [
            [['username', 'email', 'group_id'], 'required'],
            [['auth_id', 'group_id', 'last_time', 'status', 'created_at', 'updated_at'], 'integer'],
            [['nickname', 'email', 'auth_key'], 'string', 'max' => 50],
            [['last_ip'], 'string', 'max' => 20],
            [['username', 'password'], 'string', 'max' => 100],
			[['auth_key'],'string'],
			['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }
	
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'password' => '密码',
            'nickname' => '昵称',
            'email' => '邮箱',
			'status'=>'状态',
            'group_id' => '用户组',
			'auth_id' => '公共ID',
			'auth_key' => '加密字符串',
			'last_ip' => '最后登录IP',
            'last_time' => '最后登录时间',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
	
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }
	
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }
	
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }
	
    public function getId()
    {
        return $this->getPrimaryKey();
    }
	
    public function getAuthKey()
    {
        return $this->auth_key;
    }
	
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }
	
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }
	
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
	
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
	
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
	
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
	
	public static function loginUpdate($id){
		$user = self::find()->where(['id'=>$id])->one();
		if($user){
			$user->last_ip = Yii::$app->request->userIP;
			$user->last_time = time();
			$user->save();
		}
		
	}
}
