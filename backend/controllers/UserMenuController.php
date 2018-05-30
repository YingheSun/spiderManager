<?php
namespace backend\controllers;

use Yii;
use backend\models\UserMenu;
use backend\models\UserMenuSearch;

class UserMenuController extends BaseController
{ 
	public $query,$query_search;
	
	public function init(){
		parent::init();
		$this->query = new UserMenu();
		$this->query_search = new UserMenuSearch();
	}
	
	public function getData(){
		$post=Yii::$app->request->post();
		return $post;
	}
	
	public function isDel($id){
		$info = UserMenu::find()->where(['pid'=>$id])->count();
		if($info == 0){
			return true;
		}
		return '存在下级节点，不允许删除';
	}
	
    protected function findModel($id)
    {
        if (($model = UserMenu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
