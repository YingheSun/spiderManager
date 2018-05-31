<?php
namespace backend\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;
	
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            ['rememberMe', 'boolean'],
            ['password', 'validatePassword'],
        ];
    }
	
	public function attributeLabels()
    {
        return [
            'username' => '用户名',
            'password' => '密码',
            'rememberMe' => '记住我',
        ];
    }
	
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, '用户名或密码错误。');
            }
        }
    }
	
	public function login(){
		/**
		//263登录
		$user = $this->getUser();
		if(empty($user)){
			$post_data = array(
				'username' => $this->username,
				'password' => $this->password
			);
			$postdata = http_build_query($post_data);
			$options = array(
				'http' => array(
					'method' => 'POST',
					'header' => 'Content-type:application/x-www-form-urlencoded',
					'content' => $postdata,
					'timeout' => 5
				)
			);
			$context = stream_context_create($options);
			$result = file_get_contents('https://ehr.sunlands.com/ehr-web/authenticate.do', false, $context);
			$resp = json_decode($result);
			if($resp->flag==1){
				$user = new User();
				$user->username = $resp->data->user;
				$user->password = Yii::$app->security->generatePasswordHash($this->password);
				$user->auth_key = Yii::$app->security->generateRandomString();
				$user->email = $resp->data->user . '@sundlands.com';
				$user->nickname = $resp->data->userName;
				$user->group_id = 1;
				$user->auth_id = $resp->data->userId;
				$user->last_time = time();
				$user->last_ip = Yii::$app->request->userIP;
				$user->created_at = time();
				$user->updated_at = time();
				$user->save();
			}
		}**/
		if ($this->validate()) {
			return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
		}
		return false;
    }

    protected function getUser(){
        if ($this->_user === null || empty($this->_user)) {
            $this->_user = User::findByUsername($this->username);
        }
		
        return $this->_user;
    }
}
