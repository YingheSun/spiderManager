<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "yii_user_menu".
 *
 * @property string $id ID
 * @property int $pid 上级菜单
 * @property string $name 名称
 * @property string $module 权限标识
 * @property int $status 状态
 * @property int $sort 排列顺序
 * @property string $icon 图标
 * @property string $count 验证规则
 * @property int $created_at 添加时间
 * @property int $updated_at 修改时间
 */
class UserMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii_user_menu';
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
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'status', 'sort', 'created_at', 'updated_at'], 'integer'],
            [['name', 'module'], 'required'],
            [['name', 'icon'], 'string', 'max' => 20],
			[['module'], 'string', 'max' => 50],
            [['count'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           'id' => 'ID',
            'pid' => '上级节点',
            'name' => '权限名称',
            'module' => '权限标识',
            'status' => '状态',
            'sort' => '排序',
            'icon' => '图标',
            'count' => '数据统计',
            'created_at' => '添加时间',
            'updated_at' => '编辑时间',
        ];
    }
	
	public static function getListLevel(&$list,$pid=0,$t=''){
		$data=self::find()->where(['pid'=>$pid])->all();
		if($data){
			$str='├ ';
			foreach($data as $k=>$v){
				if($k==count($data)-1){
					$str='└ ';
				}
				$tmp = $t;
				$t.='│';
				$list[$v['id']]=$t.$str.$v['name'];
				self::getListLevel($list,$v['id'],$t);
				$t=$tmp;
			}
		}
	}
	
	public static function checkboxList($pid,$rules=[]){
		$list=self::find()->select(['name','id','pid'])->where(['pid'=>$pid])->orderBy('id asc')->all();
		foreach($list as $k=>$v){
			$checked = '';
			if(in_array($v['id'],$rules)){
				$checked = "checked='true'";
			}
			echo '<label style="cursor:pointer;margin-right:15px;"><input type="checkbox" name="UserGroup[rules][]" value="'.$v['id'].'" onclick="check('.$v['id'].')" data-id="'.$v['id'].'" data-pid="'.$v['pid'].'" class="pid'.$v['pid'].' id'.$v['id'].'" '.$checked.'> '.$v['name'].'</label>';
			if($v['pid'] == 0){
				echo "<div></div>";
			}
			self::checkboxList($v['id'],$rules);
			if($v['pid'] == 0){
				echo "<div style='border-top:1px solid #ccc;'></div>";
			}
		}
	}
	
	public static function getList($rules){
		$list=self::find()->select(['name','id','pid'])->where(['id'=>$rules])->orderBy('id asc')->all();
		return $list;
	}
	
	
	
	
	
}
