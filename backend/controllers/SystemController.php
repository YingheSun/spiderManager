<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;

class SystemController extends BaseController
{
	public function actionIndex(){
		$list = require(__DIR__.'../../../common/config/params.php');
		if(Yii::$app->request->isPost){
			$post=Yii::$app->request->post();
			unset($post['_csrf-backend']);
			foreach($post as $k=>$v){
				$list[$k]['value'] = $v;
			}
			$content = "<?php\r\nreturn ".var_export($list,true).";\r\n?>";
			$content = str_replace('array (','[',$content);
			$content = str_replace(')',']',$content);
			$result = file_put_contents(__DIR__.'../../../common/config/params.php',$content);
			return $this->redirect(Url::toRoute(['index'],$this->domain));
		}else{
			return $this->render('index',[
				'list'=>$list
			]);
		}
	}
}