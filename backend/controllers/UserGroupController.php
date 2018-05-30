<?php
namespace backend\controllers;

use Yii;
use backend\models\UserGroup;
use backend\models\UserGroupSearch;

class UserGroupController extends BaseController
{
   public $query,$query_search;
	
	public function init(){
		parent::init();
		$this->query = new UserGroup();
		$this->query_search = new UserGroupSearch();
	}
	
	public function getData(){
		$post=Yii::$app->request->post();
		if($post){
			$post['UserGroup']['rules']=implode(',',$post['UserGroup']['rules']);
		}
		return $post;
	}
	
	public function isDel($id){
		return true;
	}
   
   
    protected function findModel($id)
    {
        if (($model = UserGroup::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
