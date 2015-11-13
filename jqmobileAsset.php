<?php
namespace net\frenzel\assets\jqmobile;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */
class jqmobileAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/jquery-mobile';
    
    public $css = [
        'css/themes/default/jquery.mobile.css',
        'css/structure/jquery.mobile.structure.css',
        'css/themes/default/jquery.mobile.inline-png.css'
    ];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'js/jquery.mobile.js'
    ];

    /**
     * [$depends description]
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}