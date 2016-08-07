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

        //$articles = articles::find()->all();
    }

    public function run()
    {
            echo Html::beginTag('div', ['class' => 'panel panel-default']);

        echo Html::tag('h2', $this->articles->name, ['class' => 'panel-heading']);

        echo Html::beginTag('div', ['class' => 'panel-body']);

        echo Html::tag('i', Html::tag('i', $this->articles->anotation));
        
        echo Html::tag('p', $this->articles->text);

        echo Html::beginTag('div', ['class' => 'panel-footer']);
        echo Html::decode('Автор: ' . $this->articles->author . '<br>' . ' Дата: ' . $this->articles->date);


        echo Html::endTag('div');
        echo Html::endTag('div');
        echo Html::endTag('div');
    }
}