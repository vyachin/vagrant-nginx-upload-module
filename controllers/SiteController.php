<?php

namespace app\controllers;

class SiteController extends \yii\web\Controller
{
    public function beforeAction($action)
    {
        if ($action->id == 'upload') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUpload()
    {
        echo "<pre>";
        var_dump(['_GET' => $_GET, '_POST' => $_POST, '_FILES' => $_FILES, '_SERVER' => $_SERVER]);
    }
}

