<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "yii_member".
 *
 * @property int $id ID
 * @property string $avatar 用户照片
 * @property string $real_name 真实姓名
 * @property string $email 邮箱
 * @property string $phone 手机号
 * @property int $created_at 注册时间
 * @property int $updated_at 最后登录时间
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%member}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['avatar'], 'string', 'max' => 100],
            [['real_name', 'phone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
            [['phone'], 'unique', 'message'=>'手机号已存在'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'avatar' => 'Avatar',
            'real_name' => 'Real Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function getInfo($id){
        $member = self::find()->where(['id'=>$id])->one();
        return $member;
    }

    public static function getInfoByPhone($phone){
        $member = self::find()->where(['phone'=>$phone])->one();
        return $member;
    }

    public static function saveInfo($data){
        $member = self::find()->where(['id'=>Yii::$app->session->get('member')])->one();
        if($member){
            $member->avatar = $data['avatar'];
            $member->phone = $data['phone'];
            $member->real_name = $data['real_name'];
            $member->email = $data['email'];
            $member->updated_at = time();
            if($member->save()){
                return true;
            }
        }
        return false;
    }
}
