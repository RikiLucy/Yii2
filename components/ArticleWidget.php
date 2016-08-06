<?php
/**
 * Created by PhpStorm.
 * User: Phenom
 * Date: 07.08.2016
 * Time: 0:01
 */

namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
use app\models\articles;


class ArticleWidget extends Widget
{

    public $articles = [];

    public function init()
    {

        $articles = articles::find()->all();
    }

    public function run()
    {

    }
}