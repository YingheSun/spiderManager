<?php

namespace frontend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "yii_message".
 *
 * @property int $id ID
 * @property string $real_name 姓名
 * @property string $phone 电话号码
 * @property string $education 学历
 * @property string $work_life 工作年限
 * @property string $industry 行业
 * @property int $status 状态
 * @property int $created_at 创建时间
 * @property int $updated_at 修改时间
 */
class Message extends \yii\db\ActiveRecord
{
    const STATUS_0 = 0;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%message}}';
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


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['real_name', 'phone', 'education', 'work_life', 'industry'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['real_name', 'phone', 'education', 'work_life', 'industry'], 'string', 'max' => 20],
            [['phone'], 'unique','message'=>'电话号码已经存在'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'real_name' => '真实姓名',
            'phone' => '电话号码',
            'education' => '最高学历',
            'work_life' => '工作年限',
            'industry' => '行业',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
