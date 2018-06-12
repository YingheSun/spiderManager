<?php
namespace frontend\controllers;

use Yii;

class ApiController extends BaseController
{
	
	
	public $enableCsrfValidation = false;

    public function actionSendsms(){
        $phone = Yii::$app->request->post('phone');
        $captcha = Yii::$app->request->post('captcha');
        if(!$phone || !preg_match("/^(13|14|15|16|17|18)[0-9]{9}$/",$phone)){
            return json_encode(['code'=>1002,'msg'=>'手机号错误']);
        }else if(!$captcha || $captcha != Yii::$app->session->get('captcha')){
            return json_encode(['code'=>1002,'msg'=>'验证码错误']);
        }else{
            //Yii::$app->session->set("'".$phone."'", ['code'=>'123456','time'=>time()]);
            //return json_encode(['code'=>1001,'msg'=>'验证码已发送']);

            $val = Yii::$app->session->get($phone);
            if (isset($val['time']) && $val['time']+60 > time()) {
                return json_encode(['code'=>1002,'msg'=>'请勿重复发送（'.$val.'）']);
            }else{
                $captcha = rand(100000,999999);
                $sysName = "strategic_innovation_sunland";
                $msg = "验证码为".$captcha."，1分钟内有效，如非本人操作请忽略本短信。";
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
                    Yii::$app->session->set("'".$phone."'", ['code'=>$captcha.'','time'=>time()]);
                    return json_encode(['code'=>1001,'msg'=>'验证码已发送']);
                }else{
                    return json_encode(['code'=>1002,'msg'=>'发送失败']);
                }
            }
        }
    }


    public function actionCaptcha(){
        /*
        $code = '';
        for($i = 0; $i < 4; $i++) {
            $code .= rand(0, 9);
        }
        Yii::$app->session->set('captcha',$code);
        $captcha = new \yii\captcha\CaptchaAction(Yii::$app->controller->action->id,Yii::$app->controller,[
            'fixedVerifyCode' => $code,
            'backColor'=>0xffffff,//背景颜色
            'maxLength' => 4, //最大显示个数
            'minLength' => 4,//最少显示个数
            'padding' => 5,//间距
            'height'=>40,//高度
            'width' => 80,  //宽度
            'foreColor'=>0x000000,     //字体颜色
            'offset'=>0,        //设置字符偏移量 有效果
        ]);
        return $captcha->run();
        **/

        $img = imagecreatetruecolor(100, 40);
        $black = imagecolorallocate($img, 0x00, 0x00, 0x00);
        $green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
        $white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
        imagefill($img,0,0,$white);
        $code = '';
        for($i = 0; $i < 4; $i++) {
            $code .= rand(0, 9);
        }
        Yii::$app->session->set('captcha',$code);
        imagestring($img, 5, 26, 12, $code, $black);
        for($i=0;$i<50;$i++) {
            imagesetpixel($img, rand(0, 100) , rand(0, 100) , $black);
            imagesetpixel($img, rand(0, 100) , rand(0, 100) , $green);
        }
        header("content-type: image/png");
        imagepng($img);
        imagedestroy($img);

    }

    public function actionUpload(){
        $file=$_FILES['signup'];
        $type = Yii::$app->request->get('type','image');
        if($type == 'image'){
            if(!in_array($file['type'],['image/jpeg','image/png'])){
                return json_encode(['error' => 1, 'msg' => '文件类型错误']);
            }

            if($file['size'] > 2097152){
                return json_encode(['error' => 1, 'msg' => '文件大小超过2M']);
            }
        }else if($type == 'file'){
            if(!in_array($file['type'],['application/octet-stream','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.ms-word'])){
                return json_encode(['error' => 1, 'msg' => '文件类型错误']);
            }

            if($file['size'] > 2097152){
                return json_encode(['error' => 1, 'msg' => '文件大小超过2M']);
            }
        }

        $cosClient = new \Qcloud\Cos\Client([
            'region' => Yii::$app->params['Qcloud_region']['value'],
            'credentials'=> [
                'appId'		=> Yii::$app->params['Qcloud_appid']['value'],
                'secretId'  => Yii::$app->params['Qcloud_secretId']['value'],
                'secretKey' => Yii::$app->params['Qcloud_secretKey']['value']
            ]
        ]);
        try {
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $result = $cosClient->upload(
                $bucket		=	Yii::$app->params['Qcloud_bucket']['value'],
                $key 		= 	date('YmdHis').rand(10000,99999).'.'.$ext,
                $body		=	fopen($file['tmp_name'],'r+')
            );
            $url = $result->get('ObjectURL');
            if(self::$domain == 'https'){
                $url = str_replace('http','https',$url);
            }
            return json_encode(['error' => 0, 'url' => $url]);
        } catch (\Exception $e) {
            return json_encode(['error' => 1, 'msg' => $e->getMessage()]);
        }
		
		/**
		$savePath='/uploads/';
		if(!is_dir($savePath)){
			mkdir($savePath, 0777,true);
		}
		$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
		$saveName=date('YmdHis').rand(10000,99999).'.'.$ext;
		@move_uploaded_file($file["tmp_name"],$savePath.$saveName);
		$url = '';
		**/
    }
}