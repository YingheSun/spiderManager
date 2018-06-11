<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Url;

class MemberController extends BaseController
{
    public function actionIndex(){
        $member = \frontend\models\Member::getInfo(Yii::$app->session->get('member'));
        $signup = \frontend\models\Signup::getInfoByMid(Yii::$app->session->get('member'));
        return $this->render('index',[
            'member'=>$member,
            'signup'=>$signup
        ]);
    }


    public function actionInfo(){
        if(Yii::$app->session->has('member')) {
            $member = Yii::$app->session->get('member');
            if (Yii::$app->request->isAjax) {
                $data = Yii::$app->request->post('data');
                $result = \frontend\models\Member::saveInfo($data);
                if($result === true){
                    return json_encode(['code' => 1001, 'msg' => '修改成功']);
                }
                return json_encode(['code' => 1002, 'msg' => '修改失败']);
            } else {
                $info = \frontend\models\Member::getInfo($member);
                return $this->render('info', [
                    'info' => $info
                ]);
            }
        }else{
            if(Yii::$app->request->isAjax){
                return json_encode(['code'=>1002,'msg'=>'还没有登录或登陆已过期']);
            }
            $this->redirect(Url::toRoute(['site/index'],self::$domain));
        }
    }



    public function actionSignup(){
        if(Yii::$app->session->has('member')){
            $member = Yii::$app->session->get('member');
            if(Yii::$app->request->isAjax){
                $data = Yii::$app->request->post('data');
                $signup = \frontend\models\Signup::getInfo($member,$data['academy_id']);
                if($signup && $signup->status > 0 && $signup->status_reason == ''){
                    return json_encode(['code' => 1002, 'msg' => '资料正在审核']);
                }else{
                    if(!$signup) {
                        $signup = new \frontend\models\Signup();
                        $data['member_id'] = $member;
                        $data['created_at'] = time();
                    }else{
                        unset($data['academy_id']);
                    }

                    if(strpos($signup->signup_step,$data['step']) === false){
                        $signup_step = str_split($signup->signup_step);
                        $signup_step[]=$data['step'];
                        sort($signup_step,SORT_REGULAR);
                        $data['signup_step'] = implode("",$signup_step);
                    }
                    $data['status'] = $signup->status > 0?$signup->status:1;
                    $data['status_reason'] = '';
                    $data['updated_at'] = time();
                    $data['signup_at'] = time();
                    $signup->scenario = 'step'.$data['step'];
                    if ($signup->load(['signup'=>$data],'signup') && $signup->save()) {
                        return json_encode(['code'=>1001,'msg'=>'保存成功']);
                    } else {
                        $errors = $signup->getErrors();
                        return json_encode(['code'=>1002,'msg'=>array_shift( $errors)[0]]);
                    }
                }
            }else {
                $step = Yii::$app->request->get('step',1)?Yii::$app->request->get('step',1):1;
                $academy = Yii::$app->request->get('academy',1);
                $signup = \frontend\models\Signup::getInfo($member, $academy);
                if (!$signup) {
                    $signup = new \frontend\models\Signup();
                }


                if ($step == 1 || strpos($signup->signup_step,$step) === false){
                    $member = \frontend\models\Member::getInfo($member);
                    if (isset($member->avatar) && $signup->avatar == '') {
                        $signup->avatar = $member->avatar;
                    }
                    if (isset($member->real_name) && $signup->real_name == '') {
                        $signup->real_name = $member->real_name;
                    }
                    if (isset($member->phone) && $signup->phone == '') {
                        $signup->phone = $member->phone;
                    }
                    if (isset($member->email) && $signup->email == '') {
                        $signup->email = $member->email;
                    }
                }
                if ($step == 5 || strpos($signup->signup_step,$step) === false){
                    if ($signup->question_1 == '') {
                        $signup->question_1 = '*1. 对您来说，什么最重要？为什么？（500字左右）';
                    }
                    if ($signup->question_2 == '') {
                        $signup->question_2 = '*2. 在PHBS的第一次课堂上，您会怎么向同学作自我介绍？（500字左右）';
                    }
                    if ($signup->question_3 == '') {
                        $signup->question_3 = '*3. 请描述一次自我超越的经历（500字左右）。讲述近3年内发生的一次经历，包括您处理事情所做的努力和经过，事情的结果如何？与事件相关的人的反应是怎样的？';
                    }
                }

                $write_step = $signup->status > 0?($signup->status_reason != ''?$signup->status:7):0;
                return $this->render('signup',[
                    'step' => $step?$step:1,
                    'write_step'=>$write_step,
                    'academy'=>$academy,
                    'signup' => $signup
                ]);
            }
        }else{
            if(Yii::$app->request->isAjax){
                return json_encode(['code'=>1002,'msg'=>'还没有登录或登陆已过期']);
            }
            $this->redirect(Url::toRoute(['site/index'],self::$domain));
        }
    }

    public function actionLogout(){
        Yii::$app->session->removeAll();
        Yii::$app->session->destroy();
        $this->redirect(Url::toRoute(['site/index'],self::$domain));
    }
}