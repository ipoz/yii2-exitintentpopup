Exit intent popup for Yii2 web pages
===================================

Installation
----------
To install, either run
```
composer require ipoz/yii2-exitintentpopup
```
or add to the `required` section of your `composer.json` file
```
"ipoz/yii2-exitintentpopup": "*" 
```

Example usage
----------
```php
<?= \ipoz\yii2\exitintentpopup\PopupWidget::widget([
    'html' => 'POPUP CONTENT',
    'options' => [
        'cookieExp' => YII_DEBUG ? 0 : 30,
        'delay' => 5,
        'showOnDelay' => true
    ]
]); ?>
```