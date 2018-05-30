<?php
namespace backend\controllers;

use Yii;
use backend\models\User;
use backend\models\UserSearch;

class UserController extends BaseController
{
	public $query,$query_search;
	
	public function init(){
		parent::init();
		$this->query = new User();
		$this->query_search = new UserSearch();
	}
   
   
	public function getData(){
		$post=Yii::$app->request->post();
		if($post){
			if($post['User']['password']){
				$post['User']['password'] = Yii::$app->security->generatePasswordHash($post['User']['password']);
				$post['User']['auth_key'] = Yii::$app->security->generateRandomString();
			}else{
				unset($post['User']['password']);
			}
		}
		return $post;
	}
   
	public function isDel($id){
		if($id==1){
			return "超级管理员不允许删除";
		}
		return true;
	}
   
   
   
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
