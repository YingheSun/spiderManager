<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/global.css',
        'static/css/index.css',
    ];
    public $js = [
		'static/js/jquery-1.11.3.min.js',
        'static/js/My97DatePicker/WdatePicker.js',
        'static/js/layer/layer.js',
        'static/js/jquery.ajaxupload.js',
        'static/js/jquery.fileDownload.min.js',
        'static/js/jquery.cookie.js',
        'static/js/index.js'
    ];
    public $depends = [
        
    ];
}
