<?php

namespace app\modules\blog\controllers;

use yii\web\Controller;
use app\models\articles;


/**
 * Default controller for the `blog` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $articles = articles::find()->orderBy('id DESC')->all();
        return $this->render('index', ['article' => $articles]);
    }
}
