<?php

namespace app\modules\blog\controllers;

use yii\data\Pagination;
use yii\web\Controller;
use app\models\articles;
use yii;


/**
 * Default controller for the `blog` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function behaviors()
    {
        return [
            'cache' => [
                'class' => 'yii\filters\PageCache',
                'only' => ['index'],
                'variations' => [
                    Yii::$app->getRequest()->getUrl(),
                ],

                ],

        ];
    }
    public function actionIndex()
    {
        $query = articles::find()->orderBy('id DESC');
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 2
    ]);
        $articles = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        //$articles = articles::find()->orderBy('id DESC')->all();
        return $this->render('index', [
            'articles' => $articles,
            'pages' => $pages
        ]);
    }
}
