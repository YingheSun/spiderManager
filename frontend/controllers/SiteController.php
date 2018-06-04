<?php
namespace frontend\controllers;

use Yii;

class SiteController extends BaseController
{
    //首页
    public function actionIndex()
    {
        return $this->render('index');
    }

    //在线申请
    public function actionList()
    {
        if(Yii::$app->request->isAjax){

        }else{
            return $this->render('list');
        }
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

        }else{
            return $this->render('show');
        }
    }


}
