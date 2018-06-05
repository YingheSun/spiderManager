<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use backend\models\LoginForm;
use backend\models\User;

class SiteController extends BaseController
{
	
    public function actionIndex()
    {	
		$info = [
            ['name'=>'操作系统','value'=>PHP_OS],
            ['name'=>'运行环境','value'=>$_SERVER["SERVER_SOFTWARE"]],
			['name'=>'PHP版本','value'=>PHP_VERSION],
			//['name'=>'MYSQL版本','value'=>Yii::$app->db->pdo->getAttribute(\PDO::ATTR_SERVER_VERSION)],
            ['name'=>'主机名','value'=>$_SERVER['SERVER_NAME']],
            ['name'=>'WEB服务端口','value'=>$_SERVER['SERVER_PORT']],
            ['name'=>'网站文档目录','value'=>$_SERVER["DOCUMENT_ROOT"]],
            ['name'=>'浏览器信息','value'=>substr($_SERVER['HTTP_USER_AGENT'], 0, 40)],
            ['name'=>'通信协议','value'=>$_SERVER['SERVER_PROTOCOL']],
            ['name'=>'上传附件限制','value'=>ini_get('upload_max_filesize')],
            ['name'=>'执行时间限制','value'=>ini_get('max_execution_time').'秒'],
            ['name'=>'服务器时间','value'=>date("Y年n月j日 H:i:s")],
            ['name'=>'北京时间','value'=>gmdate("Y年n月j日 H:i:s",time()+8*3600)],
            ['name'=>'服务器域名/IP','value'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]'],
            ['name'=>'用户的IP地址','value'=>$_SERVER['REMOTE_ADDR']],
            ['name'=>'剩余空间','value'=>round((disk_free_space(".")/(1024*1024)),2).'M']
        ];
        return $this->render('index', [
			'info'=>$info
		]);
    }
	
    public function actionLogin()
    {	
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(Url::toRoute(['site/index'],self::$domain));
        }
		
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
			User::loginUpdate(Yii::$app->user->id);
            return $this->redirect(Url::toRoute(['site/index'],self::$domain));
        } else {
            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
	
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(Url::toRoute(['site/login'],self::$domain));
    }
	
	public function actionAuth(){
		$this->layout = false;
        return $this->render('auth');
    }
}
