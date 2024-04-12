<?php

namespace demo\SimplePackage\controllers;

use yii\web\Controller;

/**
 * Default controller for the `demo` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        echo "No network "; die;
        return $this->render('index');
    }
}
