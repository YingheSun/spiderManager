<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{

    public static $domain = 'http';

    public function init(){
        parent::init();
        if (YII_ENV == 'prod') {
            self::$domain = 'https';
        }
    }



}