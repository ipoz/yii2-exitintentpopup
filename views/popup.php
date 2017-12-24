<?php
$this->registerJs(
    "var bioEpOptions = " . \yii\helpers\Json::htmlEncode($options) . ";"
    . "bioEp.init(bioEpOptions);",
    \yii\web\View::POS_HEAD
);