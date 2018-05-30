<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use backend\models\User;
use backend\models\UserMenu;
use backend\models\UserGroup;

class BaseController extends Controller
{
    public $domain = 'http';
	public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
	
	public function beforeAction($action){
        if (YII_ENV == 'prod') {
            $this->domain = 'https';
        }
		$uid=Yii::$app->user->id;
		$module = $action->uniqueId;
		if($module == 'site/login' && $uid){
			return $this->redirect(Url::toRoute(['site/index'],$this->domain));
		}else if($module != 'site/login' && !$uid){
			return $this->redirect(Url::toRoute(['site/login'],$this->domain));
		}else{
			if($uid!=1 &&$module!='site/auth' && $module!='site/logout' && $module!='site/login' && $module!='api/upload'){
				$user=User::find()->select('group_id')->where(['id'=>$uid])->one();
				$userGroup=UserGroup::find()->select('rules')->where(['id'=>$user->group_id])->one();
				$now=UserMenu::find()->where(['module'=>$module])->asArray()->one();
				if(!in_array($now['id'],explode(',',$userGroup['rules']))){
					if(Yii::$app->request->isAjax){
						exit(json_encode(['code'=>1002,'msg'=>'没有权限执行此操作']));
					}else{
						$this->layout=false;
						exit($this->render(Url::toRoute(['site/auth'],$this->domain)));
					}
				}
			}
			return true;
		}
	}
	
	public static function mainMenu(){
		$uid=Yii::$app->user->id;
		$map = [];
		if($uid && $uid != 1){
			$user=User::find()->select('group_id')->where(['id'=>$uid])->one();
			$userGroup=UserGroup::find()->select('rules')->where(['id'=>$user->group_id])->one();
			$map = ['in','id',explode(',',$userGroup['rules'])];
		}
		$userMenu=UserMenu::find()->where($map)->orderBy('sort asc,created_at desc')->asArray()->all();
		$menu=[];
		if(!empty($userMenu)){
			$now=UserMenu::find()->where(['module'=>Yii::$app->controller->id . '/index'])->asArray()->one();
			foreach($userMenu as $k=>$v){
				$v['active']=$now['id']==$v['id']?'active':'';
				$menu[$v['pid']][]=$v;
			}
			if(isset($menu[0])){
				foreach($menu[0] as $k=>$v){
					$menu[0][$k]['active']=$now['pid']==$v['id']?'active':'';
					$menu[0][$k]['item']=isset($menu[$v['id']])?$menu[$v['id']]:[];
				}
			}
		}
		
		return isset($menu[0])?$menu[0]:[];
	}
	
	public function actionIndex(){
        $dataProvider = $this->query_search->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $this->query_search,
            'dataProvider' => $dataProvider
        ]);
    }
	
	public function actionCreate(){
        if ($this->query->load($this->getData()) && $this->query->save()) {
            return $this->redirect(Url::toRoute(['index'],$this->domain));
        } else {
            return $this->render('create', [
                'model' => $this->query,
            ]);
        }
    }
	
	public function actionUpdate($id){
        $model = $this->findModel($id);
        if ($model->load($this->getData()) && $model->save()) {
            return $this->redirect(Url::toRoute(['index'],$this->domain));
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
	
	public function actionDelete($id){
		$result=$this->isDel($id);
		if($result === true){
			$this->findModel($id)->delete();
            return $this->redirect(Url::toRoute(['index'],$this->domain));
		}else{
			echo $result;
		}
    }
	
	
	public function actionView($id){
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
}