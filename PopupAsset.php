<?php

namespace ipoz\yii2\exitintentpopup;

use yii\web\AssetBundle;
use yii\web\View;

class PopupAsset extends AssetBundle
{
    public $js = [
        'js/bioep.js'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }

}