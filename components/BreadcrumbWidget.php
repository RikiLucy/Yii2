<?php


namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class BreadcrumbWidget extends Widget
{
    public $bread = [];

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        if(count($this->bread) === 0){
            //echo 'пустой массив';
        }

    }

    public function run()
    {
        echo Html::beginTag('ul', ['class' => 'breadcrumb']);
        foreach ($this->bread as $item => $value):


            echo Html::beginTag('li');
            echo Html::tag('a', Html::encode($value), ['href' => $item]);
            echo Html::endTag('li');

        endforeach;
        echo Html::endTag('ul');
        //echo $this->bread;
    }
}