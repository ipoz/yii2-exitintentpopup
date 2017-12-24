<?php


namespace ipoz\yii2\exitintentpopup;


class BioepConfig
{
    /**
     * @var int
     */
    private $width = 400;

    /**
     * @var int
     */
    private $height = 220;

    /**
     * @var string
     */
    private $html = '';

    /**
     * @var string
     */
    private $css = '';

    /**
     * @var int
     */
    private $cookieExp = 30;

    /**
     * @var int
     */
    private $delay = 5;

    /**
     * @var boolean
     */
    private $showOnDelay = false;

    /**
     * @param int $width
     */
    private function setWidth($width)
    {
        if (!is_int($width)) {
            throw new \InvalidArgumentException("Invalid width");
        }
        $this->width = $width;
    }

    /**
     * @param int $height
     */
    private function setHeight($height)
    {
        if (!is_int($height)) {
            throw new \InvalidArgumentException("Invalid height");
        }
        $this->height = $height;
    }

    /**
     * @param string $html
     */
    private function setHtml($html)
    {
        if (!is_string($html)) {
            throw new \InvalidArgumentException("Invalid html");
        }
        $this->html = $html;
    }

    /**
     * @param string $css
     */
    private function setCss($css)
    {
        if (!is_string($css)) {
            throw new \InvalidArgumentException("Invalid css");
        }
        $this->css = $css;
    }

    /**
     * @param int $cookieExp
     */
    private function setCookieExp($cookieExp)
    {
        if (!is_int($cookieExp)) {
            throw new \InvalidArgumentException("Invalid cookieExp");
        }
        $this->cookieExp = $cookieExp;
    }

    /**
     * @param int $delay
     */
    private function setDelay($delay)
    {
        if (!is_int($delay)) {
            throw new \InvalidArgumentException("Invalid delay");
        }
        $this->delay = $delay;
    }

    /**
     * @param bool $showOnDelay
     */
    private function setShowOnDelay($showOnDelay)
    {
        if (!is_bool($showOnDelay)) {
            throw new \InvalidArgumentException("Invalid showOnDelay");
        }
        $this->showOnDelay = $showOnDelay;
    }

    public function __construct($html = '', $css = '', array $options = [])
    {
        $this->setHtml($html);
        $this->setCss($css);
        foreach ($options as $name => $value) {
            $methodName = 'set' . ucfirst($name);
            if (method_exists($this, $methodName)) {
                $this->{$methodName}($value);
             } else {
                echo $methodName;
            }
        }

    }

    public function getConfig()
    {
        return [
            'width' => $this->width,
            'height' => $this->height,
            'html' => $this->html,
            'css' => $this->css,
            'cookieExp' => $this->cookieExp,
            'delay' => $this->delay,
            'showOnDelay' => $this->showOnDelay
        ];

    }
}