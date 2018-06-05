<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class MemberController extends Controller
{

    public function init(){
        parent::init();
        if(!Yii::$app->session->get('member')){
            if(Yii::$app->request->isAjax){
                return json_encode(['code'=>1002,'msg'=>'还没有登录或登陆已过期']);
            }
            return $this->redirect('site/login');
        }
    }

    //用户首页
    public function actionIndex(){



    }

    //报名
    public function actionSignup(){
        $step = Yii::$app->session->get('step');
        $member = Yii::$app->session->get('member');
        $academy = Yii::$app->request->get('id');
        if(Yii::$app->request->isAjax){




        }else{
            $signup = \frontend\models\Signup::getInfoByMid($member,$academy);
            return $this->render('signup',[
                'step' => $step?$step:($signup['status'] <= 6?$signup['status']:1),
                'signup' => $signup
            ]);
        }
    }






























}