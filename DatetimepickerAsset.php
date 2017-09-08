<?php
/**
 * Created by PhpStorm.
 * User: hoter.zhang
 * Date: 2017/8/21
 * Time: 10:35
 */

namespace xinyeweb\datetimepicker;


use yii\web\AssetBundle;

class DatetimepickerAsset extends AssetBundle
{

    public $js = [
        'js/bootstrap-datetimepicker.min.js'
    ];
    public $css = [
        'css/bootstrap-datetimepicker.min.css'
    ];
    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__).DIRECTORY_SEPARATOR . 'assets';
    }
}