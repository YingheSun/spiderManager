<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

class UserGroup extends \yii\db\ActiveRecord
{
	
    public static function tableName()
    {
        return '{{%user_group}}';
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
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['rules'], 'required'],
            [['rules'], 'string'],
            [['name'], 'string', 'max' => 100],
        ];
    }
	
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名称',
            'status' => '状态',
            'rules' => '权限列表',
            'created_at' => '添加时间',
            'updated_at' => '更新时间',
        ];
    }
	
	
	public static function dropDownList(){
		$list=UserGroup::find()->select(['name','id'])->indexBy('id')->column();
		return $list;
	}
	
}
