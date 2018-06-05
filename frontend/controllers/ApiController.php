<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class ApiController extends Controller
{

    public function actionSendsms(){
        $phone = Yii::$app->request->post('phone');
        //Yii::$app->session->set("'".$phone."'", ['code'=>'123456','time'=>time()]);
        //return json_encode(['code'=>1001,'msg'=>'验证码已发送']);
        if(!$phone || !preg_match("/^(13|14|15|17|18)[0-9]{9}$/",$phone)){
            return json_encode(['code'=>1002,'msg'=>'手机号错误']);
        }else{
            $authcode = rand(100000,999999);
            $val = Yii::$app->session->get($phone);
            if ($val['time']+60 > time()) {
                return json_encode(['code'=>1002,'msg'=>'请勿重复发送（'.$val.'）']);
            }else{
                $sysName = "strategic_innovation_sunland";
                $msg = "验证码为".$authcode."，1分钟内有效，如非本人操作请忽略本短信。";
                $url = "http://sms.shangdejigou.cn/gateway-war/gateway/sendSms/sendSms.action";
                $postdata = array(
                    "head" => array(
                        "productSystem" => $sysName,
                        "messageType" => "EXTERNAL",
                        "groupNum" => 1,
                        "timing" => '',
                        "operator" => "system",
                        "createTime" => date("Y-m-d H:i:s",time()),
                        "signData" => md5($sysName."EXTERNAL1sunland")
                    ),
                    "body" => array(
                        array(
                            "mobile" => $phone,
                            "message" => $msg,
                            "sentType" => "CODE",
                            "sendMarking" => "",
                            "category1" => "spread",
                            "category2" => "",
                            "category3" =>""
                        )
                    )
                );
                $post_fields="requestJson=".json_encode($postdata);

                //提交登录表单请求
                $ch=curl_init($url);
                curl_setopt($ch,CURLOPT_HEADER,0);
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                curl_setopt($ch,CURLOPT_POST,1);
                curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
                $result = curl_exec($ch);
                curl_close($ch);
                if($result == 0){
                    Yii::$app->session->set("'".$phone."'", ['code'=>$authcode.'','time'=>time()]);
                    return json_encode(['code'=>1001,'msg'=>'验证码已发送']);
                }else{
                    return json_encode(['code'=>1002,'msg'=>'发送失败']);
                }
            }
        }
    }




}