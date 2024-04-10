<?php

namespace demo\SimplePackage;
/**
 * demo module definition class
 */

class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'demo\SimplePackage\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }
}
