<?php

namespace ipoz\yii2\exitintentpopup;

use yii\base\Widget;

class PopupWidget extends Widget
{
    /**
     * @var string
     */
    public $html = '';

    /**
     * @var string
     */
    public $css = '';

    /**
     * @var array
     */
    public $options = [
        'width' => 400,
        'height' => 220,
        'cookieExp' => 30,
        'delay' => 5,
        'showOnDelay' => false
    ];

    public function init()
    {
        parent::init();
        PopupAsset::register($this->getView());
    }

    public function run()
    {
        $config = new BioepConfig($this->html, $this->css, $this->options);
        return $this->render('popup', [
            'options' => $config->getConfig()
        ]);
    }
}