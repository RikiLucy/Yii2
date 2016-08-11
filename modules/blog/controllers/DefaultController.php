<?php

namespace app\modules\blog\controllers;

use yii\data\Pagination;
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
    public function behaviors()
    {
        return [

        ];
    }
    public function actionIndex()
    {

        $data = articles::getDb()->cache(function (){
            $query = articles::find()->orderBy('id DESC');
            $countQuery = clone $query;
            $pages = new Pagination([
                'totalCount' => $countQuery->count(),
                'pageSize' => 2
            ]);
            return [
                'articles' => $query->offset($pages->offset)
                ->limit($pages->limit)
                ->all(),
                'pages' => $pages
            ];
        });

        return $this->render('index', [
            'articles' => $data['articles'],
            'pages' => $data['pages']
        ]);
    }
}
