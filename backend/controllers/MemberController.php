<?php

namespace backend\controllers;

use Yii;
use backend\models\Member;
use backend\models\MemberSearch;

class MemberController extends BaseController
{
    
    public $query,$query_search;
	
	public function init(){
		parent::init();
		$this->query = new Member();
		$this->query_search = new MemberSearch();
	}
   
   
	public function getData(){
		$post=Yii::$app->request->post();
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
        if (($model = Member::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
