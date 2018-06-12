<?php

namespace backend\models;

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
        return 'yii_member';
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
            [['phone'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'avatar' => '头像',
            'real_name' => '姓名',
            'email' => '邮箱',
            'phone' => '电话号码',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
