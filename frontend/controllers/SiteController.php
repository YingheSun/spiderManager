<?php
namespace frontend\controllers;

use Yii;

class SiteController extends BaseController
{
	
	public function actions(){
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }
	
	
    //首页
    public function actionIndex()
    {
        return $this->render('index');
    }

    //院校介绍
    public function actionShow()
    {
        return $this->render('show');
    }

    //登录
    public function actionLogin()
    {
        if(Yii::$app->request->isAjax){
            $phone = Yii::$app->request->post('phone');
            $code = Yii::$app->request->post('code');
            $val = Yii::$app->session->get("'".$phone."'");
            if (!$code || !isset($val['code']) || $val['code'] != $code || !isset($val['time']) || $val['time']+600 < time()){
                return json_encode(['code'=>1002,'msg'=>'验证码错误']);
            }else{
                $member = \frontend\models\Member::getInfoByPhone($phone);
                if($member){
                    Yii::$app->session->set('member',$member->id);
                    return json_encode(['code'=>1001,'msg'=>'登录成功']);
                }else{
                    $member = new \frontend\models\Member();
                    if ($member->load(['member'=>['phone'=>$phone,'created_at'=>time(),'updated_at'=>time()]],'member') && $member->save()) {
                        Yii::$app->session->set('member',$member->id);
                        return json_encode(['code'=>1001,'msg'=>'登录成功']);
                    }else{
                        return json_encode(['code'=>1002,'msg'=>$member->getFirstError('phone')]);
                    }
                }
            }
        }
    }
}
